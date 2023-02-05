<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUserFullName(){
        return $this->first_name . ' ' . $this->last_name;
    }

    public function calculation_history(){
        return $this->hasMany(CalculationHistory::class);
    }

    public function storeImage($image){
        $filename = time() . '-' . $image->getClientOriginalName();
        $image = $image->storeAs('user_images', $filename, 'public');
        return $image;
    }
    public function deleteExistingImage(){
        Storage::delete('public/' . $this->image);
    }
}
