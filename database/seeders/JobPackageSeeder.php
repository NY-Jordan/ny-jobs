<?php

namespace Database\Seeders;

use App\Models\JobPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobPackage::factory()->count(1)->create();
    }
}
