<?php
class PostsController extends AppController {
  var $name = 'Posts';
  var $components = array('RequestHandler');
  var $helpers = array('Paginator','Ajax','Javascript','Gravatar');
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
    $this->render('index');
  }

  function add()
  {
    if ($this->data) {
      $new_data = array(
        'Post' => array(
          'user_id' => 1,
          'body' => $this->data['Post']['body']
        )
      );
      $ret = $this->Post->save($new_data);
      if ($ret || $this->RequestHandler->isAjax()) {
        $this->index();
      }
    }
  }
}
