<?php
declare(strict_types=1);

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeAttachment extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function directorSectionf(): BelongsTo
    {
        return $this->belongsTo(DirectorSection::class,'f_director_section_id');
    }
    public function subUnitSectionf(): BelongsTo
    {
        return $this->belongsTo(SubUnitSection::class,'f_sub_unit_section_id');
    }
    public function subSectionf(): BelongsTo
    {
        return $this->belongsTo(SubSection::class,'f_sub_section_id');
    }
    public function directorSectiona(): BelongsTo
    {
        return $this->belongsTo(DirectorSection::class,'a_director_section_id');
    }
    public function subUnitSectiona(): BelongsTo
    {
        return $this->belongsTo(SubUnitSection::class,'a_sub_unit_section_id');
    }
    public function subSectiona(): BelongsTo
    {
        return $this->belongsTo(SubSection::class,'a_sub_section_id');
    }
   
}
