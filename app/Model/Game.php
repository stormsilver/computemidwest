<?php
App::uses('AppModel', 'Model');
class Game extends AppModel {

    public $hasAndBelongsToMany = array(
        'users' => array()
    );
    
    public $hasMany = array(
        'rounds' => array()
    );
}
