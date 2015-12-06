<html>

<head>
	<title>Statistics</title>
</head>

<body>

	<h1>Statistics</h1>
	<br/><br/>
	The number of unique visitors is: 
	<?php
	// connect to the database
	
	// fill in your databasa data here!

//	$server = "localhost";
//	$username = "root";
//	$password = "";
//	$database = "sep";
//
//	$connId = mysql_connect($server,$username,$password) or die("Cannot connect to server");
//	$selectDb = mysql_select_db($database,$connId) or die("Cannot connect to database");
//
//	// get the number of unique visitors
//	$query = "select distinct ip from tracker";
//	$result = mysql_query($query);
//	$number = mysql_num_rows($result);
//
//	// show the number
//	echo $number;
	?>
	
	<br/><br/>
	
	Site's visitors:
	<br/><br/>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>IP</th>
			<th>User agent</th>
			<th>Country</th>
			<th>City</th>
			<th>Referer</th>
			<th>Is a bot?</th>
		</tr>
		<?php
		// get the list of visitors

		//$query = "select * from tracker";
		//$result = mysql_query($query);
       foreach($result as $row)
		{
			?>
			<tr>
				<td><?php echo $row->id;?></td>
				<td><?php echo $row->ip?></td>
				<td><?php echo $row->http_user_agent;?></td>
				<td><?php echo $row->country?></td>
				<td><?php echo $row->city;?></td>
				<td><?php echo $row->http_referer;?></td>
				<td><?php if ($row->isbot==1) echo "yes"; else echo "no";?></td>
                <td><?php echo $row->request_uri?></td>
			</tr>
			<?php
		}
		?>
	</table>

</body>

</html>