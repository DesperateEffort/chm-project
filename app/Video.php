<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  protected $fillable = [
      'title', 'videosubtype_id', 'videopath', 
  ];
  public function User(){
    return $this->belongsTo(user::class);
  }
}
