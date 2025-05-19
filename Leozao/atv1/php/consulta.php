<!DOCTYPE html>
<html lang="en">
<head>
    <title>formulario</title>
    <style>
        /* CSS específico para o formulário */
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(253, 253, 253);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .formulario {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            /* Adicionado sombreamento mais destacado */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .formulario p {
            font-size: 18px;
            margin-bottom: 20px;
            color: rgb(121, 0, 0);
        }

        .field {
            margin-bottom: 20px;
        }

        .field label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .field input[type="text"], .field input[type="radio"] {
            padding: 10px;
            border: 1px solid rgb(4, 121, 0);
            border-radius: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        .field input[type="radio"] {
            width: auto;
            margin-right: 10px;
        }

        .field input:focus {
            border-color: #004d40;
            outline: none;
        }

        button {
            background-color: rgb(173, 197, 68);
            color: white;
            border: none;
            padding: 12px 24px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 8px;
            transition: background-color 0.3s;
            width: 100%;
        }

        button:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>
   <h2> PHPcom mysql_efetuando consulta a um bd </h2>
   <form name="Cadastro" action="forms.php" method="post">
    <input type="submit" name="consulta_completa" value="Consultar">
   </form>
</body>
</html>