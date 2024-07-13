<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoginSeeder extends Seeder
{
    public function run()
    {
        $currentDateTime = now()->toDateTimeString();
        $currentDate = now()->toDateString();

        DB::table('logins')->insert([
            [
                'username' => 'admin1',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'admin2',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'admin3',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Jack_Sparrowx44',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Will_Turnerx21',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Elizabeth_Swanx98',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Barbossa_Captain',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Davy_Jonesx66',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Adam_lavign',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Emily_Jonesx22',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Michael_Scottx45',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Sarah_Connorx88',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'John_Wickx50',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Lara_Croftx99',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Tony_Starkx75',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Elena_Gilbertx66',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Bruce_WayneX88',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
            [
                'username' => 'Rachel_Greenx34',
                'logtime' => $currentDateTime,
                'logdate' => $currentDate,
                'created_at' => now(),
            ],
        ]);
    }
}
