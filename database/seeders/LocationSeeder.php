<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $location_parent_id1 = Location::create([
            'name' => 'UNW',
            'parent_id' => null,
        ]);

        $location_parent_id2 = Location::create([
            'name' => 'PRH',
            'parent_id' => null,
        ]);

        $location_parent_id3 = Location::create([
            'name' => 'ÄNW',
            'parent_id' => null,
        ]);

        foreach (['A1', 'A2', 'A3', 'A4', 'A5', 'B1', 'B2', 'B3', 'B4', 'B5', 'C1', 'C2', 'C3', 'C4', 'C5'] as $obj) {
            Location::create([
                'name' => $obj,
                'parent_id' => $location_parent_id1->id,
            ]);
        }
    }
}
