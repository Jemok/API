<?php

use Illuminate\Database\Seeder;
use App\ParcelDetail;

class ParcelDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParcelDetail::truncate();

        ParcelDetail::create([
            'name' =>  'Red Jumper',
            'price' =>  10000,
            'oauth_client_id' => 1,
            'user_id' => 1,
            'agent_id' => 1
        ]);

        ParcelDetail::create([
            'name' =>  'Safari Boots',
            'price' =>  6000,
            'oauth_client_id' => 1,
            'user_id' => 1,
            'agent_id' => 1
        ]);

        ParcelDetail::create([
            'name' =>  'Laptop',
            'price' =>  5000,
            'oauth_client_id' => 1,
            'user_id' => 1,
            'agent_id' => 1
        ]);
    }
}
