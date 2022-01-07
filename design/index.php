
<?php require "header.php"; ?>
 <table class="table table-striped">
    <thead>
            <tr>
                <th>ID</th>
                <th>Img</th>
                <th>Name</th>
                <th>Email</th>
                <?php if($userRole == 1):?>
                    <th>Update</th>
                    <th>Delete</th>
                <?php endif ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d):  ?>
                <tr>
                    <td><?= $d['id'] ?></td>
                    <td><img width="100px" src="userimages/<?= $d['img'] ?>" alt=""></td>
                    <td><?= $d['name'] ?></td>
                    <td><?= $d['email']?></td>    
                    <?php if($userRole == 1):?>
                        <td><a href="updateuser.php?id=<?= $d['id'] ?>"><button type="button" class="btn btn-success">Update</button></a></td>    
                        <td><a href="deleteuser.php?id=<?= $d['id'] ?>" ><button type="button" class="btn btn-danger">Delete</button></a> </td>    
                    <?php endif ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
</table>
<a href='logout.php'><button type='button' class='btn btn-dark'>Logout</button></a>
    
<?php require "footer.php"; ?>
