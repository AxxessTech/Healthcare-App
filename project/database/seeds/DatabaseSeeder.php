<?php

use App\Agency;
use App\Caregiver;
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
        // $this->call(UsersTableSeeder::class);

        factory(Agency::class, 100)
            ->create()
            ->each(function ($agency) {
                $agency->caregivers()->createMany(
                    factory(Caregiver::class, rand(2 ,6))->raw()
                );
            });

        Caregiver::query()
            ->whereNotNull('license_expiration')
            ->inRandomOrder()
            ->limit(3)
            ->get()
            ->each(function ($caregiver) {
                $caregiver->license_expiration = today()->addDays(rand(3, 15));
                $caregiver->save();
            });
    }
}
