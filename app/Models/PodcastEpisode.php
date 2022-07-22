<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodcastEpisode extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'podcast_id',
        'episode_audio_name',
        'episode_audio_storage_location',
    ];

    public function Podcast (){
        return $this->belongsTo(Podcast::class);
    }
}
