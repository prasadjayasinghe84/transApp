<?php
declare(strict_types=1);

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranserRequestReason extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reason(): BelongsTo
    {
        return $this->belongsTo(Reason::class,'reasons_id');
    }

}
