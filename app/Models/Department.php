<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    use Notifiable;

    protected $table = 'departments';
    protected $fillable = ['name'];

}
