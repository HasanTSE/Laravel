<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingScope extends Model
{
    protected $table = 'marketing_scopes';
    protected $guarded = [];
    use HasFactory;

    public function marketing_status(){
    return $this->belongsTo(MarketingStatus::class, 'company_id');
    }
    public function departments(){
    return $this->belongsTo(Department::class, 'dept_id');
    }
}
