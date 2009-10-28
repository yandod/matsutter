<?php if (!$ajax->isAjax()): ?>
<?php
echo $javascript->link('prototype');
echo $javascript->link('scriptaculous');
?>
<div id="wrapper">
<div id="main">
<?php echo $ajax->form(
  array(
'type' => 'post',
'options' => array(
      'model' => 'Post',
      'update' => 'timeline',
      'url' => array(
        'controller' => 'posts',
        'action' => 'add',
      ),
      'condition' => '$("PostBody").value != ""',
      'loading' => '$("PostSubmit").disabled = true',
      'complete' => '$("PostBody").value = "";$("PostSubmit").disabled = false'
    )
  )
);
?>
<div id="post">
<span class="whatdoing">イマナニシテル？</span><br/>
<?php echo $form->textarea('Post.body',aa('rows','3','cols','60')) ?>
<p class="btn btnSpace">
<?php echo $form->submit('つぶやく',aa('id','PostSubmit')) ?>
</p>
</div>
<?php echo $form->end() ?>
<div id="timeline">
<?php endif; ?>
<table class="statuslist">
<?php foreach ($posts as $row): ?>
<tr>
<td class="friendicon">
<?php //echo $html->image('http://www.gravatar.com/avatar/'.md5($row['User']['mail']).'?s=40&r=G') ?>
<?php echo $gravatar->image($row['User']['mail']) ?>
</td>
<td>
<p class="murmur">
<?php echo $row['User']['name'] ?>
 
<?php echo $row['Post']['body'] ?>
                <span class="entry-meta">
                <?php echo $row['Post']['created'] ?>
                </span>
</p>
</td>
<td class="action">
<?php echo $html->image('share/trash_icon.gif') ?>
<?php echo $html->image('share/reply_icon.gif') ?>
</td>
</tr>
<?php endforeach; ?>
</table>
 
<?php echo $paginator->next('次のページへ',aa('class','paraR bottombtn','url',aa('action','index'))) ?>
<?php echo $paginator->prev('前のページへ',aa('class','paraL bottombtn')) ?>
<?php if (!$ajax->isAjax()): ?>
<!-- / #timeline --></div>
<!-- / #main --></div>
<!-- / #wrapper --></div>
<?php endif; ?>