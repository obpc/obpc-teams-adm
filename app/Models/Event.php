<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'fl_happened' => 'boolean',
        'feedback_happened' => 'string',
        'created_at' => 'date',
        'updated_at' => 'date',
        'event_day' => 'date',
        'event_hour' => 'timestamp',
        'nr_members' => 'integer',
        'nr_regulars' => 'integer',
        'nr_guests' => 'integer',
        'guests_names' => 'string',
        'origin' => 'string',
        'feedback_worship' => 'string',
        'feedback_lesson' => 'string',
        'feedback_strategy' => 'string',
        'feedback_help' => 'string',
    ];

    public function team(){
        return $this->hasOne(Team::class, 'id','team_id');
    }
}
