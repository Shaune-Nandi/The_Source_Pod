<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Podcast;
use App\Models\PodcastCategory;
use App\Models\PodcastEpisode;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;




class PodcastController extends Controller
{
    public function welcome(){
        $podcast_highlights = Podcast::inRandomOrder()->limit(6)->get(); 
        $podcast_categories = PodcastCategory::all();  

        return view('welcome', compact('podcast_highlights', 'podcast_categories'));
    }
    
    public function show_podcast_categories ($PodcastCategory){
        $PodcastCategory = PodcastCategory::find($PodcastCategory);  
        return view('podcast.categories', compact('PodcastCategory'));
    }

    public function create_podcast() {
        $podcast_categories = PodcastCategory::all();  
        return view('podcast.create_podcast', compact('podcast_categories'));
    }

    public function save_podcast(Request $request, User $user) {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'podcast_image' => 'required',
            'podcast_category' => 'required',
        ]);

        $image_file = $request->file('podcast_image');
        
        $time_id = time();

        $image_file_name = str_replace(' ', '_', $image_file->getClientOriginalName());
        $image_file_name = $time_id . '.' . $image_file_name; //Unique file name

        $image_path = $image_file->storeAs('/public/podcasts/' . $time_id, $image_file_name);

        $podcast = Podcast::create([
            'title' => $request->title,
            'time_id' => $time_id,
            'podcast_category' => $request->podcast_category,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
            'podcast_image_name' => $image_file_name,
            'podcast_image_storage_location' => $image_path,
        ]);

        $podcast_episode = PodcastEpisode::all();

        return(redirect('/podcast/' . $podcast->id));

        // return view('podcast.create_podcast_episodes', ['time_id' => $time_id], compact('podcast_episode'));
    }



    public function show_podcast_episodes(Podcast $podcast) {
        return view('podcast.episodes_table', compact('podcast'));
    }


    public function create_episode(Podcast $podcast) {
        return view('podcast.create_podcast_episodes', compact('podcast'));
    }


    public function save_episode(Request $request, Podcast $podcast) {
        $time_id = $podcast->time_id;
        // $podcast = DB::table('podcasts')->where('time_id', $time_id)->value('id');
        // $podcast = Podcast::find($podcast);
        
        request()->validate([
            'episode_title' => ['required', 'string', 'max:255'],
            'episode_description' => ['required', 'string', 'max:1000'],
            'episode_audio' => 'required',
        ]);

        $time_id2 = time();

        $audio_file = $request->file('episode_audio');
        
        $audio_file_name = str_replace(' ', '_', $audio_file->getClientOriginalName());
        $audio_file_name = $time_id . '_' . $audio_file_name . '_' . $time_id2; //Unique file name

        $audio_path = $audio_file->storeAs('/public/podcasts/' . $time_id, $audio_file_name);


        PodcastEpisode::create([
            'title' => request('episode_title'),
            'description' => request('episode_description'),
            'podcast_id' => $podcast->id,
            'episode_audio_name' => $audio_file_name,
            'episode_audio_storage_location' => $audio_path,
        ]);

        return redirect('/podcast/' . $podcast->id)->with("Success", "Episode uploaded successfully");
    }



    public function show_podcast_dashboard() {
        $podcast = Podcast::latest('created_at')->get();
        return view('podcast.podcast_dashboard', compact('podcast'));
    }


    public function show_podcast_player(Podcast $podcast) {
        return view('podcast.podcast_player', compact('podcast'));
    }
    
    public function show_edit_podcast(Podcast $podcast) {
    $podcast_categories = PodcastCategory::all();  
    return view('podcast.edit_podcast', compact('podcast', 'podcast_categories'));
    }
        

    public function save_edit_podcast(Request $request, Podcast $podcast) {
        $time_id = $podcast->time_id;
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'podcast_category' => 'required',
        ]);
        $podcast->update([
            'title' => $request->title,
            'description' => $request->description,
            'podcast_category' => $request->podcast_category
        ]);
        $podcast->touch();
        return redirect('/podcast/' . $podcast->id)->with("Success", "Episode updated successfully");            
    }

                
    public function delete_podcast(Podcast $podcast) {
        $podcast->delete();
        $delete_audio = Storage::deleteDirectory('/public/podcasts/' . $podcast->time_id);

        return redirect('/podcast/dashboard')->with("Success", "Episode deleted successfully");   
    }

    public function show_update_podcast() {
        return view('podcast.update_podcast');
    }
}
