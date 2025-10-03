<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #CEDFF8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #012d85;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
        }

        .content {
            padding: 20px;
            color: #1C3457;
        }

        .content p {
            font-size: 16px;
            margin: 10px 0;
        }

        .content strong {
            color: #012d85;
        }

        .footer {
            background-color: #1C3457;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 14px;
        }

        .button {
            display: inline-block;
            background: #012d85;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 15px;
            font-weight: bold;
        }

        .button:hover {
            background: #B24014;
        }

        @media screen and (max-width: 600px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">New Contact Form Submission</div>

        <!-- Email Content -->
        <div class="content">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
            <p><strong>Subject:</strong> {{ $data['subject_name'] }}</p>
            <p><strong>Message:</strong></p>
            <p style="background: #FFE2DA; padding: 10px; border-radius: 5px;">{{ $data['massage'] }}</p>
            <center>
                <a href="mailto:{{ $data['email'] }}" class="button">Reply to {{ $data['name'] }}</a>
            </center>
        </div>

        <!-- Footer -->
        <div class="footer">
            &copy; {{ date('Y') }} The IT Services. All Rights
            Reserved.
        </div>
    </div>
</body>

</html>
