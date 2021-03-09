<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MainCategory extends Model
{
    use HasFactory,Notifiable;
    protected $table = "main_categories";
    protected $fillable = ["translation_lang",'translation_of','name','slug','photo','active','created_at',"updated_at"];

    public function scopeActive($query){ # ONLY GET ALL LANGUAGES IS ACTIVE
        return $query->where("active",1);
    }

    public function scopeMainSelect($query){
        return $query->select("id","translation_lang","translation_of","photo","name","slug","active");
    }

    public function getPhotoAttribute($val){
        return ($val !==null )? asset($val) :"";
    }

    public function getActive(){
        return  1 ? '<span class="badge font-weight-bold badge-primary">مفعل</span>'
            : '<span class="badge font-weight-bold badge-danger">غير مفعل</span>';
    }

    public function CategoryTransLang(){
        return $this->hasMany(self::class,"translation_of");
    }

}
