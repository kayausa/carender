<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class profile extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'chosecategory_id',
        'account_id',
        'team_id',
        
    ];

      public function account()
    {
        return $this->hasone(account::class);
       // return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }
     public function team()
    {
        return $this->hasmany(team::class);
       // return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }
     public function chosecategory()
    {
        return $this->hasmany(chosecategory::class);
       // return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }
    public function makeschedules()
    {
        return $this->belongsTo(makeschedules::class);
       // return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
   
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
   
}
