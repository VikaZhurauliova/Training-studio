<?php

namespace Database\Seeders;

use App\Models\ClassReview;
use Database\Factories\ClassReviewFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassReview::factory()
            ->count(10)
            ->create();
    }
}
