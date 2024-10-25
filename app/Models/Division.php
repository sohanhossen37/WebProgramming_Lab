<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table = 'divisions'; // Specify the table name if it's not pluralized
    protected $fillable = [
        'name', // Assuming you have a name field
    ];

    // Define the relationship with District
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
