<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title='Welcome to your personal blog!!';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title='About us';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data=array(
            'title'=>'services',
            'services'=>    ['web development','software engineering','etc']
        );
        return view('pages.services')->with($data);
    }
}
