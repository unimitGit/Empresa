<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Car;
use App\EmployeeCar;

class EmployeeCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    function __construct() {
        $this->resultsE = Employee::all();
        $this->resultsC = Car::all();
    }
    
    public function run()
    {
        $this->resultsE = $this->resultsE->random(10);
        $this->resultsC = $this->resultsC->random(10);

        for($i=0; $i < 5; $i++){
            factory(EmployeeCar::class)->create([
                'employee_id' => $this->resultsE[$i]->id,
                'car_id' => $this->resultsE[$i]->id,
            ]);
        }       
    }
}
