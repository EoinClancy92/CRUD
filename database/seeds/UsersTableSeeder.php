<?php
# @Date:   2019-10-29T13:44:50+00:00
# @Last modified time: 2019-10-29T14:45:44+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Mo Che';
        $admin->email = 'admin@eobookstore.ie';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $admin = new User();
        $admin->name = 'John Jones';
        $admin->email = 'Johnj@eobookstore.ie';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_user);



    }
}
