<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function showName($name){
        
        return '<h1>hello '.$name. '</h1>';
    }
    function show(){
        
        return view ('welcome')
        -> with ('name','Boom')
        -> with ('lastname','Chok')
        -> with ('title','show about');
    }
}
