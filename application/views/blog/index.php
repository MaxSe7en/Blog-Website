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
                        <img class="mr-3 img-fluid imgs-size post-thumb d-none d-md-flex" src="<?php echo BASE_URL . 'application/views/blog/static/images/' . $post['image']; ?>" alt="image">
                        <div class="media-body">
                            <h3 class="title mb-1"><a href="blog-post.html"><?= $post['title'] ?></a></h3>
                            <div class="meta mb-1"><span class="date">Published 5 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
                            <div class="intro"><?= $post['body'] ?></div>
                            <a class="more-link" href="<?php echo BASE_URL . 'application/views/blog/blogpost'. $post['id']?>.php">Read more &rarr;</a>
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
    <?php

//Code written by purpledesign.in Jan 2014
// function dateDiff($date)
// {
//     $mydate= date("Y-m-d H:i:s");
//     $theDiff="";
//     echo $mydate;//2014-06-06 21:35:55
//     $datetime1 = date_create($date);
//     $datetime2 = date_create($mydate);
//     $interval = date_diff($datetime1, $datetime2);
//     //echo $interval->format('%s Seconds %i Minutes %h Hours %d days %m Months %y Year    Ago')."<br>";
//     $min=$interval->format('%i');
//     $sec=$interval->format('%s');
//     $hour=$interval->format('%h');
//     $mon=$interval->format('%m');
//     $day=$interval->format('%d');
//     $year=$interval->format('%y');
//     if($interval->format('%i%h%d%m%y')=="00000") {
//         //echo $interval->format('%i%h%d%m%y')."<br>";
//         return $sec." Seconds";
//     } else if($interval->format('%h%d%m%y')=="0000"){
//         return $min." Minutes";
//     } else if($interval->format('%d%m%y')=="000"){
//         return $hour." Hours";
//     } else if($interval->format('%m%y')=="00"){
//         return $day." Days";
//     } else if($interval->format('%y')=="0"){
//         return $mon." Months";
//     } else{
//         return $year." Years";
//     }    
// }
?>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>