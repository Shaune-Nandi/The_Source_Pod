<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Podcast;
use App\Models\User;

use Illuminate\Support\Facades\Storage;




class PodcastController extends Controller
{
    public function create_podcast() {
        return view('podcast.create_podcast');
    }

    public function save_podcast(Request $request, User $user) {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'podcast_audio' => 'required',
            'podcast_image' => 'required',
        ]);


        $audio_file = $request->file('podcast_audio');
        $image_file = $request->file('podcast_image');
        
        $time_id = time();

        $audio_file_name = str_replace(' ', '_', $audio_file->getClientOriginalName());
        $audio_file_name = $time_id . '_' . $audio_file_name; //Unique file name

        $image_file_name = str_replace(' ', '_', $image_file->getClientOriginalName());
        $image_file_name = $time_id . '.' . $image_file_name; //Unique file name

        $audio_path = $audio_file->storeAs('/public/podcasts', $audio_file_name);
        $image_path = $image_file->storeAs('/public/podcasts', $image_file_name);

        Podcast::create([
            'title' => $request->title,
            'time_id' => $time_id,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
            'podcast_audio_name' => $audio_file_name,
            'podcast_image_name' => $image_file_name,
            'podcast_audio_storage_location' => $audio_path,
            'podcast_image_storage_location' => $image_path,
        ]);

        return redirect('/admin_dashboard')->with("Success", "Podcast uploaded successfully");
    }


    public function show_podcast_dashboard() {
        $podcast = Podcast::latest('created_at')->get();
        return view('podcast.podcast_dashboard', compact('podcast'));
    }

    public function show_podcast_player(Podcast $podcast) {
        return view('podcast.podcast_player', compact('podcast'));
    }

    

    public function show_update_podcast() {
        return view('podcast.update_podcast');
    }
}
