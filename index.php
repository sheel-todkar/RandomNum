<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h2 class="text-center">Random Number Generator</h2>
            <form method="POST" class="mt-3">
                <div class="mb-3">
                    <label for="min" class="form-label">Minimum Number:</label>
                    <input type="number" class="form-control" id="min" name="min" required>
                </div>
                <div class="mb-3">
                    <label for="max" class="form-label">Maximum Number:</label>
                    <input type="number" class="form-control" id="max" name="max" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Generate Random Number</button>
            </form>
            <div class="mt-3 text-center">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $min = (int)$_POST["min"];
                    $max = (int)$_POST["max"];
                    if ($min < $max) {
                        $randomNumber = rand($min, $max);
                        echo "<h4 class='mt-3 text-success'>Generated Number: $randomNumber</h4>";
                    } else {
                        echo "<h4 class='mt-3 text-danger'>Invalid Range!</h4>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
