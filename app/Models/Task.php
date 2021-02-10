<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'status',
       
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

       //kjo kontrollon nese id e userit te kyqur osht enjejt me id e userit qe e ka bo qt postim
    public function ownedBy(User $user){
        return $user->id === $this->user_id;
    }

    public function status(){
        if( $this->status == 1)
           { return "Completed"; }
         else {
          return "Not completed";  }   
    }

}
