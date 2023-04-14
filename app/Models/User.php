<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    protected static function boot() {
        parent::boot();

        static::deleting(function($product) {

            $product->getEmployee()->each(function($data){
                $data->delete();
                $data->getCategory()->delete();
            });
         });

    }

    public function getEmployee() {
        return $this->hasMany(Employee::class,"user_id","id");
    }


    public function getName() {                                   // this apply in condition but this code is clean code ------ this without if statement use condition apply this best way in condition check
        return [
            "Lester Casper"=>"alert-danger",                        // this first way
            "Mrs. Lulu Jacobson V"=>"alert-warning",
            "Santa Feest"=>"alert-primary",
        ][$this->name] ?? 'alert-success';

        // switch ($this->name)                                       // this second way
        //     {
        //         case 'Lester Casper':
        //         return 'alert-danger';

        //         case 'Mrs. Lulu Jacobson V':
        //         return 'alert-warning';

        //         case 'Santa Feest':
        //         return 'alert-success';
        //     }


        // if($this->name=="Lester Casper") {                            // this third way
        //     return 'alert-danger';
        // } else if($this->name=="Mrs. Lulu Jacobson V") {
        //     return 'alert-success';

        // }
    }
}
