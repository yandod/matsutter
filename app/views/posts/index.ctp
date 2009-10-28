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
<!-- / #timeline --></div>
<!-- / #main --></div>
<!-- / #wrapper --></div>