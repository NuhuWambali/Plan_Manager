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
        <h1>This Month Plans</h1>
    </div>
    <p style="color:green">"Don't watch the clock; do what it does. Keep going." - Sam Levenson</p>
    <div class="content">

        <h4>This Month Plans</h4>
        <table>

            <thead>
            <tr>

                <th>Title</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Plans as $plan)
                <tr>
                    <td>{{$plan->plan}}</td>
                    <td>{{$plan->description}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <p style="padding-top:2em">created by  {{$userName}}</p>
    </div>
</div>
</body>
</html>

