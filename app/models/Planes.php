<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Planes extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public $table = 'planes';
	
	public function usuario(){
	return $this->belong_to('Usuario');
	}

}