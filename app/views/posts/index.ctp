<div id="wrapper">
<div id="main">
<?php echo $form->create(aa('action','add')); ?>
<div id="post">
<span class="whatdoing">イマナニシテル？</span><br/>
<span class="textCount" id="js_textcount">140</span>
<?php echo $form->textarea('Post.body') ?>
<p class="btn btnSpace">
<?php echo $form->submit('つぶやく') ?>
</p>
</div>
<?php echo $form->end() ?>
<div id="timeline">
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
<!-- / #timeline --></div>
<!-- / #main --></div>
<!-- / #wrapper --></div>
