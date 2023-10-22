<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário de compra</title>
    <style>
        
body {
    font-family: Arial, sans-serif;
    background-color: #0D1821;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 500px;
    background-color: #F0F4EF;
    margin: 0 auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    margin-bottom: 80px; 
    margin-top: 30px;
}
.inpt{
    width: 90%;
}
.container h2 {
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group select,
.form-group textarea {
    width: 95%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group select {
    height: 40px;
}

.form-group textarea {
    height: 100px;
}

.form-group input[type="submit"] {
    background-color: #ff0000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.form-group input[type="submit"]:hover {
    background-color: #b30000;
}

.botao{
    display: grid;
    padding-top: 30px;
    justify-content: center;
    margin-bottom: -2px;
}
.bnt{
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background-color: #02b14b;
    border: none;
    cursor: pointer;
}
.bnt:hover{
    background-color: #009940;
}
    </style>
</head>
<body>
    
    <div class="container">
        <h2>Formulario de Compra</h2>
        <form action="formulario.php" method="post">
            <fieldset>
                <legend>Informações Pessoais</legend>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="inpt" id="nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name= "email" required>
                </div>
                <div class="form-group">
                    <label for="cpf">cpf:</label>
                    <input type="text" name="cpf" \
			pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
			title="Digite um CPF no formato: xxx.xxx.xxx-xx">
                </div>
                <div class="form-group">
                    <label for="numcel">Celular:</label>
                    <input type="tel" id="numcel" name="celular" required>
                </div>
            </fieldset>

            <fieldset>
                <legend>Informações de pagamento</legend>
                <div class="form-group">
                    <label for="tenis">Escolha o Produto:</label>
                    <select id="tenis" placeholder="Escolha um Tenis" name="tenis"  required>

                        <option value="" disabled selected>Selecione um Tenis</option>

                        <optgroup label="Tenis Maculino" ></optgroup>
                        <option value="645.90">Tênis Nike Air Max Branco</option>
                        <option value="525.49">Tênis Adidas Casual</option>

                        <optgroup label="Tenis Feminino" ></optgroup>
                        <option value="597.99">Tênis Puma Feminino</option>
                        <option value="480.99">Tênis Nike Feminino</option>

                        <optgroup label="Tenis Infantil" ></optgroup>
                        <option value="330.99">Tênis Infantil Adidas</option>
                        <option value="380.90">Tênis Infantil Puma</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="qntProduto">Quantidade do produto:</label>
                    <input type="number" id="qntProduto" name="qntProduto" value="1" min="1" max="10">
                </div>

                <div class="form-group">
                    <label for="qntProduto">Tamanho do sapato:</label>
                    <select name="tamanho" id="tamanho">
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="resultado">Total da Compra:</label>
                    <output id="resultado" name="total">Aqui será exibido o resultado.</output>
                </div>
                
                <div class="form-group">
                    <label for="observacoes">Observações:</label>
                    <textarea id="observacoes" name="observacoes" required></textarea>
                </div>
           
            </fieldset>

            <fieldset>
                <legend>Descoberta do Site (Opcional)</legend>
                <div class="form-group">
                    <label for="descoberta">Como você descobriu o site?</label>
                    <input list="descoberta" name="descoberta">
                    <datalist id="descoberta">
                        <option value="Por um amigo">
                        <option value="Em uma busca na internet">
                        <option value="Nas redes sociais">
                        <option value="Outro">
                    </datalist>
                </div>
            </fieldset>

            <div class="form-group botao">
                <button type="submit"class="bnt" name="enviar">Registrar Pedido</button>
            </div>
        </form>
        <?php 
        if(isset($_POST['enviar'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];
            $celular = $_POST['celular'];
            $tenis = $_POST['tenis'];
            $qnt = $_POST['qntProduto'];
            $tamanho = $_POST['tamanho'];
            $obs = $_POST['observacoes'];
            $nomeTenis = "";

            switch ($tenis) {
                case '645.90':
                    $nomeTenis = "Tênis Nike Air Max Branco";
                    break;
                case '525.49':
                    $nomeTenis = "Tênis Adidas Casual";
                    break;
                case "597.99":
                    $nomeTenis = "Tênis Puma Feminino";
                    break;
                case "480.99":
                    $nomeTenis = "Tênis Nike Feminino";
                    break;
                case "330.99":
                    $nomeTenis = "Tênis Infantil Adidas";
                    break;
                case "380.90":
                    $nomeTenis = "Tênis Infantil Puma";
                    break;
                default:
                    break;
            }

            echo "<h2>Olá, $nome!</h2> <br> <h4>Sua compra de $qnt $nomeTenis de tamanho $tamanho foi registrada com sucesso!</h4>";
            echo "<p>Seu email $email será utilizado para enviar atualizações da entrega!</p>";
            echo "<p>Seu cpf $cpf está seguro no nosso banco de dados!</p>";
            echo "<p>Iremos enviar notificações para seu celular: $celular com atualizações da compra</p>";
            echo "<p>Sua observação ($obs) será considerada!</p>";
        }
        ?>
    </div>


    <script>
        let tenis = document.querySelector("#tenis");
        let qntProduto = document.querySelector("#qntProduto");
        let resultado = document.querySelector("#resultado");
        // Adicione um evento de mudança ao campo #tenis
        tenis.addEventListener("change", atualizarResultado);
        
        // Adicione um evento de mudança ao campo #qntProduto
        qntProduto.addEventListener("change", atualizarResultado);
        
            function atualizarResultado() {
                let valorTenis = parseFloat(tenis.value);
                let quantidade = parseInt(qntProduto.value);
        
                if (!isNaN(valorTenis) && !isNaN(quantidade)) {
                    let total = valorTenis * quantidade;
                    resultado.textContent = `Total: R$ ${total.toFixed(2)}`;
                } else {
                    resultado.textContent = "Aqui será exibido o resultado.";
                }
            }
        
    </script>
</body>

</html>