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

        <div class="shadow card bg-glass p-3 rounded mb-5">
            <h3 class="text-center">Cadastrar Cliente</h3>

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
                        <label>Nome Reduzido:</label>
                        <input type="text" id="nreduz" placeholder="ex: (Nome curto)" class="w-100" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Tipo:</label>
                        <select id="tipo" class="w-100" required>
                            <option value="">Selecione</option>
                            <option value="F">F</option>
                            <option value="L">L</option>
                            <option value="R">R</option>
                            <option value="S">S</option>
                            <option value="X">X</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Pessoa:</label>
                        <select id="pessoa" class="w-100" required>
                            <option value="">Selecione</option>
                            <option value="J">J</option>
                            <option value="F">F</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Endereço:</label>
                        <input type="text" id="endereco" placeholder="ex: (Rua Exemplo, 123)" class="w-100" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label>Cidade:</label>
                        <input type="text" id="cidade" placeholder="ex: (TESTE)" class="w-100" required>
                    </div>
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
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label>Código Município:</label>
                        <input type="text" id="codmun" placeholder="ex: (22307)" class="w-100" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Status:</label>
                        <select id="status" class="w-100" required>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>DDD:</label>
                        <input type="text" id="ddd" placeholder="ex: (11)" class="w-100">
                    </div>
                    <div class="col-sm-3">
                        <label>Telefone:</label>
                        <input type="text" id="tel" placeholder="ex: (1234-5678)" class="w-100">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label>Email:</label>
                        <input type="email" id="email" placeholder="ex: (cliente@exemplo.com)" class="w-100">
                    </div>
                </div>

                <div class="d-flex mt-3 justify-content-center">
                    <button type="submit" class="btn btn-success w-50">Salvar</button>
                </div>
            </form>


            <div id="resultado" class="mt-3"></div>

        </div>

        <hr class="mb-5">

        <h3 class="text-center mb-5">Busca de Clientes:</h3>

        <div class="row align-content-center mb-5">
            <div class="col-sm-6 text-center">
                <div class="input-group">
                    <span class="input-group-text border-0">ID:</span>
                    <input type="text" name="inputBuscaClienteCodigo" id="inputBuscaClienteCodigo" class="w-25">

                    <span class="input-group-text border-0">Loja:</span>
                    <input type="text" name="inputBuscaClienteLoja" id="inputBuscaClienteLoja" class="w-25">

                    <button type="button" class="btn btn-primary" name="btnBuscaCliente" id="btnBuscaCliente">Buscar</button>
                </div>
            </div>
            
            <div class="col-sm-6 text-right">
                <button id="listarClientes" class="btn btn-primary">Listar Clientes</button>
                <button id="limparClientes" class="btn btn-danger d-none">Limpar</button>
            </div>

            
        </div>
        

        <div id="clientesLista" class="mt-3 mb-3"></div>

    </div>

    <script>
        // var aData = null;

        $('#limparClientes').on ('click', function () {

            $('#clientesLista').fadeOut(500, function(){
                $('#clientesLista').html('');
            });

            setTimeout(() => {
                $('#limparClientes').addClass('d-none')
            }, 500);

        });

        //GET
        $('#listarClientes').on('click', async function () {

            $('#clientesLista').css('display', '');

            $('#limparClientes').removeClass('d-none');


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

                if (Array.isArray(aData) && aData.length > 0) {
                    // Loop para cada cliente
                    for (var i = 0; i < aData.length; i++) {
                        var cliente = aData[i];

                        $('#clientesLista').append(


                            "<div class='row border m-1 py-3 px-0' id='cliente_" + cliente.codigo + "_" + cliente.loja + "'>" +
                                "<div class='col-sm-12'>" +
                                    "<form id='formCliente_" + cliente.codigo + "_" + cliente.loja + "'>" +
                                        "<div class='row'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Código:</label>" +
                                                "<input type='text' value='" + cliente.codigo + "' id='codigo_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Loja:</label>" +
                                                "<input type='text' value='" + cliente.loja + "' id='loja_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>CNPJ:</label>" +
                                                "<input type='text' value='" + cliente.cnpj + "' id='cnpj_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Nome:</label>" +
                                                "<input type='text' value='" + cliente.nome + "' id='nome_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                        "</div>" +
                                        "<div class='row'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Nome Reduzido:</label>" +
                                                "<input type='text' value='" + cliente.nreduz + "' id='nreduz_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Tipo:</label>" +
                                                "<select id='tipo_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                    "<option value=''>Selecione</option>" +
                                                    "<option value='F'" + (cliente.tipo === 'F' ? " selected" : "") + ">F</option>" +
                                                    "<option value='L'" + (cliente.tipo === 'L' ? " selected" : "") + ">L</option>" +
                                                    "<option value='R'" + (cliente.tipo === 'R' ? " selected" : "") + ">R</option>" +
                                                    "<option value='S'" + (cliente.tipo === 'S' ? " selected" : "") + ">S</option>" +
                                                    "<option value='X'" + (cliente.tipo === 'X' ? " selected" : "") + ">X</option>" +
                                                "</select>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Pessoa:</label>" +
                                                "<select id='pessoa_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                    "<option value=''>Selecione</option>" +
                                                    "<option value='J'" + (cliente.pessoa === 'J' ? " selected" : "") + ">J</option>" +
                                                    "<option value='F'" + (cliente.pessoa === 'F' ? " selected" : "") + ">F</option>" +
                                                "</select>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Endereço:</label>" +
                                                "<input type='text' value='" + cliente.endereco + "' id='endereco_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                        "</div>" +
                                        "<div class='row'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Cidade:</label>" +
                                                "<input type='text' value='" + cliente.cidade + "' id='cidade_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Bairro:</label>" +
                                                "<input type='text' value='" + cliente.bairro + "' id='bairro_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Estado:</label>" +
                                                "<input type='text' value='" + cliente.estado + "' id='estado_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>CEP:</label>" +
                                                "<input type='text' value='" + cliente.cep + "' id='cep_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                        "</div>" +
                                        "<div class='row'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Código Município:</label>" +
                                                "<input type='text' value='" + cliente.codmun + "' id='codmun_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Status:</label>" +
                                                "<select id='status_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                    "<option value='1'" + (cliente.status === "1" ? " selected" : "") + ">Ativo</option>" +
                                                    "<option value='0'" + (cliente.status === "0" ? " selected" : "") + ">Inativo</option>" +
                                                "</select>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>DDD:</label>" +
                                                "<input type='text' value='" + cliente.ddd + "' id='ddd_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Telefone:</label>" +
                                                "<input type='text' value='" + cliente.tel + "' id='tel_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                        "</div>" +
                                        "<div class='row'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Email:</label>" +
                                                "<input type='email' value='" + cliente.email + "' id='email_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                        "</div>" +
                                        "<div class='d-flex mt-3 justify-content-center'>" +
                                            "<button type='button' class='btn btn-secondary m-1' onclick='editarCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'>Editar</button>" +
                                            "<button type='button' class='btn btn-danger m-1' onclick='excluirCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'>Excluir</button>" +
                                        "</div>" +
                                        "<div class='d-flex justify-content-center mt-3' id='resultado_" + cliente.codigo + "_" + cliente.loja + "'></div>" +
                                    "</form>" +
                                "</div>" +
                            "</div>"


                        );
                    }
                } else {
                    $('#clientesLista').append('<div>Nenhum cliente encontrado.</div>');
                }

            } catch (error) {
                alert('Erro ao listar clientes: ' + error.message);
            }
        });


        //GET por ID
        $('#btnBuscaCliente').on('click', async function () {

            $('#clientesLista').css('display', '');

            const codigo = $('#inputBuscaClienteCodigo').val();
            const loja = $('#inputBuscaClienteLoja').val();

            try {
                const response = await fetch(`http://localhost:8091/restapi/clientes/lista_cliente?codigo=` + codigo + `&loja=` + loja + ``, {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "Basic YWRtaW46IA=="
                    }
                });

                if (!response.ok) {
                    throw new Error('Erro ao buscar cliente');
                }

                var cliente = await response.json();
                cliente = cliente.items;

                $('#clientesLista').html('');

                console.log(cliente[0]);
                if (Array.isArray(cliente) && cliente.length > 0) {
                    cliente = cliente[0];

                    $('#clientesLista').append(

                        "<div class='row border m-1 py-3 px-0' id='cliente_" + cliente.codigo + "_" + cliente.loja + "'>" +
                            "<div class='col-sm-12'>" +
                                "<form id='formCliente_" + cliente.codigo + "_" + cliente.loja + "'>" +
                                    "<div class='row'>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Código:</label>" +
                                            "<input type='text' value='" + cliente.codigo + "' id='codigo_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Loja:</label>" +
                                            "<input type='text' value='" + cliente.loja + "' id='loja_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>CNPJ:</label>" +
                                            "<input type='text' value='" + cliente.cnpj + "' id='cnpj_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Nome:</label>" +
                                            "<input type='text' value='" + cliente.nome + "' id='nome_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                    "</div>" +
                                    "<div class='row'>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Nome Reduzido:</label>" +
                                            "<input type='text' value='" + cliente.nreduz + "' id='nreduz_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Tipo:</label>" +
                                            "<select id='tipo_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                "<option value=''>Selecione</option>" +
                                                "<option value='F'" + (cliente.tipo === 'F' ? " selected" : "") + ">F</option>" +
                                                "<option value='L'" + (cliente.tipo === 'L' ? " selected" : "") + ">L</option>" +
                                                "<option value='R'" + (cliente.tipo === 'R' ? " selected" : "") + ">R</option>" +
                                                "<option value='S'" + (cliente.tipo === 'S' ? " selected" : "") + ">S</option>" +
                                                "<option value='X'" + (cliente.tipo === 'X' ? " selected" : "") + ">X</option>" +
                                            "</select>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Pessoa:</label>" +
                                            "<select id='pessoa_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                "<option value=''>Selecione</option>" +
                                                "<option value='J'" + (cliente.pessoa === 'J' ? " selected" : "") + ">J</option>" +
                                                "<option value='F'" + (cliente.pessoa === 'F' ? " selected" : "") + ">F</option>" +
                                            "</select>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Endereço:</label>" +
                                            "<input type='text' value='" + cliente.endereco + "' id='endereco_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                    "</div>" +
                                    "<div class='row'>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Cidade:</label>" +
                                            "<input type='text' value='" + cliente.cidade + "' id='cidade_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Bairro:</label>" +
                                            "<input type='text' value='" + cliente.bairro + "' id='bairro_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Estado:</label>" +
                                            "<input type='text' value='" + cliente.estado + "' id='estado_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>CEP:</label>" +
                                            "<input type='text' value='" + cliente.cep + "' id='cep_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                    "</div>" +
                                    "<div class='row'>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Código Município:</label>" +
                                            "<input type='text' value='" + cliente.codmun + "' id='codmun_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Status:</label>" +
                                            "<select id='status_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                "<option value='1'" + (cliente.status === "1" ? " selected" : "") + ">Ativo</option>" +
                                                "<option value='0'" + (cliente.status === "0" ? " selected" : "") + ">Inativo</option>" +
                                            "</select>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>DDD:</label>" +
                                            "<input type='text' value='" + cliente.ddd + "' id='ddd_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Telefone:</label>" +
                                            "<input type='text' value='" + cliente.tel + "' id='tel_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                    "</div>" +
                                    "<div class='row'>" +
                                        "<div class='col-sm-3'>" +
                                            "<label>Email:</label>" +
                                            "<input type='email' value='" + cliente.email + "' id='email_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                        "</div>" +
                                    "</div>" +
                                    "<div class='d-flex mt-3 justify-content-center'>" +
                                        "<button type='button' class='btn btn-secondary m-1' onclick='editarCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'>Editar</button>" +
                                        "<button type='button' class='btn btn-danger m-1' onclick='excluirCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'>Excluir</button>" +
                                    "</div>" +
                                    "<div class='d-flex justify-content-center mt-3' id='resultado_" + cliente.codigo + "_" + cliente.loja + "'></div>" +
                                "</form>" +
                            "</div>" +
                        "</div>"


                            
                    );
                } else {
                    $('#clientesLista').append('<div class="alert alert-warning">Cliente não encontrado.</div>');
                }
            } catch (error) {
                $('#clientesLista').append('<div class="alert alert-danger">Erro ao buscar cliente: ' + error.message + '</div>');
            }
        });
  


        //POST
        $('#formIncluir').on('submit', async function (event) {
            event.preventDefault();

            const codigo = $('#codigo').val();
            const loja = $('#loja').val();
            const nome = $('#nome').val();
            const nreduz = $('#nreduz').val();
            const pessoa = $('#pessoa').val();
            const cnpj = $('#cnpj').val();
            const tipo = $('#tipo').val();
            const endereco = $('#endereco').val();
            const bairro = $('#bairro').val();
            const cidade = $('#cidade').val();
            const codmun = $('#codmun').val();
            const estado = $('#estado').val();
            const cep = $('#cep').val();
            const status = $('#status').val();
            const ddd = $('#ddd').val();
            const tel = $('#tel').val();
            const email = $('#email').val();

            
            // // aData = [{
            // //     "codigo": codigo,
            // //     "loja": loja,
            // //     "nome": nome,
            // //     "nreduz": nreduz,
            // //     "pessoa": pessoa,
            // //     "cnpj": cnpj,
            // //     "tipo": tipo,
            // //     "endereco": endereco,
            // //     "bairro": bairro,
            // //     "cidade": cidade,
            // //     "codmun": codmun,
            // //     "estado": estado,
            // //     "cep": cep,
            // //     "status": status,
            // //     "ddd": ddd,
            // //     "tel": tel,
            // //     "email": email
            // // }];
            
            // console.log(aData);

        

            //DESCOMENTAR
            try {
                const response = await fetch("http://localhost:8091/restapi/clientes/incluir", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "Basic YWRtaW46IA=="
                    },
                    body: JSON.stringify({
                        codigo,
                        loja,
                        nome,
                        nreduz,
                        pessoa,
                        cnpj,
                        tipo,
                        endereco,
                        bairro,
                        cidade,
                        codmun,
                        estado,
                        cep,
                        status,
                        ddd,
                        tel,
                        email
                    })
                });

                if (!response.ok) {
                    throw new Error('Erro na resposta da rede');
                }

                const result = await response.json();
                $('#resultado').html("<div>Resultado: <span class='text-primary'>" + result.resultado + "</span></div>");
                $('#formIncluir')[0].reset();

                setTimeout(() => {
                    $('#resultado').html('');
                }, 4000);

            } catch (error) {
                alert('Erro ao incluir cliente: ' + error.message);
            }
        });

        //PUT
        async function editarCliente(codigo, loja) {

            $('.habilitarCampos_' + codigo + '_' + loja).removeAttr('disabled');
            
            const nome = $('#nome_' + codigo + '_' + loja).val();
            const nreduz = $('#nreduz_' + codigo + '_' + loja).val();
            const pessoa = $('#pessoa_' + codigo + '_' + loja).val();
            const cnpj = $('#cnpj_' + codigo + '_' + loja).val();
            const tipo = $('#tipo_' + codigo + '_' + loja).val();
            const endereco = $('#endereco_' + codigo + '_' + loja).val();
            const bairro = $('#bairro_' + codigo + '_' + loja).val();
            const cidade = $('#cidade_' + codigo + '_' + loja).val();
            const codmun = $('#codmun_' + codigo + '_' + loja).val();
            const estado = $('#estado_' + codigo + '_' + loja).val();
            const cep = $('#cep_' + codigo + '_' + loja).val();
            const status = $('#status_' + codigo + '_' + loja).val();
            const ddd = $('#ddd_' + codigo + '_' + loja).val();
            const tel = $('#tel_' + codigo + '_' + loja).val();
            const email = $('#email_' + codigo + '_' + loja).val();


            try {
                const response = await fetch("http://localhost:8091/restapi/clientes/atualizar", {
                    method: "PUT",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "Basic YWRtaW46IA=="
                    },
                    body: JSON.stringify({
                        codigo,
                        loja,
                        nome,
                        nreduz,
                        pessoa,
                        cnpj,
                        tipo,
                        endereco,
                        bairro,
                        cidade,
                        codmun,
                        estado,
                        cep,
                        status,
                        ddd,
                        tel,
                        email
                    })
                });

                if (!response.ok) {
                    throw new Error('Erro ao atualizar cliente');
                }

                const result = await response.json();

                $('#resultado_' + codigo + '_' + loja).slideUp(100, function(){
                    $(this).html("<div class='alert alert-success'>Cliente atualizado com sucesso!</div>");
                });

                setTimeout(() => {

                    $('#resultado_' + codigo + '_' + loja).fadeOut(500, function(){

                        $(this).html('');

                    });

                }, 4000);

            } catch (error) {
                
                $('#resultado_' + codigo + loja).html("<div class='alert alert-danger'>Erro ao atualizar cliente: " + error.message + "</div>");
            }
        }


        //DELETE
        async function excluirCliente(codigo, loja) {
            
            if (!confirm("Tem certeza de que deseja excluir este cliente?")) {
                return;
            }

            try {
                
                const response = await fetch(`http://localhost:8091/restapi/clientes/deletar?codigo=${codigo}&loja=${loja}`, {
                    method: "DELETE",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "Basic YWRtaW46IA=="
                    }
                });

                if (!response.ok) {
                    throw new Error('Erro ao excluir cliente');
                }

                const result = await response.json();

                
                $('#resultado_' + codigo + '_' + loja).slideUp(100, function(){
                    $(this).html("<div class='alert alert-success'>Cliente excluído com sucesso!</div>");
                });

                setTimeout(() => {
                    $('#cliente_' + codigo + '_' + loja).fadeOut(500, function() {
                        $(this).remove();
                    });
                }, 1500);


            } catch (error) {
                
                $('#resultado_' + codigo + loja).html("<div class='alert alert-danger'>Erro ao excluir cliente: " + error.message + "</div>");
            }
        }






    </script>
</body>
</html>
