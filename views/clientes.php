<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clientes</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Clientes</h1>
        <h2>Listar Clientes</h2>

        <button id="listarClientes" class="btn btn-primary">Listar Clientes</button>

        <div id="clientesLista" class="mt-3"></div>

        <h2>Incluir Cliente</h2>

        <form id="formIncluir">

            <input type="text" id="codigo" placeholder="Código" required>
            <input type="text" id="loja" placeholder="Nome da Loja" required>
            <input type="text" id="cnpj" placeholder="CNPJ (ex: 12.345.678/0001-90)" required>
            <input type="text" id="nome" placeholder="Nome do Cliente" required>
            <input type="text" id="tipo" placeholder="Tipo (F para Física, J para Jurídica)" required>
            <input type="text" id="pessoa" placeholder="Pessoa (F para Física, J para Jurídica)" required>
            <input type="text" id="endereco" placeholder="Endereço" required>
            <input type="text" id="cidade" placeholder="Cidade" required>
            <input type="text" id="bairro" placeholder="Bairro" required>
            <input type="text" id="estado" placeholder="Estado (ex: SP)" required>
            <input type="text" id="cep" placeholder="CEP (ex: 18205-320)" required>
            <select id="status" required>
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
            <button type="submit" class="btn btn-success">Incluir Cliente</button>

        </form>


        </form>

        <div id="resultado" class="mt-3"></div>

    </div>

    <script>

        $('#listarClientes').on('click', async function () {
            try {
                const response = await fetch("http://localhost:8091/restapi/clientes/listar", {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "Basic YWRtaW46IA=="
                    }
                });

                if (!response.ok) {
                    throw new Error('Resposta da rede não foi OK');
                }

                const data = await response.json();
                var aData = data.items;

                $('#clientesLista').html(''); // Limpa a lista antes de preencher

                console.log(aData);

                $('#clientesLista').html(''); // Limpa a lista antes de preencher

                if (Array.isArray(aData) && aData.length > 0) {
                    for (var i = 0; i < aData.length; i++) {
                        var cliente = aData[i];
                        $('#clientesLista').append("<div>" +
                            "CNPJ: " + cliente.cnpj + "<br>" +
                            "Código: " + cliente.codigo + "<br>" +
                            "Loja: " + cliente.loja + "<br>" +
                            "Razão Social: " + cliente.razao + "<br>" +
                            "Tipo: " + cliente.tipo + 
                            "</div><hr>"); // Linha horizontal entre os clientes
                    }
                } else {
                    $('#clientesLista').append('<div>Nenhum cliente encontrado.</div>');
                }


                
            } catch (error) {
                alert('Erro ao listar clientes: ' + error.message);
            }
        });

        $('#formIncluir').on('submit', async function (event) {
            event.preventDefault(); // Previne o comportamento padrão do formulário

            const codigo = $('#codigo').val();
            const cnpj = $('#cnpj').val();
            const nome = $('#nome').val();
            const tipo = $('#tipo').val();
            const loja = $('#loja').val();
            const pessoa = $('#pessoa').val(); // Novo campo
            const endereco = $('#endereco').val(); // Novo campo
            const cidade = $('#cidade').val(); // Novo campo
            const bairro = $('#bairro').val(); // Novo campo
            const estado = $('#estado').val(); // Novo campo
            const cep = $('#cep').val(); // Novo campo
            const status = $('#status').val(); // Novo campo

            try {
                const response = await fetch("http://localhost:8091/restapi/clientes/incluir", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "Basic YWRtaW46IA=="
                    },
                    body: JSON.stringify({ 
                        codigo, 
                        cnpj, 
                        nome, 
                        tipo, 
                        loja, 
                        pessoa, 
                        endereco, 
                        cidade, 
                        bairro, 
                        estado, 
                        cep, 
                        status 
                    }) // Envia os dados do novo cliente
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const result = await response.json();
                $('#resultado').html("<div>Resultado: <span class='text-primary'>" + result.resultado + "</span></div>");
                $('#formIncluir')[0].reset(); // Limpa o formulário
            } catch (error) {
                alert('Erro ao incluir cliente: ' + error.message);
            }
        });


    </script>
</body>
</html>
