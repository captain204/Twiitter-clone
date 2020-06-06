<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Tweet;

use App\Followable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'username','name', 'email', 'password',
    ];*/

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
       //return asset($value);
       return asset('storage/'.$value ?:"/images/blank-profile-picture-973460_1280.png"); 

    }




    public function setPasswordAttribbute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }


    public function timeline()
    {
        //return Tweet::where('user_id',$this->id)->latest()->get();
        // include all of the users tweets
        // As well as the tweets of everyone
        // They follow in descending order by date 
        $friends = $this->follows()->pluck('id');
        #$ids->push($this->id);
        return Tweet::whereIn('user_id',$friends)
            ->orWhere('user_id', $this->id)
            ->latest()
            ->paginate(50);
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }


    public function getRouteKeyName()
    {
        return 'name';
    }

    public function path($append ="")
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}": $path;

    }    



}
