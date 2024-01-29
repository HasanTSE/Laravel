<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'hr_departments';
    protected $gaurded = [];
    use HasFactory;

    public function marketing_status(){
    return $this->belongsTo(MarketingStatus::class, 'company_id');
    }
}
