<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Podcast;
use App\Models\User;


class PodcastController extends Controller
{
    public function create_podcast() {
        return view('podcast.create_podcast');
    }

}
