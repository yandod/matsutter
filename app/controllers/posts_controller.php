<?php
class PostsController extends AppController {
  var $name = 'Posts';
  var $helpers = array('Gravatar');
  //var $scaffold;
  var $paginate = array(
    'order' => array('Post.id' => 'DESC'),
    'limit' => 10
  );
  function index() {
    $param = array(
      'conditions' => aa('Post.user_id',1),
    );
    $my_count = $this->Post->find('count',$param);
    $all_count = $this->Post->find('count');
 
    $this->set('my_count',$my_count);
    $this->set('all_count',$all_count);
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
