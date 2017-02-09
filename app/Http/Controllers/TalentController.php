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
      $talents = Talent::where('office_id', $request->office_id)->orderBy('id', 'desc')->paginate(7);
      \Session::flash('flash_message', '「'.Office::find($request->office_id)->name.'」で絞り込まれました。');
    }
    else
      $talents = Talent::orderBy('id', 'desc')->paginate(7);
    return view('talent', ['talents' => $talents, 'offices' => $offices, 'search_keys' => ['office_id' => $request->office_id]]);
  }

  public function create()
  {
    $offices = Office::all();
    return view('talent/create', ['offices' => $offices]);
  }

  public function store(Request $request)
  {
    Talent::create($request->all());
    return redirect()->to('/talent');
  }

  public function destroy($id)
  {
    $talent = Talent::find($id);
    $talent->delete();
    return redirect()->to('/talent');
  }
}
