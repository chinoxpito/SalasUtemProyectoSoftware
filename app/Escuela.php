<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model {

	protected $table = 'escuelas';
	protected $fillable = ['nombre','descripcion','departamento_id'];
	protected $guarded = ['id'];

}
