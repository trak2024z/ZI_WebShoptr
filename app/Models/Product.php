<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Filterable;
    protected $table = 'products';
    protected $guarded = false;
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function getImageUrlAttribute(){
        return url('storage/' . $this->preview_image);
    }
}
