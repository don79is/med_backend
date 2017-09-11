<?php

use Illuminate\Database\Seeder;

class MAUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array
            ('id' => 1,
                'email' => 'doni@doni.lt',
                'first_name' => 'Donatas',
                'last_name' => 'Tumanas',
                'role_id' => 1,
                'remember_token' => 'asdasd',
                'position' => 'buhalteris',
                'password' => Hash::make('demodemo'),
            ),
        );
        DB::table('ma_users')->insert($data);
    }
}
