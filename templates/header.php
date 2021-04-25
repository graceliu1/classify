
<div class = "text-center" > 
  <br>
  <h1 class = "site-title" >Classify</h1>


  <nav class="navbar sticky-top navbar-expand-md navbar-light" style = "background-color: white">
  <div class="mx-auto d-block flex-wrap">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link <?php echo ($filename == 'index.php')? 'active':''; ?>" href="index.php">Home</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link <?php echo ($filename == 'about_us.php')? 'active':''; ?>" href="about_us.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php echo ($filename == 'contest.php')? 'active':''; ?>" href="contest.php">2021 Contest</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            News
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="news_events.php">Updates and Events</a>
          </div>
        </li>
        

        <li class="nav-item">
          <a class="nav-link <?php echo ($filename == 'contact_us.php')? 'active':''; ?>" href="contact_us.php">Contact</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
</div>

