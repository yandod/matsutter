<?php
class GravatarHelper extends AppHelper { 
  var $helpers = array('Html');
  function image($mail){
    return $this->Html->image('http://www.gravatar.com/avatar/'.md5($mail).'?s=40&r=G');
  }
}
?>