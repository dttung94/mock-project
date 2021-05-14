<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use Notifiable;

    protected $table = 'categories';
    protected $fillable = ['name'];


//    public function request(){
//        return $this->hasMany('App\Models\Request');
//    }
}
