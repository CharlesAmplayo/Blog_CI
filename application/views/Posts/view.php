<h2><?php echo $post['title']; ?></h2>
<small class="date">Posted on: <?php echo $post['time_posted']; ?></small>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<br>

<?php echo form_open('posts/delete/'.$post['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger">

