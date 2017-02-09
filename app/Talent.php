<?php

namespace App;
const SEX_MEN = 1;
const SEX_WOMEN = 2;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
  protected $table = 'talents';

  protected $fillable = array('name', 'sex', 'office_id');

  public function office()
  {
    return $this->belongsTo('App\Office');
  }

  public function getSex()
  {
    return ($this->sex == SEX_MEN) ? '男' : '女' ;
  }

  public static function getSexList()
  {
    return [SEX_MEN => '男', SEX_WOMEN => '女'];
  }
}
