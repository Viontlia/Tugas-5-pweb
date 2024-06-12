<?php session_start();
    if($_SESSION['is_logged_in'] != TRUE)
    {
        header ("Location: Login.html");
        exit();
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Utama</title>
  <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
<style>
        .online-users {
            border-right: 1px solid #ccc;
            overflow-y: auto;
        }
        .online-users-header {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #e9ecef;
            border-bottom: 1px solid #ccc;
        }
        .online-users-header img {
            margin-right: 20px;
            margin-left: 10px;
        }
        .user {
            display: flex;
            align-items: center;
        }
        .user-icon {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        .fixed-header {
      top: 0;
      right: 0;
      width: 100%;
      display: flex;
      justify-content: flex-end;
      background-color: #c3c4ff;
      color: rgb(0, 0, 0);
      padding: 10px 20px;
    }
    .dropdown-menu {
      border: none;
      box-shadow: none;
      padding: 0;
    }
    
</style>
</head>
<body>
  <div class="container my-5">
  <div class="fixed-header">
  <div class="dropdown">

    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    A12.2022.06796 - VIONA TRI NATALLIA &#128100; 
    </button>
  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="Settings.html">Settings</a></li>
    <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
  </ul>
</div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 bg-light py-3 online-users">
        <div class="d-flex flex-column align-items-start">
          <div class="online-users-header">
            <img src="user.jpeg"  width="50px" alt="User Icon">
            <div>
                <h6>Online users</h6>
                <p>2 online users (last 5 minutes)</p>
            </div>
        </div><br>
        <div class="user">
            <span class="user-icon">&#128100;</span>
            <span>A12.2022.06796 - VIONA TRI NATALLIA</span>
        </div>
        <div class="user">
          <span class="user-icon">&#128100;</span>
          <span>A12.2022.06xxx - ASEP</span>
      </div><br>
      
          <a href="halaman1.php" class="btn btn-primary mb-3">Dashboard</a>
          <a href="Event.html" class="btn btn-outline-primary mb-3">Event</a>
          <a href="Biodata.html" class="btn btn-outline-primary mb-3">Biodata</a>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search Information">
            <button class="btn btn-outline-primary" type="button">Go</button>
          </div>
        </div>
      </div>
      <div class="col-md-9 bg-light py-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur nemo harum, illo architecto quibusdam in molestiae. Repudiandae fugiat autem nesciunt quaerat possimus voluptatem, magni consectetur velit fuga aut dignissimos eaque!
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque minima cum error voluptatem nam, eveniet eligendi! Suscipit, exercitationem adipisci. Aliquam facilis possimus est quidem? Rem aliquid at dicta voluptates voluptate.</p>
            <img src="images.jpg" class="img-thumbnail" width="300px" alt="coffee-image">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur nemo harum, illo architecto quibusdam in molestiae. Repudiandae fugiat autem nesciunt quaerat possimus voluptatem, magni consectetur velit fuga aut dignissimos eaque!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque minima cum error voluptatem nam, eveniet eligendi! Suscipit, exercitationem adipisci. Aliquam facilis possimus est quidem? Rem aliquid at dicta voluptates voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur nemo harum, illo architecto quibusdam in molestiae. Repudiandae fugiat autem nesciunt quaerat possimus voluptatem, magni consectetur velit fuga aut dignissimos eaque!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque minima cum error voluptatem nam, eveniet eligendi! Suscipit, exercitationem adipisci. Aliquam facilis possimus est quidem? Rem aliquid at dicta voluptates voluptate.
            </p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <script src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>