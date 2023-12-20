<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottie Animation</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }

        dotlottie-player {
            width: 300px;
            height: 300px;
        }

        .verification-message {
            position: absolute;
            font-size: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 10px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s, transform 0.5s;
            text-align: center;
            bottom: 10%;
            width: 200px;
        }

        body.verified .verification-message {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <dotlottie-player src="https://lottie.host/273b42e7-6b66-4db7-bea5-cd6f4ee1138c/ACtKufqi9w.json" background="transparent" speed="1" style="width: 60%; height: 50%" direction="1" mode="normal" loop autoplay></dotlottie-player>
    
    <div class="verification-message">Anda sudah terverifikasi</div>

    <script>
        setTimeout(function() {
            document.body.classList.add('verified');
        }); 
    </script>
</body>
</html>
