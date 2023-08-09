<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Topic $topic)
    {
        request()->validate([
            'content' => 'required|min:5'
        ]);

        
    }
}
