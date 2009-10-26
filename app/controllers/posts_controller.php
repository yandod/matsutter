<?php
class PostsController extends AppController {
  var $name = 'Posts';
  //var $scaffold;
  var $paginate = array(
    'order' => array('Post.id' => 'DESC'),
    'limit' => 10
  );
  function index() {
    $this->set('posts', $this->paginate('Post'));
  }

  function add() {
    if (!empty($this->data)) {
      $this->data['Post']['user_id'] = 1;
      if ($this->Post->save($this->data)) {
        $this->flash('Your post has been saved.','/posts');
      }
    }
  }

}
