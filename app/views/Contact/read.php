<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>

	<a href='/Contact/read'>Add a new person record</a>

	<div id='container'>
		<table>
			<tr><th>name</th><th>email</th><th>message</th>

		<?php
		foreach($data as $index => $messsage){
			echo "<tr><td>$message->name</td><td>$message->email</td><td>$message->messageText</td><td>$person->weekly_flyer</td><td>$person->mailing_list</td>

			</tr>";
		}
		?>
		</table>

	</div>
</body>
</html>