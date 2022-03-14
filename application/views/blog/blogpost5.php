<?php
require_once('config.php')
?>
<!-- head here -->
<?php
require_once('/includes/head.php')
?>
<title>My blog post</title>
</head>

<body>
    <!-- navbar below -->
    <?php
    require_once('/includes/navbar.php')
    ?>
    <!-- header below -->
    <?php
    require_once('/includes/header.php')
    ?>
    <div class="main-wrapper min-vh-100 pt-5">
        <article class="blog-post px-3 py-5 p-md-5">
            <?php foreach ($posts as $post) { ?>

                <div class="container">
                    <div class="blog-post-header">
                        <h2 class="title mb-2"><?=  $post['title'] ?></h2>
                        <div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
                    </div>

                    <div class="blog-post-body">
                        <img class="img-fluid" src="<?php echo BASE_URL . 'application/views/blog/static/images/' . $post['image']; ?>" alt="image">
                        <p><?=  $post['body']  ?> </p>
                    </div>
                </div>
            <?php } ?>
        </article>

        <?php
        require_once('/includes/footer.php')
        ?>
    </div>

</body>