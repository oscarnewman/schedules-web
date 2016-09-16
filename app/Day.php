<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'schedule_id'
    ];

    public function schedule() {
        return $this->hasOne(App\Schedule::class);
    }
}
