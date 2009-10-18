<?php
class PostsController extends AppController {
  var $name = 'Posts';
  //var $scaffold;

  function index() {
    $this->set('posts', $this->Post->find('all'));
  }

  function add() {
    if (!empty($this->data)) {
      if ($this->Post->save($this->data)) {
        $this->flash('Your post has been saved.','/posts');
      }
    }
  }

}
