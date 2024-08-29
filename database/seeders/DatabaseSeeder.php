<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker=Faker::create();
        $teacherID = 1;
        foreach(range(1,50) as $list){
            // $class = array("first","second","third","four","five","six","seven","eight","nine","tenth","eleven","twelve");
            // $fees = array(1000,5000,10000,20000,30000,40000,50000);
            // $class_keys=array_rand($class,3);
            // $fees_keys=array_rand($fees,3);
            // DB::table('students')->insert([
            //    'student_name'=>$faker->name,
            //    'class_teacher_id'=>$teacherID,
            //    'class'=>$class[$class_keys[0]],
            //    'admission_date'=>date('Y-m-d'),
            //    'yearly_fees'=>$fees[$fees_keys[0]],
            //    'created_at'=>date('Y-m-d'),
            //    'updated_at'=> date('Y-m-d')
            // ]);
            // $teacherID++;

            DB::table('teachers')->insert([
                'teacher_name'=>$faker->name
             ]);
             
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
