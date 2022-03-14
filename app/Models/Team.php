<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'day' => 'string',
        'hour' => 'string',
        'address' => 'string',
        'leader_id' => 'integer',
        'timothy_id' => 'integer',
        'hostess_id' => 'integer',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'macro_team_id' => 'integer'
    ];

    public function macro(){
        return $this->hasOne(Team::class, 'id','macro_team_id');
    }

    public function leader(){
        return $this->hasOne(Person::class,'id', 'leader_id');
    }

    public function timothy(){
        return $this->hasOne(Person::class,'id', 'timothy_id');
    }

    public function hostess(){
        return $this->hasOne(Person::class,'id', 'hostess_id');
    }

    public function events(){
        return $this->hasMany(Event::class, 'team_id','id');
    }

    public function people(){
        return [
            'guests' => $this->hasMany(Person::class, 'team_id','id')->orWhere('situation_id','=','1'),
            'regulars' => $this->hasMany(Person::class, 'team_id','id')->orWhere('situation_id','=','2'),
            'members' => $this->hasMany(Person::class, 'team_id','id')->orWhere('situation_id','=','3'),
        ];
    }

}
