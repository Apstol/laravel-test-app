<?php

namespace Database\Seeders;

use App\Models\Model;
use App\Models\Pc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::factory()
            ->count(5)
            ->has(Pc::factory()->count(2))
            ->create();

        Model::factory()
            ->count(1)
            ->create();
    }
}
