<?php 
echo "<table border=1>";
// Establish database connection
$conn = mysqli_connect('localhost', 'Leozao', '1234', 'Leozao');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute query
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conn, $sql) or die("Erro na consulta ao banco de dados: " . mysqli_error($conn));

// Display results
while ($registro = mysqli_fetch_array($resultado)) {
    $nome = $registro['nome'];
    $sobrenome = $registro['sobrenome']; // Corrected key to match database column
    $sexo = $registro['sexo']; // Corrected key to match database column

    echo "<tr><br>";
    echo "<td>Nome: $nome </td>";
    echo "<td>Sobrenome: $sobrenome </td>";
    echo "<td>Sexo: $sexo</td><br>";
    echo "</tr>";
}

// Close connection
mysqli_close($conn);

echo "</table>";
?>