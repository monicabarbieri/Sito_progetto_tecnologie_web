<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('reservations')->insert(
            [
            [
                    'user_id'   => '3',
                    'people'  => '2',
                    'date'      => '2021-11-25',
                    'time'  => '21:00',
                    'green_pass' => 'yes',
                    'meat_menu'      => '0',
                    'fish_menu'      => '0',
                    'vegetarian_menu'      => '0',
                    'vegan_menu'      => '0',
                    'child_menu'      => '0',

                    'request'  => '',
            ],[
                'user_id'   => '2',
                'people'  => '3',
                'date'      => '2021-11-14',
                'time'  => '13:15',
                'green_pass' => 'yes',
                'meat_menu'      => '2',
                'fish_menu'      => '1',
                'vegetarian_menu'      => '0',
                'vegan_menu'      => '0',
                'child_menu'      => '0',

                'request'  => 'If is possible, not near the kitchen, thank you',
            ],[
                'user_id'   => '4',
                'people'  => '1',
                'date'      => '2021-11-14',
                'time'  => '13:00',
                'green_pass' => 'yes',
                'meat_menu'      => '0',
                'fish_menu'      => '0',
                'vegetarian_menu'      => '0',
                'vegan_menu'      => '1',
                'child_menu'      => '0',

                'request'  => '',
            ],[
                'user_id'   => '5',
                'people'  => '2',
                'date'      => '2021-09-22',
                'time'  => '20:30',
                'green_pass' => 'no',
                'meat_menu'      => '0',
                'fish_menu'      => '0',
                'vegetarian_menu'      => '2',
                'vegan_menu'      => '0',
                'child_menu'      => '0',
                'request'  => '',
            ],[
                'user_id'   => '6',
                'people'  => '7',
                'date'      => '2021-12-04',
                'time'  => '14:00',
                'green_pass' => 'yes',
                'meat_menu'      => '0',
                'fish_menu'      => '0',
                'vegetarian_menu'      => '0',
                'vegan_menu'      => '0',
                'child_menu'      => '0',

                'request'  => '',
            ] , [
                'user_id'   => '7',
                'people'  => '4',
                'date'      => '2021-11-24',
                'time'  => '21:15',
                'green_pass' => 'yes',
                'meat_menu'      => '0',
                'fish_menu'      => '0',
                'vegetarian_menu'      => '0',
                'vegan_menu'      => '0',
                'child_menu'      => '0',

                'request'  => '',

            ],[
                'user_id'   => '8',
                'people'  => '2',
                'date'      => '2021-12-13',
                'time'  => '12:00',
                'green_pass' => 'yes',
                'meat_menu'      => '1',
                'fish_menu'      => '0',
                'vegetarian_menu'      => '0',
                'vegan_menu'      => '0',
                'child_menu'      => '1',

                'request'  => '',

            ] ,[
                'user_id'   => '9',
                'people'  => '5',
                'date'      => '2021-11-18',
                'time'  => '13:30',
                'green_pass' => 'yes',
                'meat_menu'      => '1',
                'fish_menu'      => '1',
                'vegetarian_menu'      => '1',
                'vegan_menu'      => '1',
                'child_menu'      => '1',

                'request'  => 'Well-cooked meat',

            ] ,[
                'user_id'   => '10',
                'people'  => '1',
                'date'      => '2021-11-12',
                'time'  => '20:45',
                'green_pass' => 'yes',
                'meat_menu'      => '0',
                'fish_menu'      => '1',
                'vegetarian_menu'      => '0',
                'vegan_menu'      => '0',
                'child_menu'      => '0',

                'request'  => '',

            ]
        ]);
    }
}