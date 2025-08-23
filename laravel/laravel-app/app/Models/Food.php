<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    // Class name and table name may be different !
    protected $table = 'foods';
    protected $primaryKey = 'id';

    // If you don't want to use created_at/ updated_at?
    public $timestamps = false;
    protected $fillable=['name','count','description','category_id','image_path'];

    // A food belongs to a category
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
