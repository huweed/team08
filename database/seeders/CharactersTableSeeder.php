<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 20) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateRandomName() {
        $name = $this->generateRandomString(rand(2, 15));
        $name = strtolower($name);
        $name = ucfirst($name);
        return $name;
    }

    public function generateRandomTitle() {
        $title = $this->generateRandomString(rand(2, 15));
        $title = strtolower($title);
        $title = ucfirst($title);
        return $title;
    }

    public function generateRandomPosition() {
        $positions = ['輔助', '射手', '坦克', '法師', '鬥士', '刺客'];
        return $positions[rand(0, count($positions)-1)];

    }

    public function generateRandomDifficulty() {
        $positions = ['普通', '簡單', '困難'];
        return $positions[rand(0, count($positions)-1)];

    }

    public function run()
    {
        for ($i=0; $i<50; $i++)
        {
            $name = $this->generateRandomName();
            $position = $this->generateRandomPosition();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            $title = $this->generateRandomTitle();
            $difficulty = $this->generateRandomDifficulty();
            DB::table('characters')->insert([
                'name' => $name,
                'title' => $title,
                'cid' => rand(1,9),
                'position' => $position,
                'difficulty' => $difficulty,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);

        }
    }
}
