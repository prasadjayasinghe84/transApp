<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeWorkDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'employe_detail_id',

        'salary_code_id',
        'edit_salary_code_id',

        'designation_id',
        'edit_designation_id',

        'class',
        'edit_class',

        'appoiment_number',
        'edit_appoiment_number',

        'appoiment_date',
        'edit_appoiment_date',

        'director_section_id',
        'edit_director_section_id', 'sub_unit_section_id',
        'edit_sub_unit_section_id',

        'sub_section_id',
        'edit_sub_section_id',

        'land_phone',
        'edit_land_phone',

        'fax',
        'edit_fax',

        'email',
        'edit_email',


        'appoiment_date_agri_department',
        'edit_appoiment_date_agri_department',

        'date_appoint_current_work',
        'edit_date_appoint_current_work',

        'period_appoint_current_work_year',
        'edit_period_appoint_current_work_year',

        'period_appoint_current_work_month',
        'edit_period_appoint_current_work_month',
    ];
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
    public function salaryCode(): BelongsTo
    {
        return $this->belongsTo(SalaryCode::class);
    }
    public function designation(): BelongsTo
    {
        return $this->belongsTo(Designation::class);
    }
}
