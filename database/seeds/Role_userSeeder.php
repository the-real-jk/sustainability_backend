<?php

use Illuminate\Database\Seeder;
use App\Role_user;

class Role_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Role_user::class, 5)->create();
        $this->createTestAssociation();
    }

    private function createTestAssociation()
    {
        $role_user = new Role_user();
        $role_user->roles_id = 6;
        $role_user->users_id = 31;
    }
}
