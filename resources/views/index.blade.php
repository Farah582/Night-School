<!DOCTYPE html>
<html lang="en">

<head>
    <title>Night School - Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Night School - Your one-stop solution for education">
    <meta name="keywords" content="night school, education, admin, teacher, student">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #c6e2fc; /* Light background color */
            color: #495057; /* Dark text color */
        }

        header {
            background-color: #252b31; /* Primary color for the header */
            color: #0f0c0c; /* Text color for the header */
            padding: 20px;
            margin-bottom: 20px;
        }

        .role-section {
            background-color: #f3ebf9; /* White background for role sections */
            border: 1px solid #c6c6fb; /* Border color */
            border-radius: 8px; /* Rounded corners */
            padding: 20px;
            margin-bottom: 20px;
        }

        .role-link {
            display: block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #007bff; /* Button color */
            color: #ffffff; /* Text color for buttons */
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <header class="jumbotron text-center">
        <h1><b>Night School</b></h1>
        <p>Navigate to your desired role</p>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-4 role-section">
                <h3><a class="role-link" href="{{ url('/admin/login') }}">Admin</a></h3>
                <p>Head over to admin panel</p>
                <p>Manage users and courses</p>
            </div>
            <div class="col-sm-4 role-section">
                <h3><a class="role-link" href="{{ url('/teacher/login') }}">Teacher</a></h3>
                <p>Head over to teacher panel</p>
                <p>Manage schedules, attendances, assignments, and remarks</p>
            </div>
            <div class="col-sm-4 role-section">
                <h3><a class="role-link" href="{{ url('/student/login') }}">Student</a></h3>
                <p>Head over to student panel</p>
                <p>Enroll courses, view schedules, submit assignments, and check remarks</p>
            </div>
        </div>
    </div><br><br>

    @include('shared.footer')

</body>

</html>
