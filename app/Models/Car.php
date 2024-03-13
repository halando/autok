<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    protected $fillable=[
        "drink",
        "amount",
        "type_id",
        "color_id"
    ];

    public function color():BelongsTo{
        return $this->belongsTo(Color::class);
    }

    public function type():BelongsTo{
        return $this->belongsTo(Type::class);
    }

    
}
