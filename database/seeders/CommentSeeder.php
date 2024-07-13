<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('comments')->insert([
            [
                'username' => 'admin1',
                'comment' => "I like the changes you made here. Kudos to you guys!"
            ],
            [
                'username' => 'admin2',
                'comment' => "I agree with your suggestions. Keep up the great work!"
            ],
            [
                'username' => 'admin3',
                'comment' => "This project looks really interesting. Have you thought about collaborating?"
            ],
            [
                'username' => 'Jack_Sparrowx44',
                'comment' => "Ahoy mateys! The new features are as good as finding buried treasure."
            ],
            [
                'username' => 'Will_Turnerx21',
                'comment' => "Impressive improvements! It feels like sailing smoother seas now."
            ],
            [
                'username' => 'Elizabeth_Swanx98',
                'comment' => "These updates are just what we needed. Thank you for your hard work!"
            ],
            [
                'username' => 'Barbossa_Captain',
                'comment' => "Arrr! Well done on the updates, mates. We be charting new courses now."
            ],
            [
                'username' => 'Davy_Jonesx66',
                'comment' => "The changes have made a splash! Excellent work keeping things shipshape."
            ],
            [
                'username' => 'Adam_lavign',
                'comment' => "Great job on the new features. They really enhance user experience!"
            ],
            [
                'username' => 'Emily_Jonesx22',
                'comment' => "I'm impressed with the progress. It's exciting to see the project evolve."
            ],
            [
                'username' => 'Michael_Scottx45',
                'comment' => "These updates are fantastic! It's like hitting a home run in the ninth inning."
            ],
            [
                'username' => 'Sarah_Connorx88',
                'comment' => "The improvements are spot on. It feels like we're one step closer to the future."
            ],
            [
                'username' => 'John_Wickx50',
                'comment' => "I appreciate the attention to detail in these updates. It shows real dedication."
            ],
            [
                'username' => 'Lara_Croftx99',
                'comment' => "These enhancements are like discovering a hidden artifact. Well done!"
            ],
            [
                'username' => 'Tony_Starkx75',
                'comment' => "The updates are impressive, just like Stark Industries' latest tech."
            ],
            [
                'username' => 'Elena_Gilbertx66',
                'comment' => "The changes are fang-tastic! It's like a spell of improvement has been cast."
            ],
            [
                'username' => 'Bruce_WayneX88',
                'comment' => "These updates are Gotham-worthy. They're making a real difference."
            ],
            [
                'username' => 'Rachel_Greenx34',
                'comment' => "The improvements are so refreshing, like Central Perk coffee on a Monday morning."
            ],
        ]);
    }
}
