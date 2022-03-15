<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://localhost/kohana/api/theme-1.css">
    <link rel="stylesheet" href='https://localhost/kohana/api/mytheme.css'>
    <title>Create blog</title>
</head>

<body>
    <div class="container mt-5">
        <div class="animate">
            <p class="loading"></p>
            <p class="messages"></p>
            <p class="error"></p>
        </div>
        <?php foreach ($posts as $post) { ?>
            <h1><?php $post['body'] ?></h1>
            <form action="/api/update_post.php" method="post" id='form'>
                <p>
                <h2 for="title">ID</h2><br />
                <input type="text" name="title" id="id" value="<?php echo $post['id'] ?>" class="form-control bg-dark text-white my-3 text-center">
                </p>
                <p>
                <h2 for="title">Title</h2><br />
                <input type="text" name="title" id="title" aria-describedby="inputGroup-sizing-default" value="<?php echo $post['title'] ?>" class="form-control text-white bg-dark  my-3 text-center">
                </p>
                <p>
                <h2 for="title">Body</h2><br />
                <textarea name="body" id="body" value='sdfsfsad' class='form-control  text-white bg-dark my-3'><?php echo $post['body'] ?></textarea>
                </p>
                <button class='btn btn-success mt-3 btn-lg'>Update Blog</button>
            </form>
        <?php } ?>
        <h2 id='message'></h2>
    </div>




    <script>
        let title = document.getElementById('title');
        let body = document.getElementById('body');
        let form = document.getElementById('form');
        let id = document.getElementById('id');
        let messageResponse = document.getElementById('message');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            submitBlog();
        })
        //LOADER ANIMATION
        const getAnimation = document.querySelector(".animate");

        const messages = document.querySelector(".messages");
        const ifError = document.querySelector(".error");
        const Loading = document.querySelector(".loading");

        function isLoading() {
            getAnimation.classList.add("active");
            Loading.classList.add("active");
            messages.innerText = "";
            messages.classList.add("active");
        }
        async function submitBlog() {

            //LOOPING THROUGH  THE USERS TO FIND MATCH
            try {
                isLoading();

                const idValue = id.value.trim();
                const titleValue = title.value.trim();
                const bodyValue = body.value.trim();

                const blogs = {
                    title: titleValue,
                    body: bodyValue,
                    id: idValue
                };

                const URL = "https://localhost/kohana/api/update_post.php";
                const options = {
                    method: "POST",
                    body: JSON.stringify(blogs),
                };
                console.log(`URL==========>${URL}`);
                const response = await fetch(URL, options);
                console.log();

                const blogData = await response.json();
                const useTheData = await blogData;
                const {
                    status,
                    message
                } = await useTheData;
                if (status === 200) {
                    Loading.classList.remove("active");
                    messages.classList.remove("active");
                    const text = `${message}. Redirecting now...`;
                    messages.innerText = text;
                    console.log(message);
                    // setTimeout(() => {
                    //     window.location = "sample.html";
                    // }, 1000);

                    email1.value = "";
                    passLog.value = "";
                } else {
                    ifError.classList.remove("active");
                    Loading.classList.remove("active");
                    messages.classList.remove("active");
                    const text = `${message}`;
                    messages.innerText = text;
                    setTimeout(removeLoader, 2000);
                    console.log(message);
                }
            } catch (error) {
                Loading.classList.remove("active");
                const text = `Ooops...Something went wrong.`;
                setTimeout(() => {
                    getAnimation.classList.remove("active");
                }, 4000);
            }


        }
    </script>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#btn-more').click(function() {
                $('blogs').load();
            })
        })
    </script>
</body>

</html>