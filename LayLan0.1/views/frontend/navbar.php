<form action="index.php" method="post">
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">LayLan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <button class="nav-link active" aria-current="page"  name="currentauction" value="currentauction">Current Auction</button>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Oldest</a></li>
            <li><a class="dropdown-item" href="#">Popular</a></li>
            <li><a class="dropdown-item" href="#"> Special & Unique</a></li>
          </ul>
        </li>
      </ul>
      <div class="d-flex" role="search">
        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Login</button>
        <button class="btn btn-primary mx-2" name="register" value="register">Register</button>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </div>
    </div>
  </div>
</nav>