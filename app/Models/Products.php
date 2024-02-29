<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Products extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'name', 'category_id', 'price', 'image', 'slug' 
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id'); //category_id
    }
}