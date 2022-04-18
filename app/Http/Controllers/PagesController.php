<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\Games;
use App\Models\User;


class PagesController extends Controller
{
    public function about(){

      return view('about');
    }

    

    public function contact(){

      return view('contact');
    }

    public function profile(){

      $users = User::all();
      return view('profile',compact('users'));
    }

    public function index(){

      $tournaments = Tournament::all();
      $games = Games::all();

      return view('welcome', compact('tournaments','games'));
    }
}
