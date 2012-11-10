<?php
App::uses('AppModel', 'Model');
class Text extends AppModel {
    public $belongsTo = array(
        'user' => array(),
        'round' => array()
    );
}
