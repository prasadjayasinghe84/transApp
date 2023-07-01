<?php
declare(strict_types=1);

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
    public function dSDivision(): BelongsTo
    {
        return $this->belongsTo(DSDivision::class,'dsd_id');
    }
}
