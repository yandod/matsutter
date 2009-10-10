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
      'loading' => '$("PostSubmit").disabled = true',
      'complete' => '$("PostBody").value = "";$("PostSubmit").disabled = false'
    )
  )
);
?>
<div id="post">
<span class="whatdoing">イマナニシテル？</span><br/>
<span class="textCount" id="js_textcount">140</span>
<?php echo $form->textarea('Post.body',aa('rows','3','cols','60')) ?>
<p class="btn btnSpace">
<?php echo $form->submit('つぶやく',aa('id','PostSubmit')) ?>
</p>
</div>
<?php echo $form->end() ?>
<div id="timeline">
<?php endif; ?>
	<table class="statuslist">
<?php foreach ($post_data as $row): ?>	
		<tr>
			<td class="friendicon">
				<?php echo $html->image('friend_icon.png') ?>
			</td>
			<td>
				<p class="murmur">
				<?php echo $row['Post']['user_id'] ?>
				
				<?php echo $row['Post']['body'] ?>
                <span class="entry-meta">
                <a href="status.html"><?php echo $row['Post']['created'] ?></a>
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
<p class="paraR bottombtn"><a href="#next">前のページへ</a></p>
<p class="paraL bottombtn"><a href="#rss">RSS</a></p>
<?php if (!$ajax->isAjax()): ?>
<!-- / #timeline --></div>
<!-- / #main --></div>
<!-- / #wrapper --></div>
<?php endif; ?>