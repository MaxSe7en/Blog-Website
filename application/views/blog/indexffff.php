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

<!-- `id`, `user_id`, `title`, `slug`, `views`, `image`, `body`, `published`, `created_at`, `updated_at` -->