<?php

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('offices')->insert(['name' => 'ジャーニーズ事務所', 'address' => '東京都', 'tel' => '03-1234-1234', 'president' => 'hoge 太郎']);
    DB::table('offices')->insert(['name' => 'アミューズ', 'address' => '東京都', 'tel' => '03-1234-1234', 'president' => 'hoge 太郎']);
    DB::table('offices')->insert(['name' => 'バーニングプロダクション', 'address' => '東京都', 'tel' => '03-1234-1234', 'president' => 'hoge 太郎']);
    DB::table('offices')->insert(['name' => '吉本興業', 'address' => '東京都', 'tel' => '03-1234-1234', 'president' => 'hoge 太郎']);
    DB::table('offices')->insert(['name' => 'ホリプロ', 'address' => '東京都', 'tel' => '03-1234-1234', 'president' => 'hoge 太郎']);
  }
}
