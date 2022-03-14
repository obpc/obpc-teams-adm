<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'ddd' => 'string',
        'phone' => 'string',
        'user_id' => 'integer',
        'situation_id' => 'integer',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'team_id' => 'integer',
        'advisor_id' => 'integer',
        'couple_id' => 'integer'
    ];

    public function couple(){
        return $this->hasOne(Person::class, 'id','couple_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function situation(){
        return $this->hasOne(Situation::class, 'id','situation_id');
    }

    public function memberOf(){
        return $this->hasOne(Team::class, 'team_id','team_id');
    }

    public function leaderOf(){
        return $this->hasMany(Team::class, 'leader_id','id');
    }

    public function hosterOf(){
        return $this->hasMany(Team::class, 'hostess_id','id');
    }

    public function timothyOf(){
        return $this->hasMany(Team::class, 'timothy_id','id');
    }

    public function advisor(){
        return $this->hasOne(Person::class, 'id','advisor_id');
    }
}
