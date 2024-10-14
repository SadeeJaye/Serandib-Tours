<?php
// Sample booking data (could come from session or database)
$tour_name = "Serandib Island Adventure";
$transport_service = "Private Car";
$tour_cost = 200; // Example cost in USD
$transport_cost = 50; // Example transport cost in USD
$tax = 20; // Example tax in USD
$total = $tour_cost + $transport_cost + $tax;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = $_POST['card_number'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];
    $payment_method = $_POST['payment_method'];
    $coupon = $_POST['coupon'];

    // Apply coupon logic
    if ($coupon == "DISCOUNT10") {
        $total *= 0.9; // Apply 10% discount
    }

    // Here, call the payment gateway API to process the payment

    // Example confirmation message
    echo "<script>alert('Payment successful!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway Integration</title>
    <link rel="stylesheet" href="book.css"> <!-- Link to external CSS -->
</head>
<body>

<!-- Home Button -->
<a href="home.php" class="home-button">Home</a>

<div class="payment-page">
    <!-- Left Panel: Booking Summary -->
    <div class="left-panel">
        <h3>Booking Summary</h3>
        <p><strong>Tour:</strong> <?php echo $tour_name; ?></p>
        <p><strong>Transport:</strong> <?php echo $transport_service; ?></p>
        <p><strong>Tour Cost:</strong> $<?php echo $tour_cost; ?></p>
        <p><strong>Transport Cost:</strong> $<?php echo $transport_cost; ?></p>
        <p><strong>Tax:</strong> $<?php echo $tax; ?></p>
        <p><strong>Total:</strong> $<?php echo $total; ?></p>
    </div>

    <!-- Right Panel: Payment Details -->
    <div class="right-panel">
        <h3>Payment Details</h3>

        <form method="POST" class="payment-form">
            <!-- Card Details Input -->
            <div class="input-group">
                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" required>
            </div>
            <div class="input-group">
                <label for="expiry">Expiry Date:</label>
                <input type="text" id="expiry" name="expiry" required placeholder="MM/YY">
            </div>
            <div class="input-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>

            <!-- Alternative Payment Methods -->
            <div class="input-group">
                <label for="payment_method">Payment Method:</label>
                <select id="payment_method" name="payment_method" required>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>

            <!-- Coupon Field -->
            <div class="input-group">
                <label for="coupon">Apply Coupon:</label>
                <input type="text" id="coupon" name="coupon" placeholder="Enter coupon code">
            </div>

            <!-- Secure Payment Badge -->
            <div class="secure-badge">
                <img src="secured.png" alt="Secure Payment">
            </div>

            <!-- Confirm and Pay Button -->
            <div class="input-group">
                <button type="submit" class="btn-confirm-pay">Confirm and Pay</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
