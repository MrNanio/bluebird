<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new \App\User();
        $user->name='Admin';
        $user->email='admin@example.com';
        $user->password=bcrypt('admin1');
        $user->id='1';
        $user->role_id='1';
        $user->save();

        $user=new \App\User();
        $user->name='user';
        $user->email='user@example.com';
        $user->password=bcrypt('admin1');
        $user->id='2';
        $user->role_id='3';
        $user->save();

        $user=new \App\User();
        $user->name='user1';
        $user->email='user1@example.com';
        $user->password=bcrypt('admin1');
        $user->id='3';
        $user->role_id='3';
        $user->save();

        $user=new \App\User();
        $user->name='user2';
        $user->email='user2@example.com';
        $user->password=bcrypt('admin2');
        $user->id='4';
        $user->role_id='3';
        $user->save();

        $user=new \App\User();
        $user->name='user3';
        $user->email='user3@example.com';
        $user->password=bcrypt('admin3');
        $user->id='5';
        $user->role_id='3';
        $user->save();

        $user=new \App\User();
        $user->name='user4';
        $user->email='user4@example.com';
        $user->password=bcrypt('admin4');
        $user->id='6';
        $user->role_id='3';
        $user->save();

        $user=new \App\User();
        $user->name='user5';
        $user->email='user5@example.com';
        $user->password=bcrypt('admin5');
        $user->id='7';
        $user->role_id='3';
        $user->save();

        $user=new \App\User();
        $user->name='user6';
        $user->email='user6@example.com';
        $user->password=bcrypt('admin6');
        $user->id='8';
        $user->role_id='3';
        $user->save();

        $user=new \App\User();
        $user->name='user7';
        $user->email='user7@example.com';
        $user->password=bcrypt('admin7');
        $user->id='9';
        $user->role_id='3';
        $user->save();

        $user=new \App\User();
        $user->name='user8';
        $user->email='user8@example.com';
        $user->password=bcrypt('admin8');
        $user->id='10';
        $user->role_id='3';
        $user->save();

        $user=new \App\User();
        $user->name='user9';
        $user->email='user9@example.com';
        $user->password=bcrypt('admin9');
        $user->id='11';
        $user->role_id='3';
        $user->save();

        $user=new \App\User();
        $user->name='user10';
        $user->email='user10@example.com';
        $user->password=bcrypt('admin10');
        $user->id='12';
        $user->role_id='3';
        $user->save();
    }
}
