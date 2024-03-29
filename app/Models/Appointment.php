<?php

namespace App\Models;

use App\Enums\AppointmentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Appointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        'cancellation_time',
        'cancellation_reason',
        'phone',        
        'service_id',
        'status',
        'dog_name',
        'dog_type',
        'price'
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
    
    protected $casts = [
        'status' => AppointmentStatus::class,
    ];
}