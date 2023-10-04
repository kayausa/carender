<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class schedele extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'icon_id',
        'profole_id',
        'start',
        'end',
        'body',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
      public function icons()
    {
        return $this->hasmany(icons::class);
       // return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }
   public function profile()
    {
        return $this->belongsTo(profile::class);
       // return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }
     public function makeschedules()
    {
        return $this->belongsTo(makeschedules::class);
       // return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    
}
