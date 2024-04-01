<?php include('new_header.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        .contact-card {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            background: linear-gradient(to bottom right, #ff9966, #ff5e62);
            color: #fff;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
        }
        .input-field {
            margin-bottom: 10px;
        }
        .input-field label {
            display: block;
            margin-bottom: 5px;
        }
        .input-field input, .input-field textarea {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .input-field textarea {
            height: 100px;
        }
        .btn-submit {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="contact-card">
        <h2>Contact Us</h2>
        <form action="process_form.php" method="POST">
            <div class="input-field">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-field">
                <label for="mobile">Mobile Number:</label>
                <input type="text" id="mobile" name="mobile" required>
            </div>
            <div class="input-field">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
</body>
</html>
