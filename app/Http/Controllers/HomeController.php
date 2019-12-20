<?php

namespace App\Http\Controllers;

use App\Attempt;
use App\Challenge;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home')->with('attempts', Auth::user()->attempts);
    }

    public function showChallenges() {
        return view('challenges')->with('challenges', [1, 2, 3]);
    }

    public function showLeaderboard() {
        return view('leaderboard')->with('users', User::all()); // TODO: order users
    }
}
