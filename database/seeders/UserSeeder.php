<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root = User::create([
            'name' => 'root',
            'email' => 'iwansafr@gmail.com',
            'password' => bcrypt('root')
        ]);
        $root->assignRole('root');

        $admin = User::create([
            'name' => 'admin',
            'email' => 'esoftgreat@gmail.com',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('admin');

        $writer = User::create([
            'name' => 'writer',
            'email' => 'writer@esoftgreat.com',
            'password' => bcrypt('writer')
        ]);
        $writer->assignRole('writer');
        $member = User::create([
            'name' => 'member',
            'email' => 'member@esoftgreat.com',
            'password' => bcrypt('member')
        ]);
        $member->assignRole('member');
    }
}
