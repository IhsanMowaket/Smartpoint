<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes, HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $fillable = [
        'company',
        'contact_firstname',
        'contact_lastname',
        'position',
        'web_site',
        'Address_zusatz',
        'street',
        'zip_code',
        'city',
        'tax_id',
        'extra_emails',
        'notes',
        'outstanding',
        'user_id',
        'is_active', // If 'is_active' is a field in your model.
    ];
    protected $casts = [
        'outstanding' => 'decimal:2', // Cast 'outstanding' to a decimal with 2 decimal places.
        'is_active' => 'boolean',     // Cast 'is_active' to a boolean.
        // Add more casts as needed for other fields.
    ];

}
