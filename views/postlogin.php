<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="/plexus">Plexus</a>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li id="home-nav" class="nav-item ml-lg-5 ml-md-3 ml-sm-0 active">
      <a class="nav-link" href="/plexus">Home <span class="sr-only">(current)</span></a>
    </li>
    <li id="users-nav" class="nav-item ml-lg-2 ml-md-2 ml-sm-0">
      <a class="nav-link" href="/plexus/includes/php/users.php">Users</a>
    </li>
    <li class="nav-item ml-lg-2 ml-md-2 ml-sm-0">
      <a class="nav-link" href="/plexus/includes/php/questions.php">Questions</a>
    </li>
    <li class="nav-item ml-lg-2 ml-md-2 ml-sm-0">
      <a class="nav-link" href="/plexus/includes/php/syllabus.php">Syllabus</a>
    </li>
    <li class="nav-item ml-lg-2 ml-md-2 ml-sm-0">
      <a class="nav-link" href="/plexus/includes/php/notice.php">Notices</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0" action="/plexus/includes/php/logout.php" method="POST">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btnLogout" name="submit">Log Out</button>
  </form>
</div>
</nav>