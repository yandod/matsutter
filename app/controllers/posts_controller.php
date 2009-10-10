<?php
class PostsController extends AppController
{
  var $components = array('RequestHandler');
  var $helpers = array('Ajax','Javascript');
  //var $scaffold;
  function index()
  {
    $param = array(
      'order' => array('Post.created desc')
    );
    
    $post_data = $this->Post->find('all',$param);
    $this->set('post_data',$post_data);
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
        $this->render('index');
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