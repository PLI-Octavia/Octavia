<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = array('Cp', 'CE1', 'CE2', 'CM1', 'CM2');

        foreach ($classes as $class)
        {
            $topic_model = new \App\Model\SchoolClass();
            $topic_model->class_name =  $class;
            $topic_model->save();
        }
    }
}
