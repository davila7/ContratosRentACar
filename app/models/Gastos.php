<?php
class Gastos extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'gastos';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public $timestamps = false;

	public function usuario(){
        return $this->belongsTo('Usuario', 'id_usuario');
    }
}