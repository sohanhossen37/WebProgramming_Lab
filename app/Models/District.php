<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts'; // Specify the table name if it's not pluralized
    protected $fillable = [
        'district',      // Assuming you have a name field
        'division_id', // Foreign key to Division
    ];

    // Define the relationship with Upazila
    public function upazilas()
    {
        return $this->hasMany(Upazila::class);
    }

    // Define the relationship with Division
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
