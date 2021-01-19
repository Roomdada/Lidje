<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;




		    public static function getAll()
		    {
		    	return Plat::all();
		    }



		    public static function getOne(int $id)
		    {
		      return Plat::fisrtWhere('id',$id);
		    }
}
