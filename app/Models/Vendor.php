<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vendor extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = ["name","logo","mobile","address","email","active","created_at","updated_at"];

    protected $hidden = ["Category_id"];
}
