<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class makeschedule extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'body',
        'schedule_id',
        'profile_id',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
   
     public function profiles()
    {
        return $this->hasmany(profiles::class);
       // return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }
     public function shcedules()
    {
        return $this->hasmany(schedules::class);
       // return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    
}
