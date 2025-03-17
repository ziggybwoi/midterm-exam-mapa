<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Features</title>
</head>
<body>
    <a href="/features">Features</a>
    <div>
        <h1>Laravel Features</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($features as $feature)
                    <tr>
                        <td>{{ $feature->id }}</td>
                        <td>{{ $feature->name }}</td>
                        <td>{{ $feature->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
