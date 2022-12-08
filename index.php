<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Life Savers Club | Home </title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="Gallery/Life_Savers_Club_1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
        <div class="container">
            <img src="Gallery/Life_Savers_Club_1.png" class="logo" alt="">

                <div class="details">
                    <p> Website is currently under construction. </p>
                        <h1> We are <span> launching</span> soon. </h1>
                            <button type="button"> <img src="Gallery/Blood_Group.png" alt="">
                                <span id="question"> &nbsp do you know your Blood group <i class="bi bi-question-circle-fill"> &nbsp </i> </span>
                            </button>

                    <div class="timer">
                        <div>
                            <p id="days"> 00 </p>
                            <span> Days </span>
                        </div>

<!--                        <span id="middle_1"> : </span>-->

                        <div>
                            <p id="hours"> 00 </p>
                            <span> Hours </span>
                        </div>

                        <span id="middle"> : </span>

                        <div>
                            <p id="minutes"> 00 </p>
                            <span> Minutes </span>
                        </div>

                        <span id="middle"> : </span>

                        <div>
                            <p id="seconds"> 00 </p>
                            <span id="type"> Seconds </span>
                        </div>

                    </div>
                </div>
            <img src="Gallery/launch.png" class="lift_off" alt="">
        </div>


        <script>
                var countDownDate = new Date("April 30, 2023 00:00:00:") .getTime();
                var x = setInterval(function() {
                    var now = new Date().getTime();
                    var distance = countDownDate - now;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document .getElementById("days").innerHTML = days;
                    document .getElementById("hours").innerHTML = hours;
                    document .getElementById("minutes").innerHTML = minutes;
                    document .getElementById("seconds").innerHTML = seconds;

                    //what to display when the count-down date is reached

                    if (distance < 0) {
                        clearInterval(x);
                        document .getElementById("days").innerHTML = "00";
                        document .getElementById("hours").innerHTML = "00";
                        document .getElementById("minutes").innerHTML = "00";
                        document .getElementById("seconds").innerHTML = "00";
                    }
                },1000);
        </script>

</body>
</html>
