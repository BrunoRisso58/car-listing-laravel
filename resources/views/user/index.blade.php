<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            font-size: 14px;
        }

        .user-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .user-table th,
        .user-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .user-table th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        .user-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .user-table tbody tr:hover {
            background-color: #e0e0e0;
        }

        .button {
            padding: 14px;
            border-radius: 7px;
            cursor: pointer;
            border: none;
            font-weight: bold;
            background-color: #5DADE2
        }

        .cars-button {
            background-color: #2ECC71;
        }

        .cars-button:hover {
            background-color: #82E0AA;
        }

        .update-button {
            background-color: #5DADE2;
        }

        .update-button:hover {
            background-color: #AED6F1;
        }

        .create-button:hover {
            background-color: #AED6F1;
        }

        .delete-button {
            background-color: #EC7063;
        }

        .delete-button:hover {
            background-color: #F1948A;
        }
    </style>
</head>
<body>
    <h1>Users</h1>

    <a href="{{route('user.create')}}"><button class="button create-button">Create user</button></a>
    
    <table class="user-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href=""><button class="button cars-button">Cars</button></a>
                </td>
                <td>
                    <a href="{{route('user.edit', $user->id)}}"><button class="button update-button">Update</button></a>
                </td>
                <td>
                    <form method="POST" action="{{route('user.delete', $user->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="button delete-button">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>