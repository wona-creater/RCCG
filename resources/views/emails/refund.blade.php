<!DOCTYPE html>
<html>
<head>
    <title>Your Crypto Refund Details</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #1978e5;">Your Refund Confirmation</h2>

        <p>Dear Recipient,</p>

        <p>We are happy to share details of your processed refund:</p>

        <ul>
            <li><strong>Cryptocurrency:</strong> {{ $cryptoType }}</li>
            <li><strong>Quantity:</strong> {{ number_format($quantity, 8) }}</li>
        </ul>

        <p>Your refund has been successfully processed!</p>

        <p>For any questions, please reach out to our support team.</p>

        <p>Best regards,<br>Your Crypto Team</p>
    </div>
</body>
</html>
