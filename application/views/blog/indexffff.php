<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<h2>My list of blogs</h2>


<?php foreach($posts as $post) {?>
    
    <hr/>
    <h4><?= $post['title'] ?></h4>
    <p><?= $post['body'] ?></p>
    <?php }?>
</body>
</html>
<?php $start_date = new DateTime('2007-09-01 04:10:58');
$since_start = $start_date->diff(new DateTime('2012-09-11 10:25:00'));
echo $since_start->days.' days total<br>';
echo $since_start->y.' years<br>';
echo $since_start->m.' months<br>';
echo $since_start->d.' days<br>';
echo $since_start->h.' hours<br>';
echo $since_start->i.' minutes<br>';
echo $since_start->s.' seconds<br>';?>
<div class="main-wrapper pt-5">
        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center">
                <h2 class="heading">Lorem ipsum dolor sit amet consectetur</h2>
                <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
                <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
            <!--//container-->
        </section>
        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container">
            <?php foreach($posts as $post) {?>
                <div class="item mb-5">
                    <div class="media">
                        <img class="mr-3 img-fluid imgs-size post-thumb d-none d-md-flex" src="<?php echo BASE_URL . 'application/views/blog/static/images/' . $post['image']; ?>" alt="image">
                        <div class="media-body">
                            <h3 class="title mb-1"><a href="blog-post.html"><?= $post['title'] ?></a></h3>
                            <div class="meta mb-1"><span class="date">Published <?=  dateDiff($post['published']) ?> days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
                            <div class="intro"><?= $post['body'] ?></div>
                            <a class="more-link" href="blog-post.html">Read more &rarr;</a>
                        </div>
                        <!--//media-body-->
                    </div>
                    <!--//media-->
                </div>
                <?php }?>
                <!--//item-->
                <nav class="blog-nav nav nav-justified my-5">
                    <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                    <a class="nav-link-next nav-item nav-link rounded" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                </nav>

            </div>
        </section>

        <?php
        require(ROOT_PATH.'/includes/footer.php')
        ?>

    </div>
<!-- `id`, `user_id`, `title`, `slug`, `views`, `image`, `body`, `published`, `created_at`, `updated_at` -->