<?php
declare(strict_types=1);

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeServiceRecords extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function directorSection(): BelongsTo
    {
        return $this->belongsTo(DirectorSection::class);
    }
    public function subUnitSection(): BelongsTo
    {
        return $this->belongsTo(SubUnitSection::class);
    }
    public function subSection(): BelongsTo
    {
        return $this->belongsTo(SubSection::class);
    }
    
}
