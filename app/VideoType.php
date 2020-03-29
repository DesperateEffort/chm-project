<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoType extends Model
{
  protected $guarded = [];
  public function VideoSubType(){
    return $this->HasMany(VideoSubType::class);
  }
  public function User(){
    return $this->belongsTo(User::class);
  }
}
