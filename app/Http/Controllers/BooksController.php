<?php

namespace App\Http\Controllers;
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
        $unique_num = session('unique_num', []);


        return view("index",['unique_num' => $unique_num,'name' => $name]);
    }
    public function insert(){
        
    }
    public function select_num(){
        $unique_num = [];
        $name = "";
        while(count($unique_num)<4){
            $num = mt_rand(0,9);
            if(!in_array($num,$unique_num))              
                $unique_num[] = (int)$num;         
        }
        session(['unique_num' => $unique_num]);

        return view("index",['unique_num' => $unique_num,'name' => $name]);
    }


}
