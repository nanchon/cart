<?php

namespace App\Http\Controllers;

use App\Talent;
use Illuminate\Http\Request;

class TalentController extends Controller
{
  public function index()
  {
    // $talents = Talent::all();
    $talents = Talent::paginate(7);
    return view('talent', ['talents' => $talents]);
  }
}
