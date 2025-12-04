<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List mahasiswa terganteng Instiki</title>
</head>
<body>
   
        <h1>List mahasiswa terganteng Instiki</h1>
        <ul>
            @foreach ($students as $student)
                <li>{{ $student['name'] }}</li>
            @endforeach
        </ul>
    
</body>
</html>