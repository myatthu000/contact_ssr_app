<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
      'name','email','birthday','company','description','user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFromBirthday($query)
    {
        //2022-11-20
        return $query->whereRaw('birthday like "%-' . now()->format('m') . '-%"');

    }
//    protected $dates = [
//        'birthday'
//    ];

//    public function setBirthdayAttribute($value)
//    {
//        $this->attributes['birthday'] = Carbon::createFromFormat('d/m/Y',$value)->format('Y-m-d');
//    }
//
//    public function getBirthdayAttribute()
//    {
//        return Carbon::createFromFormat('Y-m-d',$this->attributes['birthday'])->format('d/m/Y');
//    }


}
