<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}
