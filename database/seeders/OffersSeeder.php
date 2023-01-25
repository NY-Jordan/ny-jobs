<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /*$table->string('title');
            $table->integer('price');
            $table->string('type');
            $table->string('days')->nullable();*/
    public function run()
    {
        DB::table('offers')->insert([
            'title' => ' 3 publication d\'offres',
            'type' => 'package',
            'price' => 12000,
        ]);

        DB::table('offers')->insert([
            'title' => '5 publication d\'offres',
            'type' => 'package',
            'price' => 19000,
        ]);

        DB::table('offers')->insert([
            'title' => '10 publication d\'offres',
            'type' => 'package',
            'price' => 35000,
        ]);

        DB::table('offers')->insert([
            'title' => '20 publication d\'offres \\ mois',
            'type' => 'subscription',
            'price' => 50000,
            'days' => '30 days',
        ]);

        DB::table('offers')->insert([
            'title' => '50 publication d\'offres \\ mois',
            'type' => 'subscription',
            'price' => 80000,
            'days' => '30 days',
        ]);

        DB::table('offers')->insert([
            'title' => '100 publication d\'offres \\ mois',
            'type' => 'subscription',
            'price' => 120000,
            'days' => '30 days',
        ]);

        DB::table('offers')->insert([
            'title' => '5 jours d\'access illimité',
            'type' => 'cvtheque',
            'price' => 15000,
            'days' => '5 days',
        ]);

        DB::table('offers')->insert([
            'title' => '10 jours d\'access illimité',
            'type' => 'cvtheque',
            'price' => 25000,
            'days' => '10 days',
        ]);

        DB::table('offers')->insert([
            'title' => '30 jours d\'access illimité',
            'type' => 'cvtheque',
            'price' => 50000,
            'days' => '30 days',
        ]);

        DB::table('offers')->insert([
            'title' => '90 jours d\'access illimité',
            'type' => 'cvtheque',
            'price' => 100000,
            'days' => '90 days',
        ]);
    }
}
