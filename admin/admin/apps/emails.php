<?php  
include '../adminphpserver.php';?>

<?php
$query = "SELECT * FROM users";
 $result =mysqli_query($connect, $query);
 $rows = mysqli_num_rows($result);
 ?>
  <div class="emails" style=" padding: 10px; width: 98%;">
 <h1 style="text-align: center; font-size: 30px; text-transform: uppercase; color:gray; margin: 30px 0px;"> total users: <?php  echo "$rows"; ?></h1>
  		<table>
			<tr>
			<th>Id</th>
			<th>Full name</th>
			<th>E-mails</th>
			<th style="text-align: center;">password</th>
			<th style="text-align: center;">Action</th>
			</tr>
 <?php
 while ($rws = mysqli_fetch_array($result)) {
 	?>
 	
			<tr>
				<td><?php echo  $rws['id']; ?></td>
				<td><?php echo  $rws['fullname']; ?></td>
				<td><?php echo  $rws['email']; ?></td>
				<td style="text-align: center;"><?php echo  $rws['password']; ?></td>
				<td style="color: gray; text-align: center;"><a href="#" style="text-decoration: none; color: #212121;">Edit</a></td>
			</tr>
		
	
 	<?php
 }
 ?>
 </table>
</div>
 <?php



?>


