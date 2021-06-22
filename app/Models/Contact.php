<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $table = 'Contact';
	protected $casts = [
		'phone'=>'array',
		'email'=>'array'
	];
    use HasFactory;
    protected $fillable = [
    	'name',
    	'phone',
    	'email'
    ];
}
