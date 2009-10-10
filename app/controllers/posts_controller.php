<?php
class PostsController extends AppController
{
  var $components = array('RequestHandler');
  var $helpers = array('Paginator','Ajax','Javascript','Gravatar');
  var $paginate = array(
    'order' => array('Post.created desc'),
    'limit' => '10'
  );
  function index()
  {
    $post_data = $this->paginate('Post');
    
    $param = array(
      'fields' => a('count(*)'),
      'conditions' => aa('Post.user_id',1),
    );
    $my_count = $this->Post->find('all',$param);

    $param = array(
      'fields' => a('count(*)'),
    );
    $all_count = $this->Post->find('all',$param);

    $this->set('my_count',$my_count[0][0]['count(*)']);
    $this->set('all_count',$all_count[0][0]['count(*)']);
    $this->set('post_data',$post_data);
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
  
  function delete($id)
  {
    $this->Post->del($id);
    $this->flash('done','/posts/index');
  }
}
?>