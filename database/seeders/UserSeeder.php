<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$idProfession = DB::statement('SELECT id FROM professions WHERE title = "Desarrollador back-end"');
        
        $idProfession = Profession::
            where('title','Back-End developer')
            ->value('id');
        //$idProfession = DB::table('professions')
        //  ->whereTitle('Back-End developer') Con esto Laravel toma como primer argumento el "title"
        //  ->value('id');
        

        User::create([
            'name' => 'Emanuel Lezcano',
            'email' => 'emanuel@gmail.com',
            'password' => bcrypt('emanuel'),
            'professions_id' => $idProfession,
        ]);

        
        //cargo 5 registros aleatorios con la profecion especificada
        User::factory(5)->create([
            'professions_id' => $idProfession
        ]);
        //cargo 5 registros aleatorios con la profecion por defecto
        User::factory(5)->create();
        //factory(User::class)->create();
    }
}
