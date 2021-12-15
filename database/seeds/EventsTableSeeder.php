<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();

		$events = ['None'];

    	foreach ($events as $event) {
			DB::table('events')->insert([
		        'typology' => $event,
				'updated_at' => date('Y-m-d h:i:s'),
				'created_at' => date('Y-m-d h:i:s')		        		        
			]);			
        }

        //Model::reguard();
    }
}
