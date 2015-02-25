<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Examen extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public $table = 'examenes';
	
	public function examenusuarios(){
	return $this->has_many('Examenusuario');
	}
	
	public function examenpreguntas(){
	return $this->has_many('Examenpregunta');
	}

}
