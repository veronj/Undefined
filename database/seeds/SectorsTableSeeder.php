<?php

use Illuminate\Database\Seeder;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        DB::table('sectors')->delete();

        //1
        $sector = new App\Sector([
            'name' => 'Aloha',
            'x_position' => '1',
            'y_position' => '1',
            'img' => '4',
        ]);
        $sector->save();
        
        //2
        $sector = new App\Sector([
            'name' => 'Behol',
            'x_position' => '2',
            'y_position' => '1',
            'img' => '5',
            ]);
        $sector->save();
        
        //3
        $sector = new App\Sector([
            'name' => 'Cepak',
            'x_position' => '3',
            'y_position' => '1',
            'img' => '3',
            ]);
        $sector->save();

        //4
        $sector = new App\Sector([
            'name' => 'Defar',
            'x_position' => '4',
            'y_position' => '1',
            'img' => '5',
            ]);
        $sector->save();

        //5
        $sector = new App\Sector([
            'name' => 'Effap',
            'x_position' => '5',
            'y_position' => '1',
            'img' => '2',
            ]);
        $sector->save();

        //6
        $sector = new App\Sector([
            'name' => 'Fihor',
            'x_position' => '1',
            'y_position' => '2',
            'img' => '5',
            ]);
        $sector->save();

        //7
        $sector = new App\Sector([
            'name' => 'Aloha',
            'x_position' => '2',
            'y_position' => '2',
            'img' => '3',
            ]);
        $sector->save();

        //8
        $sector = new App\Sector([
            'name' => 'Aloha',
            'x_position' => '3',
            'y_position' => '2',
            'img' => '1',
            ]);
        $sector->save();

        //9
        $sector = new App\Sector([
            'name' => 'Aloha',
            'x_position' => '4',
            'y_position' => '2',
            'img' => '3',
            ]);
        $sector->save();

        //10
        $sector = new App\Sector([
            'name' => 'Greda',
            'x_position' => '5',
            'y_position' => '2',
            'img' => '1',
            ]);
        $sector->save();

        //11
        $sector = new App\Sector([
            'name' => 'Greda',
            'x_position' => '1',
            'y_position' => '3',
            'img' => '5',
            ]);
        $sector->save();
        //12
        $sector = new App\Sector([
            'name' => 'Greda',
            'x_position' => '2',
            'y_position' => '3',
            'img' => '4',
            ]);
        $sector->save();

        //13
        $sector = new App\Sector([
            'name' => 'Greda',
            'x_position' => '3',
            'y_position' => '3',
            'img' => '3',
            ]);
        $sector->save();

        //14
        $sector = new App\Sector([
            'name' => 'Greda',
            'x_position' => '4',
            'y_position' => '3',
            'img' => '2',
            ]);
        $sector->save();

        //15
        $sector = new App\Sector([
            'name' => 'Greda',
            'x_position' => '5',
            'y_position' => '3',
            'img' => '1',
            ]);
        $sector->save();

        //16
        $sector = new App\Sector([
            'name' => 'Greda',
            'x_position' => '1',
            'y_position' => '4',
            'img' => '3',
            ]);
        $sector->save();

        //17
        $sector = new App\Sector([
            'name' => 'Greda',
            'x_position' => '2',
            'y_position' => '4',
            'img' => '6',
            ]);
        $sector->save();

        //18
        $sector = new App\Sector([
            'name' => 'Lugur',
            'x_position' => '3',
            'y_position' => '4',
            'img' => '1',
            ]);
        $sector->save();

        //19
        $sector = new App\Sector([
            'name' => 'Lijar',
            'x_position' => '4',
            'y_position' => '4',
            'img' => '6',
            ]);
        $sector->save();

        //20
        $sector = new App\Sector([
            'name' => 'Drilo',
            'x_position' => '5',
            'y_position' => '4',
            'img' => '5',
            ]);
        $sector->save();

        //21
        $sector = new App\Sector([
            'name' => 'Mapod',
            'x_position' => '1',
            'y_position' => '5',
            'img' => '1',
            ]);
        $sector->save();

        //22
        $sector = new App\Sector([
            'name' => 'Sibur',
            'x_position' => '2',
            'y_position' => '5',
            'img' => '5',
            ]);
        $sector->save();

        //23
        $sector = new App\Sector([
            'name' => 'Jakor',
            'x_position' => '3',
            'y_position' => '5',
            'img' => '4',
            ]);
        $sector->save();

        //24
        $sector = new App\Sector([
            'name' => 'Kidos',
            'x_position' => '4',
            'y_position' => '5',
            'img' => '1',
            ]);
        $sector->save();

        //25
        $sector = new App\Sector([
            'name' => 'Vimur',
            'x_position' => '5',
            'y_position' => '5',
            'img' => '3',
            ]);
        $sector->save();

        //26
        $sector = new App\Sector([
            'name' => 'Gohep',
            'x_position' => '1',
            'y_position' => '6',
            'img' => '2',
            ]);
        $sector->save();

        //27
        $sector = new App\Sector([
            'name' => 'Vimur',
            'x_position' => '2',
            'y_position' => '6',
            'img' => '5',
            ]);
        $sector->save();

        //28
        $sector = new App\Sector([
            'name' => 'Klida',
            'x_position' => '3',
            'y_position' => '6',
            'img' => '1',
            ]);
        $sector->save();

        //29
        $sector = new App\Sector([
            'name' => 'Vimur',
            'x_position' => '4',
            'y_position' => '6',
            'img' => '3',
            ]);
        $sector->save();

        //30
        $sector = new App\Sector([
            'name' => 'Vimur',
            'x_position' => '5',
            'y_position' => '6',
            'img' => '1',
            ]);
        $sector->save();
        
        //31
        $sector = new App\Sector([
            'name' => 'Argop',
            'x_position' => '1',
            'y_position' => '7',
            'img' => '4',
            ]);
        $sector->save();

        //32
        $sector = new App\Sector([
            'name' => 'Argop',
            'x_position' => '2',
            'y_position' => '7',
            'img' => '1',
            ]);
        $sector->save();

        //33
        $sector = new App\Sector([
            'name' => 'Argop',
            'x_position' => '3',
            'y_position' => '7',
            'img' => '2',
            ]);
        $sector->save();

        //34
        $sector = new App\Sector([
            'name' => 'Argop',
            'x_position' => '4',
            'y_position' => '7',
            'img' => '1',
            ]);
        $sector->save();

        //35
        $sector = new App\Sector([
            'name' => 'Argop',
            'x_position' => '5',
            'y_position' => '7',
            'img' => '6',
            ]);
        $sector->save();

    }
}