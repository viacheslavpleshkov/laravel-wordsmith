<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(PrivacypolicyTableSeeder::class);
        $this->call(SeoTableSeeder::class);
        $this->call(SociallinkTableSeeder::class);
    }
}
