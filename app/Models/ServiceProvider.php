<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    // Specify the table if it's different from the default plural of the model name
    protected $table = 'service_providers';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'user_id',             // Foreign key to the users table
        'upazila_id',          // Foreign key to the upazilas table
        'service',             // Service type (Plumbing, Electrician, etc.)
        'nid',                 // National ID number (NID)
        'experience_years',    // Experience in years
        'biography',           // Short biography
        'profile_picture',     // URL or path to the profile picture
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Define the relationship with the Upazila model
    public function upazila()
    {
        return $this->belongsTo(Upazila::class, 'upazila_id');
    }

    // Accessor for experience years
    public function getExperienceYearsAttribute()
    {
        return $this->attributes['experience_years'] . ' years'; // Append "years" for readability
    }

    // Mutator for the profile picture path to ensure consistent storage
    public function setProfilePictureAttribute($value)
    {
        if ($value) {
            $this->attributes['profile_picture'] = '/uploads/profile_pictures/' . $value;
        }
    }

    // Accessor for profile picture to return the correct path when retrieving it
    public function getProfilePictureAttribute($value)
    {
        return asset($value ? 'storage/' . $value : 'images/default_profile.png');
    }
}
