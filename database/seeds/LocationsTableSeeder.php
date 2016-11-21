<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::truncate();

        Location::create([
            'latitude' =>  '-1.102554',
            'longitude' => '37.013193',
            'location_name' => 'Juja Town',
            'user_id' => 1,
        ]);

        Location::create([
            'latitude' =>  '-1.117069',
            'longitude' => '37.009166',
            'location_name' => 'Kalimoni',
            'user_id' => 1,
        ]);

        Location::create([
            'latitude' =>  '-1.093761',
            'longitude' => '37.01958',
            'location_name' => 'Gate B',
            'user_id' => 1,
        ]);

        Location::create([
            'latitude' =>  '-1.100396',
            'longitude' => '37.014533',
            'location_name' => 'JKUAT Entry Road',
            'user_id' => 1,
        ]);

        Location::create([
            'latitude' =>  '-1.0358555',
            'longitude' => '37.0732998',
            'location_name' => 'Maathai SuperMarket',
            'user_id' => 1,
        ]);

    }
}
