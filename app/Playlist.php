<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlists';
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'author',
        'playlistid',
        'title'
    ];
}
