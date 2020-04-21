<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d62bf6ec58.js" crossorigin="anonymous"></script>
    <style>
      body{
        background-image: radial-gradient(circle, #c8d1e0, #b6d3e6, #a0d6e6, #8bd9dd, #82dacb);
      }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            <div class="row mt-5">
                <div class="col-md-8 m-auto">
                <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
                  <div class="card card-body">
                    <h1 class="text-center mb-3"><i class="fas fa-hashtag"></i>Welcome to Events.</h1>
                    <form action="process.php" method="POST">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input
                          type="email"
                          id="email"
                          name="email"
                          class="form-control"
                          placeholder="Enter Email"
                        />
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input
                          type="password"
                          id="password"
                          name="pword"
                          class="form-control"
                          placeholder="Enter Password"
                        />
                      </div>
                      <button type="submit" name="Login" class="btn btn-primary btn-block">Login</button>
                    </form>
                    
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="row mt-5">
                <div class="col-md-10 m-auto">
                  <div class="card card-body">
                    <h1 class="text-center mb-3">
                      <i class="fas fa-hashtag"></i> Register for Events.
                    </h1>
                    
                    <?php 
                        if(@$_GET['Empty1']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty1'] ?></div>                                
                    <?php
                        }
                    ?>
                    <?php 
                        if(@$_GET['Empty2']==true)
                        {
                    ?>
                        <div class="text-success text-center py-3"><?php echo $_GET['Empty2'] ?></div>                                
                    <?php
                        }
                    ?>
                    <form action="process.php" method="POST" onsubmit="return validation(this);">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" id="name" name="name" class="form-control" placeholder="Enter Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email"/>
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="pword" class="form-control" placeholder="Create Password"/>
                      </div>
                      <div class="form-group">
                        <label for="password2">Confirm Password</label>
                        <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm Password"/>
                      </div>
                      <div class="validate"></div>
                      <input type="submit" name="register" value="Register" class="btn btn-primary btn-block">
                    </form>
                  </div>
                </div>
              </div>    
        </div>
    </div>
    <script>
        function validation(form){
          if(form.name.value == "") {
            alert("Error: name cannot be blank!");
            form.name.focus();
            return false;
          }
          
          if(form.pword.value != "" && form.password2.value == form.pword.value) {
            return true;
          } else {
            alert("Error: Please check that you've entered and confirmed your password!");
            form.pwd1.focus();
            return false;
          }
          return true;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
</body>
</html>