<?php
require_once('config.php')
?>
<!-- head here -->
<?php
require_once(ROOT_PATH.'/includes/head.php')
?>
<title>My blogs</title>
</head>

<body>
    <!-- navbar below -->
    <?php
    require_once(ROOT_PATH.'/includes/navbar.php')
    ?>
    <!-- header below -->
    <?php
    require_once(ROOT_PATH.'/includes/header.php')
    ?>
    

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
                        <div class="media-body">
                            <h3 class="title mb-1"><a href="<?php echo BASE_URL . 'blogpost'. $post['id']?>"><?= $post['title'] ?></a></h3>
                            <div class="meta mb-1"><span class="date">Published 5 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
                            <div class="intro"><?= $post['body'] ?></div>
                            <a class="more-link" href="<?php echo BASE_URL . 'blogpost'. $post['id']?>">Read more &rarr;</a>
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
        require_once(ROOT_PATH.'/includes/footer.php')
        ?>

    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>