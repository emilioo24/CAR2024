<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta Regresiva</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .countdown-container {
            text-align: center;
        }
        .countdown {
            font-size: 3em;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="countdown-container">
        <div id="countdown" class="countdown"></div>
        <img id="image" src="ruta_de_tu_imagen.jpg" alt="Imagen después de la cuenta regresiva" class="hidden">
    </div>

    <script>
        // Establecer la fecha hasta la cual vamos a contar
        var countDownDate = new Date("Oct 15, 2024 00:00:00").getTime();

        // Actualizar la cuenta regresiva cada segundo
        var countdownFunction = setInterval(function() {

            // Obtener la fecha y hora actual
            var now = new Date().getTime();

            // Calcular la diferencia entre ahora y la fecha de destino
            var distance = countDownDate - now;

            // Calcular el tiempo para los días, horas, minutos y segundos
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Mostrar la cuenta regresiva en el elemento con id="countdown"
            document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

            // Si la cuenta regresiva termina, mostrar la imagen
            if (distance < 0) {
                clearInterval(countdownFunction);
                document.getElementById("countdown").style.display = "none";
                document.getElementById("image").classList.remove("hidden");
            }
        }, 1000);
    </script>
</body>
</html>