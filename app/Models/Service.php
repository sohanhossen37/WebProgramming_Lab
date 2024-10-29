<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category; // Add this line


class Service extends Model
{
    use HasFactory;
   

    protected $table = 'services';

    protected $fillable = ['service_name', 'description', 'category_id','image_path'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
