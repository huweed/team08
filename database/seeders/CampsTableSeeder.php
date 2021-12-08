<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CampsTableSeeder extends Seeder
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
    public function generateRandomCamp() {
        $camp = $this->generateRandomString(rand(2, 15));
        $camp = strtolower($camp);
        $camp = ucfirst($camp);
        return $camp;
    }
    public function generateRandomRule() {
        $rule = $this->generateRandomString(rand(2, 20));
        $rule = strtolower($rule);
        $rule = ucfirst($rule);
        return $rule;
    }

    public function generateRandomLevel() {
        $level = ['未知', '低', '中', '高'];
        return $level[rand(0, count($level)-1)];

    }
    public function generateRandomCity() {
        $city = $this->generateRandomString(rand(2, 15));
        $city = strtolower($city);
        $city = ucfirst($city);
        return $city;
    }
    public function generateRandomEnvironment() {
        $environment = $this->generateRandomString(rand(2, 15));
        $environment = strtolower($environment);
        $environment = ucfirst($environment);
        return $environment;
    }
    public function run()
    {
        for ($i=0; $i<10; $i++)
        {
            $camp = $this->generateRandomCamp();
            $rule = $this->generateRandomRule();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            $city = $this->generateRandomCity();
            $environment = $this->generateRandomEnvironment();
            $level = $this->generateRandomLevel();
            DB::table('camps')->insert([
                'camp' => $camp,
                'rule' => $rule,
                'city' => $city,
                'level' => $level,
                'environment' => $environment,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
