<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interest Calculator</title>
<style>
    /* Basic styling for better presentation */
    body {
        font-family: Arial, sans-serif;
    }
    form {
        max-width: 400px;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="number"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<form action="1.php" method="post">
    <h3 align='center'>Frofit / Loss</h3>
    <label for="Sales">Sales</label>
    <input type="number" id="Sales" name="Sales" required>
    
    <label for="Production">Production</label>
    <input type="number" id="Production" name="Production" required>
    
    <input type="submit" value="Calculate">
</form>

</body>
</html>