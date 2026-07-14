<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Task</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Student Information</h2>

    <form id="studentForm">
        <input type="text" id="name" placeholder="Enter Name" required>

        <input type="number" id="age" placeholder="Enter Age" required>

        <button type="submit">Submit</button>
    </form>

    <br>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody id="studentTable">

        </tbody>
    </table>

</div>

<script src="script.js"></script>

</body>
</html>