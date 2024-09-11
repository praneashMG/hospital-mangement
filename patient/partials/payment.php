<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<h2>Select Payment Method</h2>

<form id="paymentForm" action="../partials/patient_db.php" method="POST">
    <input type="hidden" name="SNo" value="<?php echo $_GET['SNo']; ?>">
    
    <label for="paymentMethod">Choose a payment method:</label>
    <select id="paymentMethod" name="paymentMethod" required>
        <option value="" disabled selected>Select Payment Method</option>
        <option value="credit_card">Credit Card</option>
        <option value="debit_card">Debit Card</option>
        <option value="gpay">Google Pay (GPay)</option>
    </select>
    <br><br>

    <div id="creditCardDetails" style="display:none;">
        <label for="cardNumber">Card Number:</label>
        <input type="text" id="cardNumber" name="cardNumber">
        <br><br>

        <label for="expiryDate">Expiry Date:</label>
        <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY">
        <br><br>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv">
        <br><br>
    </div>

    <div id="debitCardDetails" style="display:none;">
        <!-- Similar fields as credit card -->
    </div>

    <div id="gpayDetails" style="display:none;">
        <!-- GPay button or input fields -->
        <button type="button" id="gpayButton">Pay with GPay</button>
    </div>

    <input type="submit" name="confirmPayment" value="Confirm Payment">
</form>

<script>
$(document).ready(function(){
    $('#paymentMethod').change(function(){
        if($(this).val() == 'credit_card'){
            $('#creditCardDetails').show();
            $('#debitCardDetails').hide();
            $('#gpayDetails').hide();
        } else if($(this).val() == 'debit_card'){
            $('#debitCardDetails').show();
            $('#creditCardDetails').hide();
            $('#gpayDetails').hide();
        } else if($(this).val() == 'gpay'){
            $('#gpayDetails').show();
            $('#creditCardDetails').hide();
            $('#debitCardDetails').hide();
        } else {
            $('#creditCardDetails').hide();
            $('#debitCardDetails').hide();
            $('#gpayDetails').hide();
        }
    });

    $('#gpayButton').click(function(){
        // Call GPay API or redirect to GPay page
        // For now, we're just simulating payment success
        paymentSuccess();
    });

    function paymentSuccess(){
        alert('Payment Successful');
        // Redirect back to pat_preslist.php with payment status
        window.location.href = '../partials/patient_db.php?payment_status=success&SNo=<?php echo $_GET['SNo']; ?>';
    }
});
</script>

</body>
</html>
