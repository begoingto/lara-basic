<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCrud extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];

    protected $fillable = ['fname', 'lname', 'gender', 'email', 'dob', 'marital_status', 'phone', 'bio'];
}
