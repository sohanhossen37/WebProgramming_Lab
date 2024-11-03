<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'service_categories'; // Table name
    protected $primaryKey = 'category_id'; // Primary key

    protected $fillable = ['category_name', 'image']; // Added 'image' to fillable

    // Define the relationship with the Service model
    public function services()
    {
        return $this->hasMany(Service::class, 'category_id', 'category_id');
    }
}
