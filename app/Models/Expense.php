<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'expense_date',
        'comment',
    ];

    public function user(): BelongsTo
    {
        $this->belongsTo(User::class);
    }

    public function category(): hasOne
    {
        return $this->hasOne(ExpenseCategory::class);
    }
}
