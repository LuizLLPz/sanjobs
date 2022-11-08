<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('User')->insert(
            [
                'name' => Str::random(5),
                'surname' => Str::random(5),
                'email' => Str::random(5).'@email.com',
                'password' => Hash::make('senha123'),
                'overview' => Str::random(30),
                'created_at' => Date::now()
            ]
        );

        DB::table('Role')->insert(
            ['name' => 'company']
        );
        DB::table('User')->insert(
            [
                'name' => Str::random(5),
                'surname' => Str::random(5),
                'email' => Str::random(5).'@email.com',
                'password' => Hash::make('password'),
                'overview' => Str::random(30),
                'created_at' => Date::now()
            ]
        );
        DB::table('user_role')->insert(
            [
                'user_id' => 2,
                'role_id' => 1
            ]
        );

        $cidades = fopen(__DIR__."/cities.csv", "r");
        $habilidades = fopen(__DIR__."/job_skills.csv", "r");
        $job_areas = fopen(__DIR__."/job_areas.csv", "r");


        while (($row = fgetcsv($cidades)) !== FALSE) {
              $row = explode(";", $row[0]);
              foreach($row as $city) {
                  $city = trim($city);
                  if (strlen($city) < 5) { continue; }
                  DB::table('City')->insert(
                      [
                          'name' => $city,
                          'state' => 'Paraná',
                      ]
                  );
              }

        }
        fclose($cidades);

        while (($row = fgetcsv($habilidades)) !== FALSE) {
              $row = explode(";", $row[0]);
              foreach($row as $skill) {
                  $skill = trim($skill);
                  if (strlen($skill) < 5) { continue; }
                  DB::table('Skill')->insert(
                      [
                          'name' => $skill,
                      ]
                  );
              }

        }
        fclose($habilidades);

        while (($row = fgetcsv($job_areas)) !== FALSE) {
              $row = explode(";", $row[0]);
              foreach($row as $area) {
                  $area = trim($area);
                  if (strlen($area) < 5) { continue; }
                  DB::table('Area')->insert(
                      [
                          'name' => $area,
                      ]
                  );
              }
        }
        fclose($job_areas);
    }
}
