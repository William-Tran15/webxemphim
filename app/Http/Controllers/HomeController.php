<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Nation;
use App\Year;
use App\Language;
use App\Movie;


class HomeController extends Controller
{
    //

    public function index()
    {
        $language = Language::all();
        $cate = Cate::all();
        $nation = Nation::all();
        $year = Year::all();
       // $slider = Movie::inRandomOrder()->latest()->limit(10)->get();
        $slider = Movie::latest()->where('point', '>', '7.0/10 (IMDb) ') ->limit(10)->get();
        $newmovie = Movie::latest()->limit(24)->get();
        $randommovie = Movie::inRandomOrder()->limit(24)->get();
        return view('user.index', compact('cate', 'nation', 'year', 'slider', 'newmovie', 'randommovie', 'language'));
    }

    public function about()
    {
        $cate = Cate::all();
        $nation = Nation::all();
        $year = Year::all();
        return view('user.about', compact('cate', 'nation', 'year'));
    }

    // public function sendmail(){
    //     $data = array('info'=>'xin chào bạn đây là email ');
    //     Mail::send('user.mail', $data, function($message){
    //         $message->from('1@gmail.com', 'Movies');
    //         $message->to('1@gmail.com', 'User')->subject('Hello');
    //     });
    //     echo 'thành công';
    // }

}
