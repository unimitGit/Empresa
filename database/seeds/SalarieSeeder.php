<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Salarie;

class SalarieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    function __construct() {
        $this->results = Employee::all();
    }

    public function run()
    {
        for($i=0; $i < 10; $i++){
            $this->randomEmployee = $this->results->random(1);
            $this->id = $this->randomEmployee->pluck('id')[0];

            factory(Salarie::class)->create([
                'employee_id' => $this->id
            ]);
        }       
    }
}
