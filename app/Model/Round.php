<?php
App::uses('AppModel', 'Model');
class Round extends AppModel {

    public $hasMany = array(
        'scores' => array()
    );
    
    public $belongsTo = array(
        'game' => array()
    );

}
