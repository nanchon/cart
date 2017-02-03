<?php

namespace App\Http\Controllers;

use App\Talent;
use Illuminate\Http\Request;

class TalentController extends Controller
{
  public function index()
  {
    $talents = Talent::all();
    return view('talent', ['talents' => $talents]);
  }
}
