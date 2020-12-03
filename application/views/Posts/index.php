<h3><?= $title ?></h3>
<?php foreach ($posts as $post) :?>
    <div class="jumbotron">    
        <h2><?php echo $post['title']; ?> </h2>
        <small class="date">Posted on: <?php echo $post['time_posted']; ?></small>
        <br>

        <?php echo $post ['body']; ?>

        <a href ="<?php echo site_url('/posts\/' .$post['url']); ?>" class="btn btn-link">Read More...</a>
    </div> 
<?php endforeach; ?>