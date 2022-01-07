<?php require "header.php"; ?>
<div class="row">
    <div class="col-6">
    <form action="register.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label  class="form-label">User Name</label>
                <input type="text" name="username" class="form-control"  >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" name="confermedpassword" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" name="img" type="file" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary">Register</button> 
    </form><br>

<a href='login.php'><button type='button' class='btn btn-dark'>Login</button></a>


    </div>
</div>
    
<?php require "footer.php"; ?>
