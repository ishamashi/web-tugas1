<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topik;

class TopikController extends Controller
{
    public function index(){
        return view('blogs', [
            'title' => 'Blog',
            'posts' => Topik::all()
        ]);
    }

    public function show(Topik $topik){
        return view('blog', [
            'title' => 'Blog',
            'post' => $topik
        ]);
    }
}
