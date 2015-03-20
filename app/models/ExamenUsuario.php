<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class ExamenUsuario extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public $table = 'examenusuarios';
	
	public function examen(){
	return $this->has_many('Examen');
	}
	
	public function usuario(){
	return $this->has_many('Usuario');
	}

}
