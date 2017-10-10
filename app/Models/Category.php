<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'titulo'
    ];

    public function posts() {
        return $this->hasMany('App\Models\Newspaper', 'category_id')->where('status', 1);
    }

}