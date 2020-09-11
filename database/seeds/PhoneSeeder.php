<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Phone;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $results = null;
    private $randomEmployee = null;
    private $id = null;

    function __construct() {
        $this->results = Employee::all();
    }

    public function run()
    {
        $this->randomEmployee = $this->results->random(10);

        foreach ($this->randomEmployee as $employee) {
            factory(Phone::class)->create([
                'employee_id' => $employee->id
            ]);
        }
    }
    
}
