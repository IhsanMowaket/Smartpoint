<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubContractor extends Model
{
    use SoftDeletes, HasFactory;

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
        'Bank Name',
        'iban',
        'contracts_agreements',
        'certifications_qualifications',
        'work_history',
        'safety_certifications',
        'extra_emails',
        'notes',
        'worker_count',
        'outstanding',
        'user_id',
        'is_active',
        // Add any other fields you want to allow for mass assignment here.
    ];
}
