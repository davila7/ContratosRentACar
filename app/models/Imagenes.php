<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Imagenes extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;


	protected $table = 'imagenes';

    public function usuario()
    {
        return $this->belongsTo('Usuario');
    }

    public function objeto()
    {
        return $this->belongsTo('Objeto');
    }
}