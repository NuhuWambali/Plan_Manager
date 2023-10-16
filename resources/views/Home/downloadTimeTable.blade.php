<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDF Template</title>
    <!-- Include Bootstrap CSS (you can use a CDN or local file) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add custom CSS for your PDF template here */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px;
        }
        .page-header {
            text-align: center;
            background-color: #007BFF;
            color: #fff;
            padding: 5px;
        }
        .content {
            margin-top: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 4px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>My Timetable</h1>
    </div>
    <p style="color:green">"Hard work is a two-way street. You get back exactly what you put in." - Unknown</p>
    <div class="content">

        <h4>My TimeTable</h4>
        <table>

            <thead>
            <tr>

                <th>Task</th>
                <th>Day</th>
                <th>From</th>
                <th>To</th>
                <th>Duration</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Plans as $plan)
                <tr>
                    <td>{{$plan->task}}</td>
                    <td>{{$plan->day}}</td>
                    <td>{{$plan->start_time}}</td>
                    <td>{{$plan->end_time}}</td>
                    <td>{{$plan->duration }} minutes</td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <p style="padding-top:2em">created by  {{$userName}}</p>
    </div>
</div>
</body>
</html>

