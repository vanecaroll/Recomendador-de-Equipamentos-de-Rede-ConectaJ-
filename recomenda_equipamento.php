<title> ConectaJá </title>

<h1>Recomendador de Equipamentos ConectaJá</h1>

<form action="recomenda_equipamento.php" method="POST">
    <label for="ambiente">Tamanho do Ambiente:</label>
    <select name="ambiente" id="ambiente" required>
        <option value="">-- Selecione --</option>
        <option value="residencial">Casa / Apartamento</option>
        <option value="pequeno_escritorio">Pequeno Escritório (Até 15 funcionarios)</option>
        <option value="data_center">Data Center Corporativo</option>
    </select>
    <br><br>
    <button type="submit">Ver Recomendação</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $equipamento = htmlspecialchars($_POST["ambiente"]); // Sanitização para evitar XSS
    switch ($equipamento) {
        case 'residencial':
            echo "Equipamento Indicado: Roteador Wireless (SOHO). <br><br> Para ambientes residenciais, um roteador Wi-Fi padrão é suficiente para conectar smartphones, TVs e notebooks.";
            break;
        case 'pequeno_escritorio':
            echo "Equipamento Indicado: Switch Gerenciável de 24 Portas. <br><br> Para um escritório, recomendamos o uso de um Switch para conectar os computadores via cabo, garantindo estabilidade e segurança na rede local (LAN).";
            break;
        case 'data_center':
            echo "Equipamento Indicado: Roteador de Borda e Switch Layer 3. <br><br> Para Data Centers, é necessária uma infraestrutura robusta com equipamentos de alta capacidade para lidar com grande tráfego de dados e roteamento avançado.";
            break;
        default:
            echo "Erro: Ambiente não reconhecido em nosso banco de dados."; // Nem precisaria, pois as únicas opções selecionáveis já estão definidas nos cases
}
}
?>