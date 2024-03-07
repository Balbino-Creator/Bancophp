<!DOCTYPE html>
<html>
<head>
    <title>Formulario Bancario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Por favor, introduzca sus datos bancarios</h2>

    <form action="#" method="post">
        <label for="cuenta">Número de cuenta:</label>
        <input type="text" id="cuenta" name="cuenta">

        <label for="tarjeta">Número de tarjeta bancaria:</label>
        <input type="text" id="tarjeta" name="tarjeta">

        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni">

        <input type="submit" value="Enviar">
    </form>
</div>

</body>
</html>
