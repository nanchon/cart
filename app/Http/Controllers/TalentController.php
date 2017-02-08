<?php

namespace App\Http\Controllers;

use App\Talent;
use App\Office;
use Illuminate\Http\Request;

class TalentController extends Controller
{
  public function index(Request $request)
  {
    \Session::forget('flash_message');
    $offices = Office::all();
    if(isset($request->office_id) && ($request->office_id != '')){
      $talents = Talent::where('office_id', $request->office_id)->paginate(7);
      \Session::flash('flash_message', '「'.Office::find($request->office_id)->name.'」で絞り込まれました。');  // 追加      
    }
    else
      $talents = Talent::paginate(7);
    return view('talent', ['talents' => $talents, 'offices' => $offices, 'search_keys' => ['office_id' => $request->office_id]]);
  }
}
