<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $table = "articles";

    //protected $primarykey = "id";

    //public $timestamps = "true";

    protected $fillable = ['title','content','featured_image'];

}
