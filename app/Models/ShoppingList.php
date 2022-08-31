<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class ShoppingList extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = "list_id";

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
