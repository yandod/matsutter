<?php
class PostsController extends AppController {
  var $name = 'Posts';
  //var $scaffold;

  function index() {
    $this->set('posts', $this->Post->find('all'));
  }

}
