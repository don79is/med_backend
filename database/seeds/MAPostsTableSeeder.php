<?php

use Illuminate\Database\Seeder;

class MAPostsTableSeeder extends Seeder
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
                'user_id' => 1,
                'title' => 'First Post',
                'text' => 'Hello as cia',
            ),
        );
        DB::table('ma_posts')->insert($data);
    }

}
