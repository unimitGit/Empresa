<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
         $this->call(EmployeeSeeder::class);
         $this->call(DepartmentSeeder::class);
         $this->call(PhoneSeeder::class);
         $this->call(CarSeeder::class);
         $this->call(EmployeeCarSeeder::class);
         $this->call(TitleSeeder::class);
         $this->call(SalarieSeeder::class);
         $this->call(DeptManagerSeeder::class);
         $this->call(DeptEmpSeeder::class);
    }
}
