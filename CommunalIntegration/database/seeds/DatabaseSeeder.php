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
        $this->call(RoleTableSeeder::class);
        $this->call(TownTableSeeder::class);
        $this->call(CampaignTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ObjectiveTableSeeder::class);
        $this->call(TargetGroupTableSeeder::class);
        $this->call(ThemeTableSeeder::class);
        $this->call(ActionTableSeeder::class);
        $this->call(ActionTargetGroupTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(OutcomeTableSeeder::class);
        $this->call(NationalityTableSeeder::class);
        $this->call(LanguageOutcomeTableSeeder::class);
    }
}
