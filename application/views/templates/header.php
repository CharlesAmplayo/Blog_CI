<html>
    <head>
        <title>CI_Blog</title>
        <link rel ="stylesheet" href = "https://bootswatch.com/4/darkly/bootstrap.min.css">
        <link rel ="stylesheet" href = "<?php echo base_url(); ?>/assets/css/style.css">
        <style>
            p{
                text-indent:50px
            }

            .column {
            float: left;
            width: 33.33%;
            padding: 5px;
            }

            .row::after {
            content: "";
            clear: both;
            display: table;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">Hadoop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="<?php echo base_url(); ?>/about">About Hadoop</a>
                <a href="<?php echo base_url(); ?>/Hadoop_Installation">Installation Guide</a>
                <a href="<?php echo base_url(); ?>/hdfs">HDFS Infrastructure</a>
                <a href="<?php echo base_url(); ?>/posts">Posts</a>
                <a href="<?php echo base_url(); ?>/posts/create">Create</a>
            </li>
            </ul>
        </div>
    </nav>
    
    <div class = "container">