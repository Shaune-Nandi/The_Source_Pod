<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'time_id',
        'title',
        'description',
        'user_id',
        'podcast_audio_name',
        'podcast_image_name',
        'podcast_audio_storage_location',
        'podcast_image_storage_location',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
