<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwii";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM alunoconcluinte ORDER BY nome ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-hover'>";
    echo "<thead><tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Nota 4</th>
            <th>Média</th>
            <th>Situação</th>
          </tr></thead>";
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        $media = ($row["nota1"] + $row["nota2"] + $row["nota3"] + $row["nota4"]) / 4;
        $situacao = ($media >= 7) ? "<span class='aprovado'>Aprovado</span>" : "<span class='reprovado'>Reprovado</span>";

        echo "<tr>";
        echo "<td>" . $row["idalunoconcluinte"] . "</td>";
        echo "<td class='aluno-nome'>" . $row["nome"] . "</td>";
        echo "<td>" . $row["nota1"] . "</td>";
        echo "<td>" . $row["nota2"] . "</td>";
        echo "<td>" . $row["nota3"] . "</td>";
        echo "<td>" . $row["nota4"] . "</td>";
        echo "<td>" . number_format($media, 2) . "</td>";
        echo "<td>" . $situacao . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "Nenhum aluno encontrado!";
}

$conn->close();
?>