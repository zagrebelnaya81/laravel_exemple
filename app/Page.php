<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /*
     * Table name
     */
    protected $table = 'page';

    /*
     * Fillable fields for protecting mass assignment vulnerability
     */
    protected $fillable = [
        'name',
        'user_id',
        'pageText',
        'updated_at'
    ];

    /*
     * Eloquent attribute casting
     */
    protected $casts = [
        'active' => 'boolean',
    ];
}
