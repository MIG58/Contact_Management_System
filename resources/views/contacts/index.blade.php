<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management System</title>
    <!-- Bootstrap CSS -->
    <style>
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
            margin: 10px;
        }
        .view-btn {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 2px;
            cursor: pointer;
            border-radius: 5px;
        }
        .edit-btn {
            background-color: #ffc107;
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 1px;
            cursor: pointer;
            border-radius: 5px;
        }
        .delete-btn {
            background-color: #dc3545;
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 2px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="body-bg">

<div class="container mt-5 ">
    <div class="row">
        <div class="col-md-12"> 
            <h2 class="mb-4">Contact Book</h2>
            
            <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-2">New Contact</a>

            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- The logic in short: This code iterates through each element in the `$contact_data` array. For each element, it calculates the remainder of dividing its index by 7. Depending on this remainder, it assigns a different Bootstrap contextual class (`table-primary`, `table-secondary`, etc.) to the table row, ensuring that each row gets a different background color.

Explanation of `$contact_data as $index => $cdata`:
- `$contact_data` is an array containing contact data, likely fetched from a database.
- `foreach ($contact_data as $index => $cdata)` is a foreach loop in PHP that iterates over each element in the `$contact_data` array.
- `$index` represents the index of the current element being iterated over, and `$cdata` represents the value of that element (in this case, a contact object or array). --}}

{{-- In the expression `$contact_data as $index => $cdata`, a foreach loop is used to iterate over the elements of the `$contact_data` array. Here's a breakdown of what's happening:

- `$contact_data`: This is an array containing data about contacts, likely retrieved from a database or generated elsewhere in the application.

- `as`: This keyword is used in PHP to specify the iteration variable and the array to iterate over.

- `$index`: This is a variable that represents the current index of the array element being processed in each iteration of the loop.

- `=>`: This is a mapping operator in PHP. It's used to associate the keys of an array with their corresponding values. In this case, it's used to associate the index of each element in `$contact_data` with its value.

- `$cdata`: This is a variable that represents the value of the current element being processed in each iteration of the loop. In the context of `$contact_data`, it likely represents an individual contact's data.

So, in summary, the foreach loop iterates over each element in the `$contact_data` array. In each iteration, `$index` represents the index of the current element, and `$cdata` represents the value (data) of that element. This allows you to access and manipulate each contact's data within the loop. --}}

                    @foreach ($contact_data as $index => $cdata)
                    <tr class="{{ $index % 7 == 0 ? 'table-primary' : ($index % 7 == 1 ? 'table-secondary' : ($index % 7 == 2 ? 'table-success' : ($index % 7 == 3 ? 'table-danger' : ($index % 7 == 4 ? 'table-warning' : ($index % 7 == 5 ? 'table-info' : 'table-light'))))) }}">
                        <td>{{ $cdata->id }}</td>
                        <td>{{ $cdata->first_name }}</td>
                        <td>{{ $cdata->last_name }}</td>
                        <td>{{ $cdata->email }}</td>
                        <td>{{ $cdata->phone }}</td>
                        <td>{{ $cdata->address }}</td>
                        <td>{{ $cdata->city }}</td>
                        <td>
                            <!-- <a href="{{ route('contacts.show', $cdata->id) }}">View</a> -->
        
                            <button type="button" class="view-btn" onclick="window.location.href='{{ route('contacts.show', $cdata->id) }}'">  View</button>
                            <button type="button" class="view-btn" onclick="window.location.href='{{ route('contacts.edit', $cdata->id) }}'">  Edit</button>
                            <form action="{{ route('contacts.destroy', $cdata->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="delete-btn" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
