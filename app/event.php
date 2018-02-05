<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;
// Pour filtrer les champs autorisés afin d'eviter les injections sql 
// vous pouvez aussi utiliser $guarded[] pour autoriser tous les champs c'est-a-dire des request all
// Plus d'info sur la documentation de laravel

class event extends Model
{
	use Sluggable;

   protected $fillable=['title','slug','description','start','hours','price','location','city'];
   protected $dates=['start'];

   public function getRouteKeyName(){
   	return 'slug';
   }

	public function sluggable()
	{
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}