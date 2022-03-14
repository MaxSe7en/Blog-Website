<?php
require('config.php')
?>
<!-- head here -->
<?php
require(ROOT_PATH . '/includes/head.php')
?>
<title>My blog post</title>
</head>

<body>
    <!-- navbar below -->
    <?php
    require(ROOT_PATH . '/includes/navbar.php')
    ?>
    <!-- header below -->
    <?php
    require(ROOT_PATH . '/includes/header.php')
    ?>
    <div class="main-wrapper min-vh-100 pt-5">
        <article class="blog-post px-3 py-5 p-md-5">
            <?php foreach ($posts as $post) { ?>
                <div class="container">
                    <div class="blog-post-header">
                        <h2 class="title mb-2">Why Every Developer Should Have A Blog</h2>
                        <div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
                    </div>

                    <div class="blog-post-body">
                        <img class="img-fluid" src="assets/images/blog/blog-post-banner.jpg" alt="image">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>
                    </div>
                </div>
            <?php } ?>
        </article>
        <?php
        require(ROOT_PATH . '/includes/footer.php')
        ?>
    </div>

</body>