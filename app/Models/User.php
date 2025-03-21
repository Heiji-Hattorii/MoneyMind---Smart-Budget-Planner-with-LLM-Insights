<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'salaire',
        'date_credit',
        'last_activity',
        'budget'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'date_credit' => 'date',
            'last_activity' => 'datetime',


        ];
    }
    public function categories()
    {
        return $this->hasMany(Categorie::class);
    }
    public function updateLastActivity()
    {
        $this->update(['last_activity' => now()]);
    }
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Souhait::class);
    }
    public function goals()
    {
        return $this->hasMany(Goal::class);
    }
}
