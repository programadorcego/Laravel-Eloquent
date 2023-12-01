<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "usuarios";
    public $timestamps = false;
    protected $fillable = ['name', 'email'];

    public function phone()
{
    return $this->hasOne(Phone::class, "usuario_id");
}
}
