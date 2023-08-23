<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 40%;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #007AAB;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Apply Offer</h2>
        <form method="post" action="offer.php">
            <div class="form-group">
                <label for="oid">ORDER ID:</label>
                <input type="text" id="oid" name="oid">
            </div>
            <div class="form-group">
                <label for="offer">OFFER%:</label>
                <input type="number" id="offer" name="offer" min="0" max="100">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Apply Offer">
            </div>
        </form>
    </div>
</body>
</html>
