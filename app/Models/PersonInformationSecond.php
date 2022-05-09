<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonInformationSecond extends Model
{
    use HasFactory;
    public $connection = 'mysql2';
    protected $fillable = ['person_code','name_mm','birth_date','gender','nrc','father_name_mm','email','queue_token','appointed_date','created_date','status','stationid','from_time','is_booking','no_of_booking','server_time','remark'];
    public $timestamps = false;
}
