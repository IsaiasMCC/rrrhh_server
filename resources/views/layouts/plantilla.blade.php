<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title> @yield('title') </title>

    <style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

body {
  overflow-x: hidden;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
}

/* Toggle Styles */

#viewport {
  padding-left: 250px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#content {
  width: 100%;
  position: relative;
  margin-right: 0;
}

/* Sidebar Styles */

#sidebar {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #37474F;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#sidebar header {
  background-color: #263238;
  font-size: 20px;
  line-height: 52px;
  text-align: center;
}

#sidebar header a {
  color: #fff;
  display: block;
  text-decoration: none;
}

#sidebar header a:hover {
  color: #fff;
}

#sidebar .nav{

}

#sidebar .nav a{
  background: none;
  border-bottom: 1px solid #455A64;
  color: #CFD8DC;
  font-size: 14px;
  padding: 16px 24px;
}

#sidebar .nav a:hover{
  background: none;
  color: #ECEFF1;
}

#sidebar .nav a i{
  margin-right: 16px;
}

    </style>
</head>
<body>

<div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
      <header>
        <a href="#">My App</a>
      </header>
      <ul class="nav">
        <li>
          <a href="#">
            <i class="zmdi zmdi-view-dashboard"></i> Dashboard
          </a>
        </li>
        <li>
          <a href="#">
            <i class="zmdi zmdi-link"></i> Shortcuts
          </a>
        </li>
        <li>
          <a href="#">
            <i class="zmdi zmdi-widgets"></i> Overview
          </a>
        </li>
        <li>
          <a href="#">
            <i class="zmdi zmdi-calendar"></i> Events
          </a>
        </li>
        <li>
          <a href="#">
            <i class="zmdi zmdi-info-outline"></i> About
          </a>
        </li>
        <li>
          <a href="#">
            <i class="zmdi zmdi-settings"></i> Services
          </a>
        </li>
        <li>
          <a href="#">
            <i class="zmdi zmdi-comment-more"></i> Contact
          </a>
        </li>
      </ul>
    </div>
    <!-- Content -->
    <div id="content">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
              </a>
            </li>
            <li><a href="#">Test User</a></li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid">
        <h1>Simple Sidebar</h1>
        <p>
          Make sure to keep all page content within the
          <code>#content</code>.
        </p>
      </div>
    </div>
  </div>
    <div>
        @yield('content')
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
