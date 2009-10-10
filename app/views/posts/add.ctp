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
</div>
</div>