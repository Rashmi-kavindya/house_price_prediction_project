<?php
$predicted_price = $_GET['price'] ?? "No Prediction";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediction Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5 text-center">
    <h2 class="mb-4">📊 Prediction Result</h2> 
    <?php if ($predicted_price !== null): ?>
        <div class="alert alert-success">
            <h3>Estimated House Price: <strong>$<?php echo number_format($predicted_price, 2); ?></strong></h3>
        </div>
    <?php else: ?>
        <div class="alert alert-danger">
            <h3>No Prediction Available</h3>
        </div>
    <?php endif; ?>
    <a href="index.php" class="btn btn-primary">Go Back</a>

    <div class="mt-4">
        <img src="images/giphy.gif" alt="Loading" class="img-fluid">
    </div>

</html>