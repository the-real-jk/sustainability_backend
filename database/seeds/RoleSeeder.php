<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class, 5)->create();
        $this->createTestRole();
    }

    private function createTestRole()
    {
        $role = new Role();
        $role->rolename = "testuser";
    }
}
