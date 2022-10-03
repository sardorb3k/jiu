<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;
    // Table Name
    protected $table = 'system';
    protected $fillable = [
        'site_name',
        'site_logo',
        'site_logo_footer',
        'site_email',
        'site_phone',
        'site_address',
        'site_description',
        'site_facebook',
        'site_instagram',
        'site_youtube',
        'site_telegram',
    ];

}
