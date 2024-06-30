<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Currículo Gerado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Currículo Gerado</h2>
        <div class="curriculo-item">
            <label>Nome:</label>
            <p><?php echo $_POST['nome']; ?></p>
        </div>
        <div class="curriculo-item">
            <label>Email:</label>
            <p><?php echo $_POST['email']; ?></p>
        </div>
        <div class="curriculo-item">
            <label>Telefone:</label>
            <p><?php echo $_POST['telefone']; ?></p>
        </div>
        <div class="curriculo-item">
            <label>Endereço:</label>
            <p><?php echo $_POST['endereco']; ?></p>
        </div>
        <div class="curriculo-item">
            <label>Formação Acadêmica:</label>
            <?php 
            if(isset($_POST['formacao'])) {
                echo '<ul>';
                foreach ($_POST['formacao'] as $key => $value) {
                    echo '<li><b>' . htmlspecialchars($value) . '</b>, ' . htmlspecialchars($_POST['instituicao'][$key]) . ', ' . htmlspecialchars($_POST['ano'][$key]) . '</li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
        <div class="curriculo-item">
            <label>Experiência Profissional:</label>
            <?php 
            if(isset($_POST['cargo'])) {
                echo '<ul>';
                foreach ($_POST['cargo'] as $key => $value) {
                    echo '<li><b>' . htmlspecialchars($value) . '</b> em ' . htmlspecialchars($_POST['empresa'][$key]) . ', ' . htmlspecialchars($_POST['periodo'][$key]) . '</li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
        <button type="button" onclick="window.print()">Baixar Currículo</button> <br> <br>
    </div>
</body>
</html>