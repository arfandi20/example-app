<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'artikel';
    protected $guarded = ['id'];

    public function kategori (){
        return $this ->hasMany(kategori::class);
    }
}
