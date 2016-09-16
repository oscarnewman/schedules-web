<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'start', 'end'
    ];

    public function schedule() {
        return $this->belongsTo(App\Schedule::class);
    }
}
