<?php

namespace App;
const SEX_MEN = 1;
const SEX_WOMEN = 2;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
  protected $table = 'talents';

  public function office()
  {
    return $this->belongsTo('App\Office');
  }

  public function getSex()
  {
    return ($this->sex == SEX_MEN) ? '男' : '女' ;
  }  
}
