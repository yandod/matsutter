<div id="wrapper">
<div id="main">
<?php
echo $form->create('Post',array('url' => '/posts/add'));
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
<table class="statuslist">
<?php foreach ($posts as $row): ?>
<tr>
<td class="friendicon">
<?php echo $row['Post']['user_id'] ?>
</td>
<td>
<p class="murmur">
<?php echo $row['Post']['user_id'] ?>
 
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
<!-- / #timeline --></div>
<!-- / #main --></div>
<!-- / #wrapper --></div>