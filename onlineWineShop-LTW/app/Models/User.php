<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Order;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'balance',
    ];

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

    // relationship
    public function orders()
    {
        return $this->hasMany(Order::class, "id", "user_id");
    }
    public function getOrders()
    {
        return $this->orders;
    }
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }
    // review
    public function reviews()
    {
        return $this->hasMany(Review::class, "id", "user_id");
    }
    public function getReviews()
    {
        return $this->items;
    }
    public function setReviews($items)
    {
        $this->items = $items;
    }

    // get set
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function getEmail()
    {
        return $this->attributes['email'];
    }
    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }
    public function setPassword($password)
    {
        $this->attributes['password'] = $password;
    }
    public function getRole()
    {
        return $this->attributes['role']; // or however you store the role in your database
    }
    public function setRole($role)
    {
        $this->attributes['role'] = $role;
    }
    public function getBalance()
    {
        return $this->attributes['balance'];
    }
    public function setBalance($balance)
    {
        $this->attributes['balance'] = $balance;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}