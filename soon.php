<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0a0a0a;
        }

        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #444;
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: #333 #0a0a0a;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #0a0a0a;
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .container {
            max-width: 900px;
            width: 100%;
            text-align: center;
        }

        .icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 40px;
            border: 2px solid #333;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        h1 {
            font-size: 3rem;
            font-weight: 300;
            margin-bottom: 15px;
            letter-spacing: -1px;
        }

        .subtitle {
            color: #666;
            font-size: 1rem;
            margin-bottom: 20px;
            font-weight: 400;
        }

        .launch-date {
            color: #888;
            font-size: 0.9rem;
            margin-bottom: 60px;
            font-weight: 300;
        }

        .countdown-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .countdown-box {
            background: #111;
            border: 1px solid #222;
            border-radius: 8px;
            padding: 25px 15px;
        }

        .countdown-number {
            font-size: 2.5rem;
            font-weight: 300;
            color: #fff;
            margin-bottom: 8px;
        }

        .countdown-label {
            font-size: 0.75rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .message {
            color: #888;
            font-size: 0.95rem;
            line-height: 1.6;
            max-width: 500px;
            margin: 0 auto;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            .countdown-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
                max-width: 350px;
            }

            .countdown-number {
                font-size: 2rem;
            }

            .icon {
                width: 50px;
                height: 50px;
                margin-bottom: 30px;
                font-size: 24px;
            }

            .subtitle {
                margin-bottom: 15px;
            }

            .launch-date {
                margin-bottom: 40px;
            }

            .message {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .countdown-grid {
                max-width: 300px;
            }

            .countdown-box {
                padding: 20px 10px;
            }

            .countdown-number {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">💻</div>

        <h1>Coming Soon</h1>
        <p class="subtitle">Under Development</p>
        <p class="launch-date">Launching December 15, 2025</p>

        <div class="countdown-grid">
            <div class="countdown-box">
                <div class="countdown-number" id="days">00</div>
                <div class="countdown-label">Days</div>
            </div>
            <div class="countdown-box">
                <div class="countdown-number" id="hours">00</div>
                <div class="countdown-label">Hours</div>
            </div>
            <div class="countdown-box">
                <div class="countdown-number" id="minutes">00</div>
                <div class="countdown-label">Minutes</div>
            </div>
            <div class="countdown-box">
                <div class="countdown-number" id="seconds">00</div>
                <div class="countdown-label">Seconds</div>
            </div>
        </div>

        <p class="message">
            Building something special. Stay tuned.
        </p>
    </div>

    <script>
        const targetDate = new Date('2025-12-15T00:00:00');

        function updateCountdown() {
            const now = new Date().getTime();
            const target = targetDate.getTime();
            const difference = target - now;

            if (difference > 0) {
                const days = Math.floor(difference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((difference % (1000 * 60)) / 1000);

                document.getElementById('days').textContent = String(days).padStart(2, '0');
                document.getElementById('hours').textContent = String(hours).padStart(2, '0');
                document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
                document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
            } else {
                document.getElementById('days').textContent = '00';
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';
            }
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
</body>
</html>