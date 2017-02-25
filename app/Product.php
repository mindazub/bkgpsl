<?php

namespace App;
// use App\Category;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'short_descr', 'description', 'price', 'quantity',
    ];

    public function category() {
    	return $this->belongsTo(App\Category::class);
    }
}
