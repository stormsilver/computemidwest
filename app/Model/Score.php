<?php
App::uses('AppModel', 'Model');
class Score extends AppModel {
    
    public $belongsTo = array(
        'user' => array(),
        'round' => array()
    );
}
