<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Pour filtrer les champs autorisés afin d'eviter les injections sql 
// vous pouvez aussi utiliser $guarded[] pour autoriser tous les champs c'est-a-dire des request all
// Plus d'info sur la documentation de laravel

class event extends Model
{
   protected $fillable=['title','description','start','hours','price','location','city'];
   protected $dates=['start'];



}