<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clientes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
    .bg-glass{

        background: rgba(255, 255, 255, 0.34);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(6.5px);
        -webkit-backdrop-filter: blur(6.5px);
        border: 1px solid rgba(255, 255, 255, 0.3);

    }

    body{
        background: #EEEEEE;
    }
    
</style>
<body>
    
    <div class="d-flex bg-dark text-white mb-5 justify-content-center">
        <h1>Gerenciamento de Clientes - Protheus</h1>
    </div>
    
    <div class="container">

        <div class="d-flex align-content-center justify-content-center">
            <button id="listarClientes" class="btn btn-primary mb-3">Listar Clientes</button>
        </div>
        

        <div id="clientesLista" class="mt-3 mb-3"></div>

        <div class="shadow card bg-glass p-3 rounded">
            <h3>Cadastrar Cliente</h3>

            <form id="formIncluir">
            <div class="row">
                <div class="col-sm-3">
                    <label>Código:</label>
                    <input type="text" id="codigo" placeholder="ex: (1, 2, 3)" class="w-100" required>
                </div>
                <div class="col-sm-3">
                    <label>Loja:</label>
                    <input type="text" id="loja" placeholder="ex: (Loja Teste)" class="w-100" required>
                </div>
                <div class="col-sm-3">
                    <label>CNPJ:</label>
                    <input type="text" id="cnpj" placeholder="ex: (12.345.678/0001-90)" class="w-100" required>
                </div>
                <div class="col-sm-3">
                    <label>Nome:</label>
                    <input type="text" id="nome" placeholder="ex: (Nome do Cliente)" class="w-100" required>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <label>Tipo:</label>
                    <input type="text" id="tipo" placeholder="ex: (F , J)" class="w-100" required>
                </div>
                <div class="col-sm-3">
                    <label>Pessoa:</label>
                    <input type="text" id="pessoa" placeholder="ex: (F , J)" class="w-100" required>
                </div>
                <div class="col-sm-3">
                    <label>Endereço:</label>
                    <input type="text" id="endereco" placeholder="ex: (Rua Exemplo, 123)" class="w-100" required>
                </div>
                <div class="col-sm-3">
                    <label>Cidade:</label>
                    <input type="text" id="cidade" placeholder="ex: (TESTE)" class="w-100" required>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <label>Bairro:</label>
                    <input type="text" id="bairro" placeholder="ex: (Bairro das Palmeiras)" class="w-100" required>
                </div>
                <div class="col-sm-3">
                    <label>Estado:</label>
                    <input type="text" id="estado" placeholder="ex: (SP)" class="w-100" required>
                </div>
                <div class="col-sm-3">
                    <label>CEP:</label>
                    <input type="text" id="cep" placeholder="ex: (12345-678)" class="w-100" required>
                </div>
                <div class="col-sm-3">
                    <label>Status:</label>
                    <select id="status" class="w-100" required>
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>
            </div>

                
                <div class="d-flex mt-3 justify-content-center">
                    <button type="submit" class="btn btn-success w-50">Salvar</button>
                </div>
                
            </form>


            </form>

            <div id="resultado" class="mt-3"></div>

        </div>

        

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

                $('#clientesLista').html('');

                console.log(aData);

                $('#clientesLista').html('');

                if (Array.isArray(aData) && aData.length > 0) {

                    var listaCliente = "Erro: Lista não formada!"

                    for (var i = 0; i < aData.length; i++) {
                        var cliente = aData[i];
                        listaCliente = "<div class='row border m-1 py-3 px-0'><div class='col-sm-6'><div class='d-flex'>";
                        listaCliente +=    "CNPJ: " + cliente.cnpj + "</div>";
                        listaCliente +=    "<div class='d-flex'>Código: " + cliente.codigo + "</div>";
                        listaCliente +=    "<div class='d-flex'>Loja: " + cliente.loja + "</div>";
                        listaCliente +=    "<div class='d-flex'>Razão Social: " + cliente.razao + "</div>";
                        listaCliente +=    "<div class='d-flex'>Tipo: " + cliente.tipo;
                        listaCliente +=    "</div>";
                        listaCliente +=    "</div>";
                        listaCliente +=    "<div class='col-sm-6 align-content-center text-right'>";
                        listaCliente +=    "<div class='d-inline-flex m-1'><button class='btn btn-secondary' type='button' id='editar' name='editar' val='" + cliente.codigo + "'>Editar</button></div>";
                        listaCliente +=    "<div class='d-inline-flex m-1'><button class='btn btn-danger' type='button' id='excluir' name='excluir' val='" + cliente.codigo + "'>Excluir</button></div>";
                        listaCliente +=    "</div></div>";
                    }

                    $('#clientesLista').html(listaCliente);

                } else {

                    $('#clientesLista').append('<div>Nenhum cliente encontrado.</div>');

                }


                
            } catch (error) {
                alert('Erro ao listar clientes: ' + error.message);
            }
        });

        $('#formIncluir').on('submit', async function (event) {
            event.preventDefault();

            const codigo = $('#codigo').val();
            const cnpj = $('#cnpj').val();
            const nome = $('#nome').val();
            const tipo = $('#tipo').val();
            const loja = $('#loja').val();
            const pessoa = $('#pessoa').val();
            const endereco = $('#endereco').val();
            const cidade = $('#cidade').val();
            const bairro = $('#bairro').val();
            const estado = $('#estado').val();
            const cep = $('#cep').val();
            const status = $('#status').val();

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
                    })
                });

                if (!response.ok) {
                    throw new Error('Resposta da Rede não OK');
                }

                const result = await response.json();
                $('#resultado').html("<div>Resultado: <span class='text-primary'>" + result.resultado + "</span></div>");
                $('#formIncluir')[0].reset();
            } catch (error) {
                alert('Erro ao incluir cliente: ' + error.message);
            }
        });


    </script>
</body>
</html>
