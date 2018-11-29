<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sector;

class Sector extends Model
{
    protected $fillable = [
        'name', 'x_position', 'y_position', 'img',
    ];

    public function getNearSectors()
    {
        $x = $this->x_position;
        $y = $this->y_position;
        $nearSectors[0] = Sector::where('x_position', '=', ($x - 1))->where('y_position', '=', ($y + 1))->first();
        $nearSectors[1] = Sector::where('x_position', '=', ($x + 0))->where('y_position', '=', ($y + 1))->first();
        $nearSectors[2] = Sector::where('x_position', '=', ($x + 1))->where('y_position', '=', ($y + 1))->first();
        $nearSectors[3] = Sector::where('x_position', '=', ($x - 1))->where('y_position', '=', $y)->first();
        $nearSectors[4] = Sector::where('x_position', '=', $x)->where('y_position', '=', $y)->first();
        $nearSectors[5] = Sector::where('x_position', '=', ($x + 1))->where('y_position', '=', $y)->first();
        $nearSectors[6] = Sector::where('x_position', '=', ($x - 1))->where('y_position', '=', ($y - 1))->first();
        $nearSectors[7] = Sector::where('x_position', '=', $x)->where('y_position', '=', ($y - 1))->first();
        $nearSectors[8] = Sector::where('x_position', '=', ($x + 1))->where('y_position', '=', ($y - 1))->first();
        return $nearSectors;
    }
}
