<?php

// database/seeders/customerseeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class customerseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()->count(10)->create();
    }
}

