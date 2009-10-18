<h1>Add Post</h1>
<?php
echo $form->create('Post');
echo $form->input('user_id');
echo $form->input('body', array('rows' => '3'));
echo $form->end('Save Post');
?>
