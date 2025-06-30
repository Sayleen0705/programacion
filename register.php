<?php

session_start();

if (isset($_SESSION['correo'])) {
    header("location: vista/bienvenida.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/materialdesignicons.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <style>
        

        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: -webkit-linear-gradient(90deg, #ee6ef5, #57b9ff);
            background: linear-gradient(90deg, #ee6ef5, #57b9ff);
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Lato', sans-serif;
        }

        .contenedor-formulario {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
        }

        form {
            background: rgba(187, 135, 247, 0.66) !important;
            box-shadow: 0 8px 32px 0 rgba(1, 3, 14, 0.54);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border-radius: 18px !important;
            border: 1px solid rgb(93, 10, 247) !important;
            padding: 32px 30px 30px 30px;
            max-width: 450px !important;
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 0px;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            color: rgb(3, 8, 12);
            margin-bottom: 35px;
        }

        .login-link {
            margin-top: 15px;
            /* Espacio adicional sobre el enlace */
            margin-bottom: 10px;
            /* Espacio adicional bajo el enlace */
        }

        input {
            padding: 12px 10px;
            width: 93%;
            color: black;
            border-radius: 8px;
            border: 1px solidrgb(26, 11, 11);
            font-size: 1rem;
            background: rgb(250, 241, 241);
            outline: none;
            margin-bottom: 1px;
            transition: border 0.2s;
        }

        input:focus {
            border: 1.5px solid #0077ff;
        }

        button[type="submit"] {
            background: linear-gradient(90deg, rgb(238, 157, 214) 0%, rgb(114, 192, 245) 100%);
            color: black;
            border: none;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 1.08rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            box-shadow: 0 2px 8px rgba(0, 119, 255, 0.1);
            width: 93%;
            /* Ajustado para mantener proporción */
            margin: 10px auto 25px auto;
            /* Centrado */
        }

        button[type="submit"]:hover {
            background: linear-gradient(90deg, #005be1 0%, #0096c7 100%);
            transform: translateY(-2px) scale(1.03);
        }

        p {
            text-align: center;
            font-size: 1rem;
            color: black;
            margin: 0;
        }

        a {
            color: rgb(3, 11, 20);
            cursor: pointer;
            text-decoration: none;
            transition: color 0.2s;
            display: inline-block;
            padding: 5px 0;
            /* Espacio interno para el enlace */
        }

        a:hover {
            color: #0077ff;
        }
    </style>


</head>

<body>
    <main>
        <article>
            <section>
                <form action="controlador/registro.php" method="POST" id="register">
                    <h1>Registrate</h1>

                    <input type="text" name="nombres" placeholder="Nombres"><br />
                    <input type="text" name="apellidos" placeholder="Apellidos"><br />
                    <input type="number" name="cedula" placeholder="Cédula"><br />
                    <input type="number" name="tlfono" placeholder="N° de Telefono"><br />
                    <input type="email" name="correo" placeholder="Correo electrónico"><br />
                    <input type="password" name="contrasena" placeholder="Contraseña"><br />
                    <center>
                        <button type="submit">Ingresar</button>
                    </center>

                    <p>¿Ya tienes cuenta?</p>
                    <p>
                        <a href="index.php">Iniciar Sesión</a>
                    </p>
                </form>
            </section>
        </article>
    </main>

</body>

</html>