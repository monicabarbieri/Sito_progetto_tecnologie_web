<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert(
            [
            [
                'user_id' => '4',
                    'comment'  => 'Your restaurant is so good',
                     'created_at'    => date('Y-m-d h:i:s'),
                     'updated_at'    => date('Y-m-d h:i:s')
                ],
                [
                    'user_id' => '2',
                    'comment'  => 'The local is simple and good looking',
                     'created_at'    => date('Y-m-d h:i:s'),
                     'updated_at'    => date('Y-m-d h:i:s')
                ],
                [
                    'user_id' => '3',
                    'comment'  => 'It is very easy to make a reservation, thank u so much',
                     'created_at'    => date('Y-m-d h:i:s'),
                     'updated_at'    => date('Y-m-d h:i:s')
                ],[
                    'user_id' => '8',
                    'comment'  => 'The fish is very fresh and so good',
                     'created_at'    => date('Y-m-d h:i:s'),
                     'updated_at'    => date('Y-m-d h:i:s')
                ], [
                    'user_id' => '10',
                    'comment'  => 'Wonderful restaurant and nice web-site',
                     'created_at'    => date('Y-m-d h:i:s'),
                     'updated_at'    => date('Y-m-d h:i:s')
                ]]
            );
    }
}
