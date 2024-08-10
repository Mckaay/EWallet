<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IncomeCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function income(): BelongsTo
    {
        return $this->belongsTo(Income::class);
    }
}
