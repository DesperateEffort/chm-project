<?php

namespace App\Http\Controllers;
use App\User;
use App\VideoType;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function Upload()
  {
    if (auth()->User()->user_level != 1){
      return redirect('/');
    }
    $videoType = DB::table('video_types')->get();
    return view('/adminpage/upload', [
      'videotype' => $videoType,
    ]);
  }
  public function Store(Request $request)
  {
    if (auth()->User()->user_level != 1){
      return redirect('/');
    }
    $data = request()->validate([
      'title' => ['required', 'string'],
      'video' => ['required', 'mimes:mp4,mov,ogg,avi,wmv', 'max:200000'],
      'type' => ['required', 'string'],
    ],
    [   
      'title.required' => 'The Title of the Video field is required.',
      'video.required' => 'The Video file field is required.',
      'video.mimes' => 'Suggested Video file should be in .MP4, .MOV, .WMV, .AVI, or .OGG format only.',
      'video.max' => 'Suggested Video size should be limited to 200mb only.',
      'type.required' => 'Please select value for the Type of Video, under sub categories.',
    ]); 
    $videoExtensionName = $data['video']->getClientOriginalExtension();
    auth()->user()->Video()->create([
      'videosubtype_id' => $data['type'],
      'title' => $data['title'],
    ]);
    $lastInsertedID = DB::getPdo()->lastInsertId();    
    $videopath = request('video')->storeAs('video/uploaded', 'VideoUp'.$lastInsertedID.'.'.$videoExtensionName, 'public');
    DB::table('videos')
            ->where('id', $lastInsertedID)
            ->update(['videopath' => "/Storage/".$videopath]);
    return redirect('/Video/Posted/'.$lastInsertedID);
  }
}
