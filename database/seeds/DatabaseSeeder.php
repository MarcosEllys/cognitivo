<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

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

       $this->call(UserTableSeeder::class);

       Model::reguard();
    }
 }

 class UserTableSeeder extends Seeder {

  public function run()
  {

   /*USERS ARRAY*/
    $users =[

        [
            'id'  => 1,
            'email'    => 'marcos.ellys@gmail.com',
            "password" => Hash::make("cognitivo@2015"),
            "name"  => "Marcos Ellys"
        ],
        [
            'id'  => 2,
            'email'    => 'hamilton@cognitivo.com',
            "password" => Hash::make("ton@cognitivo"),
            "name"  => "Hamilton Elton"
        ]
    ];

   foreach ($users as $user){
       User::create($user);
    }
 }

}
