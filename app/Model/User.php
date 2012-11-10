<?php
App::uses('AppModel', 'Model');

class User extends AppModel {

	public $hasAndBelongsToMany = array(
		'games' => array()
	);
    
    public $hasMany = array(
        'scores' => array()
    );

}
