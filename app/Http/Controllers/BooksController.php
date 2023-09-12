<?php

namespace App\Http\Controllers;

use App\Models\guessHistory;
use Illuminate\Http\Request;
session_start();
class BooksController extends Controller
{
    
    // index
    public function index(){
        return view("index");
    }

    public function guess(Request $request){
        $name = $request->input("name");
        session(['name' => $name]);

        $unique_num = session('unique_num', []);
        $guess = $request->input("guess");
        $guess_num = str_split($guess);
        
        $A = 0;
        $B = 0;

        for($i=0;$i<count($unique_num);$i++){    
            if($unique_num[$i] == $guess_num[$i]){
                $A++;
            }else{   
                for($j=0;$j<count($guess_num);$j++){                     
                    if($unique_num[$i] == $guess_num[$j]){
                        $B++;
                        break;
                    }
                }      
            }
        }


        $ans = $guess." ==> ".$A."A".$B."B" ;
              
        if(!session()->has('history')){           
            $history = ""; 
            session(['history' => $history]);
        }
        $history = session('history');
        if($history !== "")
            $history .= "、" .$ans;
        else
            $history = $ans;
        session(['history'=>$history]);

        if(!session()->has('result')){           
            $result = ""; 
            session(['result' => $result]);
        }
        $result = session('result').$ans."<br>";
        session(['result'=>$result]);

        return view('index');
    }
    public function show(){
        $result = session('result');
        $history = session('history');
        // echo $result;
        echo $history;
    }
    public function insert(){
        guessHistory::create([
            'userID' => session('name'),
            'history' => session('history'),
        ]);
        return view("index");
    }
    public function select_num(){
        $unique_num = [];
        $name = "";
        while(count($unique_num)<4){
            $num = mt_rand(0,9);
            if(!in_array($num,$unique_num))              
                $unique_num[] = (int)$num;         
        }
        session(['unique_num' => $unique_num,'name' => $name]);

        return view("index");
    }
    public function clear(){
        session()->flush();
        return redirect()->route('start');
    }
}
