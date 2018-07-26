<?php
class Name{
	public $fillable = ['name','age','status'];
	public function available(){
		return print_r($this->fillable);
	}
}
