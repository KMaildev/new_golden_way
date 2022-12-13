<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index()
    {
        $activities = Activities::all();
        return view('welcome', compact('activities'));
    }
}
