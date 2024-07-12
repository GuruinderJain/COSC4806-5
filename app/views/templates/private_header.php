<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class ="navbar-brand" href="#">LOGO</a>
<div class="collapse navbar-collapse">
  <ul class="navbar-nav mr-auto">
  <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
     <li class="nav-item"><a class="nav-link" href="/profilw">Profile</a></li>
    <?php if ($_SESSION['username']=='admin'): ?>
       <li class="nav-item"><a class="nav-link" href="/reprts">Reports</a></li>
      <?php endif ?>
    <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
  </ul>
  </div>
</nav>