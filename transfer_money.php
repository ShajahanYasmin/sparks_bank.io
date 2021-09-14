<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php include('navbar.php'); ?>

<div class="container">
        <h2>Transfer Money</h2>
        <br>
            <div>
                <div>
                    <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Balance</th>
                            <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><a href="selecteduser.php?id= <?php echo $rows['id'] ;?>"> <button type="submit" class="btn btn-success">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
        

<?php include('footer.php'); ?>
</body>
</html>