<!DOCTYPE html>
<html>
<head>
    <title>Contact Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border-color: #1E0342
        }
        
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
            background-color: #F3CA52
        }

        th {
            background-color: grey;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }
        .custom-bg {
            background-color: #F3CA52;
        }
        .body-bg{
            background-color: #1E0342
        }
        h2{
            color: whitesmoke
        }
        .create-btn{
            background-color: greenyellow;
            border-radius: 10px;
            margin: 10px
        }
    </style>
</head>
<body class="body-bg">
    <h1 style="color: #ddd">Contact Details</h1>
    <table >
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
        </tr>
        <tr>
            <td>{{ $cdata->id }}</td>
            <td>{{ $cdata->first_name }}</td>
            <td>{{ $cdata->last_name }}</td>
            <td>{{ $cdata->email }}</td>
            <td>{{ $cdata->phone }}</td>
            <td>{{ $cdata->address }}</td>
            <td>{{ $cdata->city }}</td>
        </tr>
    </table>

    <a href="{{ route('contacts.index') }}">Go Back</a>
</body>
</html>
