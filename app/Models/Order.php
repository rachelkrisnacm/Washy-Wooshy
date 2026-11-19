<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id', 'service_id', 'weight', 'total', 'status', 'is_paid'];

    protected $casts = ['is_paid' => 'boolean'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function getCodeAttribute(): string
    {
        return '#'.str_pad($this->id, 4, '0', STR_PAD_LEFT);
    }

    public function getStatusLabelAttribute(): string
    {
        return [
            'pending'  => 'Pending',
            'progress' => 'On Progress',
            'finished' => 'Finished',
        ][$this->status] ?? $this->status;
    }
}