<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class histemployee extends Model
{
    protected $table = 'marcaje';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    use HasFactory;
    
    use HasFactory;
    protected $fillable = [
        'id_user',
        'result'
    ];

    public function user()
    {
        return $this->belongsToMany(user::class, 'users', 'id_user','id');
    }
}