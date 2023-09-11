<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    // index
    public function index(){
        return view("index");
    }

    public function guess(){

        return view("index");
    }
    public function select_num(Request $request){
        $name = $request->input("name");
        $unique_num = [];
        while(count($unique_num)<4){
            $num = mt_rand(0,9);
            if(!in_array($num,$unique_num)){                
                $unique_num[] = (int)$num;
            }
        }        

        return view("index",['unique_num' => $unique_num,'name' => $name]);
    }


}
