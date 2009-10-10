<?php
class Post extends AppModel
{
	public $validate = array(
		'body' => array(
			'required' => 'notEmpty',
			'valid' => array('rule' => array('between', 1, 144))
		)
	);
  }
?>