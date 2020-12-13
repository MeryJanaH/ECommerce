<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Section;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionsRecords=[
            ['id'=>1,'nom'=>'prodD','statut'=>1],
            ['id'=>2,'nom'=>'prodFa','statut'=>1],
            ['id'=>3,'nom'=>'prodFo','statut'=>1],
            ['id'=>4,'nom'=>'prodk','statut'=>1],
            ['id'=>5,'nom'=>'prodO','statut'=>1],
            ['id'=>6,'nom'=>'prodT','statut'=>1],
           
           

        ];
        Section::insert(sectionsRecords);
    }
}
