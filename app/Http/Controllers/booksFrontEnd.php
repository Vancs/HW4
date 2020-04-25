<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
class booksFrontEnd extends Controller{
    public function show($post){
        $books = \DB::table('BestSellingBooks')->get();
        //print("Books = <pre>"); print_r($books); exit;
        return \View::make('showBooks')-> with ('data', $books);
    }
}
