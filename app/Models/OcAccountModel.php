<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OcAccountModel extends Model
{
    use HasFactory;
    protected $table = 'oc_account';
    public $timestamps = false;

    protected $fillable = [
        'username', 'month', 'day', 'month_cnt', 'auto_revoke', 'is_paid', 'description', 'created_at', 'updated_at'
    ];

    protected $casts = [
        'auto_revoke' => 'boolean',
        'is_paid' => 'boolean',
    ];
}
