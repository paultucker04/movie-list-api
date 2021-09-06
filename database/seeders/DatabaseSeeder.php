<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \App\Models\Movie;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        $this->seedMovies();
    }

    public function seedMovies()
    {
        $this->insertMovie("Captain America: The Winter Soldier", 2014, "100402", "captain_america_the_winter_soldier_2014");
        $this->insertMovie("Spider-Man: Into the Spider-Verse", 2018, "324857", "spider_man_into_the_spider_verse");
        $this->insertMovie("Avengers: Infinity War", 2018, "299536", "avengers_infinity_war");
        $this->insertMovie("The Dark Knight", 2008, "155", "the_dark_knight");
        $this->insertMovie("Crazy Stupid Love", 2011, "50646", "crazy_stupid_love_2011");
        $this->insertMovie("The Shawshank Redemption", 1994, "278", "shawshank_redemption");
    }

    public function insertMovie($name, $year, $movieDb, $rtStub)
    {
        Movie::insert([
            'name' => $name,
            'year' => $year,
            'the_movie_db_id' => $movieDb,
            'rotten_tomatoes_stub' => $rtStub
        ]);
    }
}
