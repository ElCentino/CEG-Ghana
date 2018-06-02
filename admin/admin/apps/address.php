<?php include '../adminphpserver.php'; ?>

<div class="emails">
	 <h1 style="text-align: center; font-size: 30px; text-transform: uppercase; color:gray; margin: 30px 0px;">Shipping address</h1>
	<table>
		<tr>
			<th>Full name </th>
			<th>Address </th>
			<th>State</th>
			<th>City</th>
			<th>Phone Number </th>
			<th>Name on card</th>
			<th>Card Number </th>
			<th>Month-Year</th>
			<th>Cvv</th>
			<th>Orderid</th>
		</tr>
		<?php 
        $query = "SELECT * FROM purchase";
        $result = mysqli_query($connect, $query);
        $row = mysqli_num_rows($result);
        while ($rows = mysqli_fetch_array($result)) {
        	$fullname = $rows['firstname']." ".$rows['lastname'];
        	$mont_year = $rows['month']." - ". $rows['year'];
        	
        	?>
        	  <tr>
        	  	<td><?php echo "$fullname"; ?></td>
        	  	<td><?php echo $rows['address']; ?></td>
        	  	<td><?php echo $rows['state']; ?></td>
        	  	<td><?php echo $rows['city']; ?></td>
        	  	<td><?php echo $rows['phonenumber']; ?></td>
        	  	<td><?php echo $rows['holdername']; ?></td>
        	  	<td><?php echo $rows['cardnumber']; ?></td>
        	  	<td><?php echo $mont_year ?></td>
        	  	<td><?php echo $rows['cvv']; ?></td>
        	  	<td><?php echo $rows['orderid']; ?></td>
        	  	
        	  </tr>
        	<?php
        }

		?>
	</table>
</div>