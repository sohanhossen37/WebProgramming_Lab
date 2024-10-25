<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    use HasFactory;

    protected $table = 'upazilas'; // Specify the table name if it's not pluralized
    protected $fillable = [
        'upazila',       // Assuming you have a name field
        'district_id', // Foreign key to District
    ];

    // Define the relationship with District
    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
