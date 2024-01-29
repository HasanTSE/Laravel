<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingStatus extends Model
{
    protected $table = 'marketing_statuses';
    protected $guarded = [];
    use HasFactory;
}
