<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $customer_list = config('customer');

        foreach ($customer_list as $item) {


            $newCustomer = new Customer();
            $newCustomer->firstname = $item['firstname'];
            $newCustomer->surname = $item['surname'];
            $newCustomer->age = $item['age'];
            $newCustomer->nationality = $item['nationality'];
            $newCustomer->premium = $item['premium'];
            $newCustomer->save();
        }
    }
}