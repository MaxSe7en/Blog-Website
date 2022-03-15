

<nav class="navbar navbar-expand-lg navbar fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="<?php echo BASE_URL ?>">MY BLOG</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>">Home</a>
        </li>
      </ul>
      <form class="d-flex">
      <a class="btn btn-outline-primary" href="<?php echo BASE_URL . 'addposts'?>"> Create A Post</a>
      </form>
    </div>
  </div>
</nav>