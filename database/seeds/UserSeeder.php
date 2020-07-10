<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 30)->create();
        $this->createTestUser();
    }

    private function createTestUser()
    {
        $user = new User();
        $user->username = "TheRealBerndBeispiel";
        $user->password = password_hash("test123", PASSWORD_DEFAULT);
        $user->firstname = "Bernd";
        $user->lastname = "Beispiel";
        $user->email = "bernd.beispiel@gmail.com";
        $user->member_since = "01.01.2020";
        $user->save();
    }
}
