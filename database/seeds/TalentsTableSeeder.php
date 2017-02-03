<?php

use Illuminate\Database\Seeder;

class TalentsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('talents')->insert(['name' => '○○拓哉', 'sex' => 1, 'office_id' => 1]);
    DB::table('talents')->insert(['name' => '○○正広', 'sex' => 1, 'office_id' => 1]);
    DB::table('talents')->insert(['name' => '○○剛', 'sex' => 1, 'office_id' => 1]);
    DB::table('talents')->insert(['name' => '○○吾郎', 'sex' => 1, 'office_id' => 1]);
    DB::table('talents')->insert(['name' => '○○慎吾', 'sex' => 1, 'office_id' => 1]);
    DB::table('talents')->insert(['name' => '○○雅弘', 'sex' => 1, 'office_id' => 2]);
    DB::table('talents')->insert(['name' => '○○春馬', 'sex' => 1, 'office_id' => 2]);
    DB::table('talents')->insert(['name' => '○○由美子', 'sex' => 2, 'office_id' => 2]);
    DB::table('talents')->insert(['name' => '○○翔平', 'sex' => 1, 'office_id' => 3]);
    DB::table('talents')->insert(['name' => '○○今日子', 'sex' => 2, 'office_id' => 3]);
    DB::table('talents')->insert(['name' => '○○徹平', 'sex' => 1, 'office_id' => 3]);
    DB::table('talents')->insert(['name' => '○○さんま', 'sex' => 1, 'office_id' => 4]);
    DB::table('talents')->insert(['name' => '○○人志', 'sex' => 1, 'office_id' => 4]);
    DB::table('talents')->insert(['name' => '○○雅功', 'sex' => 1, 'office_id' => 4]);
    DB::table('talents')->insert(['name' => '○○アキ子', 'sex' => 1, 'office_id' => 5]);
    DB::table('talents')->insert(['name' => '○○さとみ', 'sex' => 2, 'office_id' => 5]);
    DB::table('talents')->insert(['name' => '○○はるか', 'sex' => 2, 'office_id' => 5]);
  }
}
