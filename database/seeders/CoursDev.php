<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CoursDev extends Seeder
{
    public function run(): void
    {
        DB::table('cours')->insert([
            'idCours'=>rand(5,20) ,
            'nameCours'=>Str::random(20),
        ]);
    }
}
