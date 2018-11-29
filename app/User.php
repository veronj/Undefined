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
