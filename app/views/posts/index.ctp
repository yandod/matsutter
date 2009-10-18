<?php echo $html->link('つぶやく','/posts/add') ?>
<table>
  <tr><th>Id</th><th>user_id</th><th>Title</th><th>Created</th></tr>
<?php foreach ($posts as $post): ?>
  <tr>
    <td><?php echo $post['Post']['id']; ?></td>
    <td><?php echo $post['Post']['user_id']; ?></td>
    <td><?php echo $post['Post']['body']; ?></td>
    <td><?php echo $post['Post']['created']; ?></td>
  </tr>
<?php endforeach; ?>
</table>
<?php echo $paginator->prev() ?> &nbsp;
<?php echo $paginator->numbers() ?> &nbsp;
<?php echo $paginator->next() ?>