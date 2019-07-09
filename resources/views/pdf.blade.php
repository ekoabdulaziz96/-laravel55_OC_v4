<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Export PDF</title>
</head>
<body>
      <img src="https://kitabisa-userupload-01.s3-ap-southeast-1.amazonaws.com/_production/user/263043/23_263043_1492177520_53119_s.png" alt="cek"  >dd
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>cd..
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($contacts as $contact)
				<tr>
					<td>{{ $contact->id }}</td>
					<td>{{ $contact->name }}</td>
					<td>{{ $contact->email }}</td>
				</tr>				
				<tr>
					<td> contact->id </td>
					<td> contact->name </td>
					<td> contact->email </td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>