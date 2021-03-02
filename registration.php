<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> 

</head>
<body>


 <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12  ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="About us.php">About us</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">index</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="registration.php">registration</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              know more
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="your profile.php">your profile</a></li>
                              <li><a class="dropdown-item" href="images.php">images</a></li>
                              <li><hr class="dropdown-divider"></li>
                             
                            </ul>
                          </li>
                          
                        </ul>
                        <form class="d-flex">
                          <input class="form-control me-2" type="search" placeholder="enter book or author name" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">search</button>
                        </form>
                      </div>
                    </div>
                  </nav> 
    
            </div>
        </div>
















    <h1>sign in </h1>
    <div class="containeer">
        <div class="row">
            <div class="col  col-12 col-sm-6 col-md-6 col-lg-6  ">
                <table class="table">
                    <tr>
                        <td>user id</td>
                        <td><input type="text " class="form-control"></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type="password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-primary"> submit </button></td>
                    </tr>
                </table>
            </div>
        </div>
        <h1>new user-sign up</h1>


        <div class="row">

            <div class="col  col-12 col-sm-6 col-md-6 col-lg-6  ">
                <table class="table">
                    <tr>
                        <td> enter user id</td>
                        <td><input type="text " class="form-control"></td>
                    </tr>
                    <tr>
                        <td> enter password</td>
                        <td><input type="password" class="form-control"></td>
                    </tr>


                    <tr>
                        <td>enter email-id</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>enter ph no</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-primary"> submit </button></td>
                    </tr>
                </table>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  
  
</body>
</html>