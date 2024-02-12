<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <title>Blogs Publisher</title>
</head>
<body >
<nav class="navbar navbar-expand-lg justify-content-end   ">

        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="https://i.pinimg.com/236x/0d/c4/1c/0dc41cdb97e4a9bba44edeac2b599d21.jpg" 
                    alt="" width="80" height="80">
                </a>
            </div>
        </nav>

  <div class="container-fluid color:$teal-800">

      <a class="navbar-brand fw-bold " href="index.php">Blogs Publisher</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-1 mb-lg-0">

              <li class="nav-item">
                  <a class="nav-link "  aria-current="page" href="index.php"  >Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="About.php">About</a>
              </li>

              <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                    </ul>
              </div>

              <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
        
      </ul>
  </div>
    <div>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search your blogs" aria-label="Search">
        <button class="btn btn-outline-success " type="submit">Search</button>
      </form>
      </div>
   

      
   
  </div>

  <div class="d-grid gap-1 d-md-flex justify-content-md-end">
           
          <a href="log.php"> <button class="btn btn-success btn-sm ml-4 mr-2" type="button">Log In</button></a>
          <a href="sign-in.php"> <button class="btn btn-primary btn-sm" type="button">Sign In</button></a> 
      </div>
</nav>
</body>
</html>