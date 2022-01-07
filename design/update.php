<?php require "header.php"; ?>
<div class="row">
    <div class="col-6">
        <form action="updateuser.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label  class="form-label">User Name</label>
                    <input type="text" name="username" value="<?= $userData['name']?>" class="form-control"  >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" value="<?= $userData['email']?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" name="img" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <img src="userimages/<?= $userData['img']?>" width="100px" alt="">
            </div>
            <input type="hidden" name="id" value="<?= $userData['id']?>">

            <button type="submit" class="btn btn-primary">Update</button> 
        </form>
    </div>
</div>
<?php require "footer.php"; ?>
