<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // public function setTable($table)
    // {
    //     $this->table = $table;
    //     return $this;
    // }
    //protected $table = 'test.articles';
    protected $fillable = ['title','body'];
}
