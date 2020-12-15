<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    public function run()
    {


        $users = [
            ["name" => "Admin","surname" => "Admin","kimlik" =>"11111111111","telefon" =>"999999999",  "email" => "admin@admin.com","password" => bcrypt("admin")],
            ["name" => "User","surname" => "User",  "kimlik"   =>"00000000000","telefon" =>"999999999","email" => "user@user.com","password" => bcrypt("user")],
        ];

        foreach($users as $user){
            User::create($user);
        }

        DB::table("role_user")->insert(["role_id" => 1, "user_id" => 1]);
        DB::table("role_user")->insert(["role_id" => 2, "user_id" => 1]);
        DB::table("role_user")->insert(["role_id" => 2, "user_id" => 2]);
    }
}
