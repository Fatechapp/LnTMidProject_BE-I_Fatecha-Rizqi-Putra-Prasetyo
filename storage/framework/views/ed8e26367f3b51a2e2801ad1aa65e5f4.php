<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo e(asset('style/welcome.css')); ?>">

    <!--KUTE.js-->
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.2.4/dist/kute.min.js"></script>

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <section class="content-form">
            <h1>PT ChipiChapa</h1>
            <a href="/dashboard" class="btn">dashboard</a>
        </section>
        <svg id="water-waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <!-- <path id="wave3" fill="#6276DC" fill-opacity="1" d="M0,320L40,282.7C80,245,160,171,240,144C320,117,400,139,480,149.3C560,160,640,160,720,176C800,192,880,224,960,197.3C1040,171,1120,85,1200,53.3C1280,21,1360,43,1400,53.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>             -->
            <path id="wave1" fill="#6276DC" fill-opacity="1" d="M0,224L34.3,234.7C68.6,245,137,267,206,229.3C274.3,192,343,96,411,58.7C480,21,549,43,617,90.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,218.7C1097.1,192,1166,160,1234,160C1302.9,160,1371,192,1406,208L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
            <path id="wave2" fill="#6276DC" fill-opacity="1" d="M0,288L48,293.3C96,299,192,309,288,304C384,299,480,277,576,256C672,235,768,213,864,202.7C960,192,1056,192,1152,202.7C1248,213,1344,235,1392,245.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
    <script>
        var tween = KUTE.fromTo('#wave1', {path: '#wave1' }, { path: '#wave2' }, {repeat: 999, duration: 10000, yoyo:true}).start();
    </script>
</body>

</html><?php /**PATH E:\Fate\UKM\BNCC\Backend BNCC\LnT Mid Project\LnTMidProject_BE-I_Fatecha Rizqi Putra Prasetyo\LnTMidProject\resources\views/welcome.blade.php ENDPATH**/ ?>