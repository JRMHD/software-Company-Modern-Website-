<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Subscribing! - InficoreHub</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap');

        body {
            font-family: 'Roboto Mono', monospace;
            line-height: 1.6;
            color: #00FFFF;
            /* Cyan */
            background-color: #0A0A0A;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #0D1117;
            border: 1px solid #30363D;
            border-radius: 15px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .logo {
            max-width: 150px;
            height: auto;
        }

        .glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 180px;
            height: 180px;
            background: radial-gradient(circle, rgba(65, 105, 225, 0.2) 0%, rgba(65, 105, 225, 0) 70%);
            border-radius: 50%;
            z-index: -1;
        }

        h1 {
            color: #4169E1;
            /* Royal Blue */
            font-size: 24px;
            margin-bottom: 20px;
            text-shadow: 0 0 10px rgba(65, 105, 225, 0.5);
        }

        .content {
            background-color: #161B22;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .highlight {
            color: #4169E1;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #58A6FF;
        }

        .dynamic-bg {
            background: linear-gradient(45deg, #161B22, #0D1117);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .neon-border {
            border: 1px solid #4169E1;
            box-shadow: 0 0 10px #4169E1, inset 0 0 10px #4169E1;
            animation: neonPulse 1.5s infinite alternate;
        }

        @keyframes neonPulse {
            from {
                box-shadow: 0 0 10px #4169E1, inset 0 0 10px #4169E1;
            }

            to {
                box-shadow: 0 0 20px #4169E1, inset 0 0 20px #4169E1;
            }
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4169E1;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #3A5FCD;
        }
    </style>
</head>

<body>
    <div class="container dynamic-bg neon-border">
        <div class="header">
            <div class="glow"></div>
            <img src="/images/logo-light.png" alt="InficoreHub Logo" class="logo">
        </div>
        <div class="content">
            <h1>Thank You for Subscribing!</h1>
            <p>Welcome to the <span class="highlight">InficoreHub</span> community! We're thrilled to have you on board.
            </p>
            <p>Here's what you can expect:</p>
            <ul>
                <li>Latest updates on our software solutions</li>
                <li>Exclusive insights into web3 technologies</li>
                <li>Special offers and early access to new features</li>
            </ul>
            <p>Stay tuned for our next update. In the meantime, explore our latest projects:</p>
            <p style="text-align: center;">
                <a href="www.inficorehub.com/services" class="btn">Explore Projects</a>
            </p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} InficoreHub | </p>
        </div>
    </div>
</body>

</html>
