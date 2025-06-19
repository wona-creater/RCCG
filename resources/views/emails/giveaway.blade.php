<!DOCTYPE html>
<html>
<head>
    <title>Crypto Giveaway Details</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #1978e5;">Your Crypto Giveaway Win</h2>

        <p>Dear Recipient,</p>

        <p>We are excited to share details of your recent giveaway win:</p>

        <ul>
            <li><strong>Cryptocurrency:</strong> {{ $cryptoType }}</li>
            <li><strong>Quantity:</strong> {{ number_format($quantity, 8) }}</li>
        </ul>

        <p>Congratulations on winning this amount in our latest crypto giveaway!</p>

        <p>For any questions, please reach out to our support team.</p>

        <p>Best regards,<br>Your Crypto Team</p>
    </div>
</body>
</html>
