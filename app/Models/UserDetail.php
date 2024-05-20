<?php

// app/Models/UserDetail.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    // Specify the primary key
    protected $primaryKey = 'userdetailId';

    // Specify the table name if it does not follow Laravel's naming convention
    protected $table = 'user_detail';

    // Define the fillable fields
    protected $fillable = [
        'userId',
        'username',
        'profil_pic',
        'bio',
        'gender',
        'birthday',
        'country',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }
}
