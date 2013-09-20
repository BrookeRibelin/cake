<?php
class Post extends AppModel {
	var $name = 'Post';
	var $hasMany = array('Comment'=>array('className'=>'Comment'));
	
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}