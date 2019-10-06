<?php

namespace Locomotif\Testimonials\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('testimonials')->insert([
            'name' => 'Testimonial uno testo',
            'text' => 'Testimonialo descripzione testis',
        ]);
    }
}
