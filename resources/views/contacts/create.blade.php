<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .custom-bg {
            background-color: #F3CA52;
        }
        .body-bg{
            background-color: #1E0342
        }
    </style>
</head>
<body class="body-bg">
    <div class="container mt-4 body-bg">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-white">
                    <div class="card-header bg-primary text-white">
                        <h2>Add a New Contact</h2>
                    </div>
                    <div class="card-body custom-bg">
                        <form method="POST" action="{{ route('contacts.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <textarea class="form-control" id="address" name="address" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Clear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</h
