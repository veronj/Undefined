<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Sector;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'x_position', 'y_position'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getNearSectors()
    {
        $x = $this->x_position;
        $y = $this->y_position;
       
        $nearSector[0] = Sector::where('x_position', '=', ($x - 1))->where('y_position', '=', ($y + 1))->first();
        $nearSector[1] = Sector::where('x_position', '=', ($x + 0))->where('y_position', '=', ($y + 1))->first();
        $nearSector[2] = Sector::where('x_position', '=', ($x + 1))->where('y_position', '=', ($y + 1))->first();
        $nearSector[3] = Sector::where('x_position', '=', ($x - 1))->where('y_position', '=', $y)->first();
        $nearSector[4] = Sector::where('x_position', '=', $x)->where('y_position', '=', $y)->first();
        $nearSector[5] = Sector::where('x_position', '=', ($x + 1))->where('y_position', '=', $y)->first();
        $nearSector[6] = Sector::where('x_position', '=', ($x - 1))->where('y_position', '=', ($y - 1))->first();
        $nearSector[7] = Sector::where('x_position', '=', $x)->where('y_position', '=', ($y - 1))->first();
        $nearSector[8] = Sector::where('x_position', '=', ($x + 1))->where('y_position', '=', ($y - 1))->first();

        $nearSectors = collect([$nearSector[0], $nearSector[1], $nearSector[2], $nearSector[3], $nearSector[4],
        $nearSector[5], $nearSector[6], $nearSector[7], $nearSector[8]]);
        
        return $nearSectors;
    }
}
