<?php

namespace App\Models;
use App\Models\Contact;
use App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['info_contact', 'info_map', 'info_logo', 'info_fanpage'];
    protected $primaryKey = 'info_id';
    protected $table = 'tbl_information';
}
