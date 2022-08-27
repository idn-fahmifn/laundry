<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
        $user->email = "admin@test.com";
     */
    public function run()
    {
        $user = new\App\User;
        $user->name = "admin";
        $user->username = "admin";
        $user->email = "admin@test.com";
        $user->level = "admin";
        $user->password = \Hash::make("asdasdasd");
        $user->save();
        $this->command->info("User Telah ditambahkan");
    }
}
