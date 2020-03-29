<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoSubType extends Model
{
    //
  public function VideoType(){
    return $this->HasOne(VideoType::class);
  }
}
