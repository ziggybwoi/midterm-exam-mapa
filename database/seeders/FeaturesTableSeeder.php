<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            ['name' => 'Model', 'description' => 'It serves as the blueprint for the data, in which it connects the application to the database'],
            ['name' => 'View', 'description' => 'Is the user interface that displays the final output in the browser'],
            ['name' => 'Controller', 'description' => 'It keeps the logic of the application and is responsible for the interaction between the model and the view'],
            ['name' => 'Routes', 'description' => 'It handles the request and is the one who determines which controller to send the data'],
            ['name' => 'Middleware', 'description' => 'Is responsible for the authentication for requests'],
            ['name' => 'Blade Templates', 'description' => 'Serves as the "backend" in which where the code of the data to be displayed is'],
            ['name' => 'Migrations', 'description' => 'It is the version control for the database'],
            ['name' => 'Seeders', 'description' => 'It quickly inserts data into database table'],
            ['name' => 'Database', 'description' => 'Stores the data inputs'],
            ['name' => 'Eloquent ORM', 'description' => 'makes model interaction easier'],
        ]);

        
    }
}