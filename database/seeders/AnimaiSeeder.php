<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animais')->insert([
            [
                "nome" => 'abacaxi',
                "idade" => 18
            ],
            [
                "nome" => 'batata',
                "idade" => 7
            ]
        ]);
    }
}
