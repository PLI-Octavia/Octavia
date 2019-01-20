<?php

use Illuminate\Database\Seeder;

class TopicsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics = array('Maths', 'Anglais', 'Français');

        foreach ($topics as $topic)
        {
            $topic_model = new \App\Model\Topics();
            $topic_model->topic =  $topic;
            $topic_model->save();
        }
    }
}
