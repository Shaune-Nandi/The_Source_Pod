<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'time_id',
        'podcast_category',
        'title',
        'description',
        'user_id',
        'podcast_image_name',
        'podcast_image_storage_location',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function podcastCategory() {
        return $this->belongsTo(PodcastCategory::class, 'podcast_category');
    }

    public function podcastEpisodes() {
        return $this->hasMany(podcastEpisode::class, 'podcast_id');
    }
}
