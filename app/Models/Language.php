<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Language extends Model
{
    use HasFactory,Notifiable;
    protected $table = "languages";
    protected $fillable = ["abbr",'name','direction','active','default','created_at',"updated_at"];

    public function scopeActive($query){ # ONLY GET ALL LANGUAGES IS ACTIVE
        return $query->where("active",1);
    }

    public function scopeAllLangS($q){
        return $q -> select('id',"abbr",'name','direction','active','default');
    }

    public function getActive(){
       return  1 ? '<span class="badge font-weight-bold badge-primary">مفعل</span>'
           : '<span class="badge font-weight-bold badge-danger">غير مفعل</span>';
    }

}
