<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $items = [
        ['first_name' => 'Admin', 'email' => 'admin@pipapo.com', 'password' => '$2y$10$2vc3dFX0o5wRFbAZHbA07ur6gGVNqSbxA2TNAnRnPBzcA26ZjBzxG',], //password: abcd1234
        ['first_name' => 'User', 'email' => 'user@pipapo.com', 'password' => '$2y$10$2vc3dFX0o5wRFbAZHbA07ur6gGVNqSbxA2TNAnRnPBzcA26ZjBzxG',], //password: abcd1234
      ];

      foreach ($items as $item) {
        \App\User::create($item);
      }
    }
}
