<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'locations';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'location_id';

    // Fillable fields for mass assignment
    protected $fillable = ['location_name'];
}
