<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();

      $this->call(OfficesTableSeeder::class);
      $this->call(TalentsTableSeeder::class);
      // $this->call(UsersTableSeeder::class);

      Model::reguard();
    }
}
