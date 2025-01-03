<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Piesakies webināram!</h1>
    </div>

    <div>
        <form action="index.php" method="get">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="level">Izvēlies līmeni.</label>
            <select name="levels" id="levels">
                <option value="advanced">Advanced:</option>
                <option value="beginner">Beginner:</option>
                <option value="intermediate">Intermediate:</option>
            </select>
            <br>

            <div><label for="radiob">Vai vēlies sanemt info fsfs?</label></div>

            <input type="radio" id="radio" name="radio" value="yes">
            <label for="yes">YES</label>
            <input type="radio" id="radio" name="radio" value="no">
            <label for="no">NO</label>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <a href="blog.php">Next Page</a>
    
    <script src="app.js"></script>
</body>
</html>



