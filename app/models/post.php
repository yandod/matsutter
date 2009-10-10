<?php
class Post extends AppModel
{
    var $belongsTo = array('User');
	var $validate = array(
		'body' => array(
			'required' => 'notEmpty',
			'valid' => array('rule' => array('between', 1, 144))
		)
	);
  }
?>