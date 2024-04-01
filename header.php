<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="design.css">
    <style>
        /* Styles for desktop screens */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-bar {
            display: flex;
            gap: 20px;
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
        }

        /* Media query for screens smaller than 600px */
        @media only screen and (max-width: 600px) {
            .top-bar {
                flex-direction: column;
                align-items: stretch;
            }

            .menu-bar, .auth-buttons {
                margin-top: 10px;
                gap: 10px;
            }

            .logo img {
                max-width: 100px;
            }

            .menu-bar a, .auth-buttons a {
                font-size: 14px;
            }
        }
    </style>
    <title>e-krushivaidya</title>
</head>
<body>
    <?php include('new_header.php')?>
</body>
</html>
