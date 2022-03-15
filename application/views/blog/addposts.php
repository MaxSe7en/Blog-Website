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
        <form action="/api/create_post.php" method="post" id='form'>
            <p>
                <h2 for="title">Title</h2><br />
                <input type="text" name="title" id="title" placeholder="Blog Title" class="form-control bg-dark text-white my-3 text-center">
            </p>
            <p>
                <h2 for="title">Body</h2><br />
                <textarea name="body" id="body" class='form-control bg-dark text-white my-3'></textarea>
            </p>
            <button class='btn btn-success mt-3 btn-lg'>Create Blog</button>
        </form>

        <h2 id='message'></h2>
    </div>


    <?php
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];
    }

    ?>

    <script>
        let title = document.getElementById('title');
        let body = document.getElementById('body');
        let form = document.getElementById('form');
        let messageResponse = document.getElementById('message');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            submitBlog();
        })
        async function submitBlog() {
            const titleValue = title.value.trim();
            const bodyValue = body.value.trim();

            if(titleValue == '')return;
            if (bodyValue == '') return;
            const blogs = {
                title: titleValue,
                body: bodyValue,
            };

            const URL = "https://localhost/kohana/api/create_post.php";
            const options = {
                method: "POST",
                body: JSON.stringify(blogs),
            };

            const response = await fetch(URL, options);
            console.log();

            const blogData = await response.json();
            const useTheData = await blogData;
            const {
                status,
                message
            } = await useTheData;
            if (status === 200) {
                messageResponse.innerText = message;
                console.log(message);
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