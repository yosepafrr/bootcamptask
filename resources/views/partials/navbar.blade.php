<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarCenteredExample"
        aria-controls="navbarCenteredExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div
        class="collapse navbar-collapse justify-content-center"
        id="navbarCenteredExample"
      >
        <!-- Left links -->
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title  === "Home Page") ? 'active' : '' }}" aria-current="page" href="/landingp">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title  === "User List") ? 'active' : '' }} " href="/userlist">User List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }} " href="/">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Login") ? 'active' : '' }} " href="/login">Login</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST">
              @csrf
              <button class="nav-link ">Logout</button>
          </form>
          </li>
        </ul>


  </nav>
