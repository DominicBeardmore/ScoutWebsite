

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($users as $user)
    <form method='POST' action='{{ route('authorize.update', [$user->id] )}}'>
        @csrf
        @method('PUT')
            <input type="submit" value="Auth" name="id"/>
    </form>
    @endforeach
</body>
</html>

