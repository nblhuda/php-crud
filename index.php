<?php include('server.php'); ?>
<html>
   <head>
       <title>CRUD</title>
       <link rel="stylesheet" type="text/css" href="style.css">
   </head>

   <body>

   <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td>
                            <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                        </td>
                        <td>
                            <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
    </table>
    <form method="post" action="server.php">
            <div class="input-group">
                <label>Name</label>
                <input type="text" name="name">
            </div>
            <div class="input-group">
                <label>Address</label>
                <input type="text" name="address">
            </div>
            <div class="input-group">
                <button type="submit" name="save" class="btn">Save</button>
            </div>
    </form>
   </body>
 
</html>