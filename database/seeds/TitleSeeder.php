<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use App\Title;
use App\Employee;

class TitleSeeder extends Seeder
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
            factory(Title::class)->create([
                'employee_id' => $employee->id
            ]);
        }
    }    
}