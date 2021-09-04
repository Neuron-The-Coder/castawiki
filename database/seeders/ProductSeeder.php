<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(storage_path('app/public/data.csv'), "r");

        while(!feof($file)){
            $line = fgets($file);
            $data = explode('#', $line);
            DB::table('product')->insert([
                "name" => $data[1],
                "image" => $data[2],
                "category" => $data[3],
                "description" => $data[4]
            ]);
        }
        fclose($file);
    }
}
