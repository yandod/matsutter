<?php
class Post extends AppModel
{
    var $name = 'Post';
    var $validate = array(
      'body' => array(
        'rule' => array('maxLength', 140),
        'allowEmpty' => false),
  );

}
