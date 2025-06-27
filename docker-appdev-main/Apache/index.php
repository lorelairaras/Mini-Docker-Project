<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team 5 Docker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .table th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Pet Database</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>PetID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Dog Species</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = @file_get_contents("http://node-container:3000/pets"); 
                if ($result === false) {
                    echo "<tr><td colspan='5'>Error: Unable to connect to the server.</td></tr>";
                } else {
                    $pets = json_decode($result);
                    if (json_last_error() !== JSON_ERROR_NONE) {
                        echo "<tr><td colspan='5'>Error: Invalid server response.</td></tr>";
                    } elseif (is_array($pets)) {
                        foreach ($pets as $pet) {
                            echo "<tr>
                                <td>" . htmlspecialchars($pet->petID) . "</td>
                                <td>" . htmlspecialchars($pet->fname) . "</td>
                                <td>" . htmlspecialchars($pet->lname) . "</td>
                                <td>" . htmlspecialchars($pet->dogSpecies) . "</td>
                                <td>" . htmlspecialchars($pet->price) . "</td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No pets found.</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
