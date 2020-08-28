<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 30; $i++){
            Event::create([
                'name' => 'test',
                'detail' => 'test',
                'start_datetime' => '2020-08-29 23:00:00',
                'end_datetime' => '2020-08-29 23:00:00',
                'number_of_members'=>2,
                'url' =>'http://test'
            ]);
        }
    }
}
