<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'name', 'x_position', 'y_position', 'img',
    ];

    public function getNearSectors()
    {
        $x = $this->x_position;
        $y = $this->y_position;
        $nearSectors[0] = Star::where('x_position', '=', ($x - 1))->where('y_position', '=', ($y + 1))->first();
        $nearSectors[1] = Star::where('x_position', '=', ($x + 0))->where('y_position', '=', ($y + 1))->first();
        $nearSectors[2] = Star::where('x_position', '=', ($x + 1))->where('y_position', '=', ($y + 1))->first();
        $nearSectors[3] = Star::where('x_position', '=', ($x - 1))->where('y_position', '=', $y)->first();
        $nearSectors[4] = Star::where('x_position', '=', $x)->where('y_position', '=', $y)->first();
        $nearSectors[5] = Star::where('x_position', '=', ($x + 1))->where('y_position', '=', $y)->first();
        $nearSectors[6] = Star::where('x_position', '=', ($x - 1))->where('y_position', '=', ($y - 1))->first();
        $nearSectors[7] = Star::where('x_position', '=', $x)->where('y_position', '=', ($y - 1))->first();
        $nearSectors[8] = Star::where('x_position', '=', ($x + 1))->where('y_position', '=', ($y - 1))->first();
        return $nearSectors;
    }
}
