<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = [
          [
             'name'=>'Dickson',
             'email'=>'admin@deekielabs.com',
              'is_Admin'=>'1',
             'password'=> bcrypt('Frogman28@(0)(0)'),
             







           ]

          ];

          foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
