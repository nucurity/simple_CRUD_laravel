<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class week extends Model
{
    protected $table = 'weeks';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name','description'];
}
