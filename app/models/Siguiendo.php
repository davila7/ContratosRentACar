<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Siguiendo extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;


	protected $table = 'siguiendo';

    public function usuarios()
    {
        return $this->hasMany('Usuario');
    }

    public function objetos()
    {
        return $this->hasMany('Objeto');
    }
}