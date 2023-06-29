<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #336699;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        .btn {
            background-color: #336699;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #1a4d80;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Form</h1>
        <form action="process-payment.php" method="POST">
            <label for="name">Name on Card</label>
            <input type="text" id="name" name="name" required>

            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card-number" required>

            <div style="display: flex; justify-content: space-between;">
                <div style="flex-grow: 1; margin-right: 10px;">
                    <label for="expiry">Expiration Date</label>
                    <input type="text" id="expiry" name="expiry" required placeholder="MM / YY">
                </div>
                <div style="flex-grow: 1;">
                    <label for="cvv">CVV</label>
                    <input type="number" id="cvv" name="cvv" required>
                </div>
            </div>

            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" required>

            <input type="submit" value="Pay Now" class="btn">
        </form>
    </div>
</body>
</html>