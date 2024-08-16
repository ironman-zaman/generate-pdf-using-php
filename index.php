<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PDF file</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Enter Details:</h1>
        <form action="createpdf.php" method="post">
            <input type="text" name="fullname" id="" class="form-control mb-2" placeholder = "Enter Your Name:" required>
            <input type="email" name="email" id="" class="form-control mb-2" placeholder = "Email:" required>
            <input type="tel" name="phone" id="" class="form-control mb-2" placeholder = "Phone Number:" required>
            <textarea name="message"  id="" class="form-control mb-2"  placeholder="Enter Message:" required></textarea>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</body>
</html>