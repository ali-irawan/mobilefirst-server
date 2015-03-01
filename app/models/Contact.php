<?php

class Contact extends Eloquent {
	
     public $table = 'contacts';
     public $fillable = ['id', 'name', 'email', 'phone'];

}