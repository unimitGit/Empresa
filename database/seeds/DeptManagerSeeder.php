<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Department;
use App\DeptManager;

class DeptManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    function __construct() {
        $this->resultsE = Employee::all();
        $this->resultsD = Department::all();
    }
    public function run()
    {
        $this->resultsE = $this->resultsE->random(10);
        $this->resultsD = $this->resultsD->random(10);

        for($i=0; $i < 5; $i++) {
            factory(DeptManager::class)->create([
                'employee_id' => $this->resultsE[$i]->id,
                'department_id' => $this->resultsD[$i]->id,
            ]);
        }      
    }
}