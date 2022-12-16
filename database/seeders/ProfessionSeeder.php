<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Consulta directamente con SQL
        //El marcador "?" es para que posteriormente se le pase el valor del campo a llenar. Y si se coloca :title tendria que pasar un array asociativo
       // DB::insert('INSERT INTO professions (title) VALUES (:title)',[
       //     'title'=>'Desarrollador back-end'
       // //]);
        
       //DB::table('professions')->insert([
       // 'title' => 'Back-End developer',
       // ]);

        //$profession = new Profession();

        Profession::create([
            'title' => 'Back-End developer'
        ]);

        Profession::factory(5)->create([

        ]);

        //Profession::create([
        //    'title' => 'Font-End developer',
       //]);

       //Profession::create([
        //   'title' => 'Diseñador web',
        //]);
        
    }
}
