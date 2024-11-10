<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
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

    .form-control-danger{
        border-color: #dc3545;
    }
    
</style>
<body>
    
    <div class="d-flex bg-dark text-white mb-5 justify-content-center">
        <h2 class="text-center text-nowrap">Clientes - Protheus</h1>
    </div>
    
    <div class="container">

        <div class="shadow card bg-glass p-3 rounded mb-5">
            <h3 class="text-center">Cadastrar</h3>

            <form id="formIncluir">
                <div class="row mb-2">
                    <div class="col-sm-3">
                        <label>Código: <span class="text-danger">*</span></label>
                        <input type="text" id="codigo" placeholder="ex: (1, 2, 3)" class="w-100 form-control" maxlength="5" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Loja: <span class="text-danger">*</span></label>
                        <input type="text" id="loja" placeholder="ex: (1, 2, 3)" class="w-100 form-control" maxlength="3" required>
                    </div>
                    <div class="col-sm-3">
                        <label>CNPJ: <span class="text-danger">*</span></label>
                        <input type="text" id="cnpj" placeholder="ex: (12.345.678/0001-90)" class="w-100 form-control" maxlength="20" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Nome: <span class="text-danger">*</span></label>
                        <input type="text" id="nome" placeholder="ex: (Nome do Cliente)" class="w-100 form-control" maxlength="50" required>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-sm-3">
                        <label>Nome Reduzido: <span class="text-danger">*</span></label>
                        <input type="text" id="nreduz" placeholder="ex: (Nome curto)" class="w-100 form-control" maxlength="10" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Tipo: <span class="text-danger">*</span></label>
                        <select id="tipo" class="w-100 form-control" required>
                            <option value="">Selecione</option>
                            <option value="F">F</option>
                            <option value="L">L</option>
                            <option value="R">R</option>
                            <option value="S">S</option>
                            <option value="X">X</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Pessoa: <span class="text-danger">*</span></label>
                        <select id="pessoa" class="w-100 form-control" required>
                            <option value="">Selecione</option>
                            <option value="J">J</option>
                            <option value="F">F</option>
                        </select>
                    </div>
                    
                </div>

                <hr>

                <div class="row mb-2">

                    <div class="col-sm-3">
                        <label>Endereço: <span class="text-danger">*</span></label>
                        <input type="text" id="endereco" placeholder="ex: (Rua Exemplo, 123)" class="w-100 form-control" maxlength="100" required>
                    </div>

                    <div class="col-sm-3">
                        <label>Cidade: <span class="text-danger">*</span></label>
                        <input type="text" id="cidade" placeholder="ex: (TESTE)" class="w-100 form-control" maxlength="50" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Bairro: <span class="text-danger">*</span></label>
                        <input type="text" id="bairro" placeholder="ex: (Bairro das Palmeiras)" class="w-100 form-control" maxlength="50" required>
                    </div>

                    <div class="col-sm-3">
                        <label>CEP: <span class="text-danger">*</span></label>
                        <input type="text" id="cep" placeholder="ex: (12345-678)" class="w-100 form-control" maxlength="10" required>
                    </div>

                </div>

                <div class="row mb-2">
                <div class="col-sm-3">
                        <label>Código Município:</label>
                        <input type="text" id="codmun" placeholder="ex: (22307)" class="w-100 form-control" maxlength="20">
                    </div>

                    <div class="col-sm-3">
                        <label>Estado: <span class="text-danger">*</span></label>
                        <select id="estado" class="w-100 form-control" required>
                            <option value="">Selecione</option>
                            <option value="AC">Acre (AC)</option>
                            <option value="AL">Alagoas (AL)</option>
                            <option value="AP">Amapá (AP)</option>
                            <option value="AM">Amazonas (AM)</option>
                            <option value="BA">Bahia (BA)</option>
                            <option value="CE">Ceará (CE)</option>
                            <option value="DF">Distrito Federal (DF)</option>
                            <option value="ES">Espírito Santo (ES)</option>
                            <option value="GO">Goiás (GO)</option>
                            <option value="MA">Maranhão (MA)</option>
                            <option value="MT">Mato Grosso (MT)</option>
                            <option value="MS">Mato Grosso do Sul (MS)</option>
                            <option value="MG">Minas Gerais (MG)</option>
                            <option value="PA">Pará (PA)</option>
                            <option value="PB">Paraíba (PB)</option>
                            <option value="PR">Paraná (PR)</option>
                            <option value="PE">Pernambuco (PE)</option>
                            <option value="PI">Piauí (PI)</option>
                            <option value="RJ">Rio de Janeiro (RJ)</option>
                            <option value="RN">Rio Grande do Norte (RN)</option>
                            <option value="RS">Rio Grande do Sul (RS)</option>
                            <option value="RO">Rondônia (RO)</option>
                            <option value="RR">Roraima (RR)</option>
                            <option value="SC">Santa Catarina (SC)</option>
                            <option value="SP">São Paulo (SP)</option>
                            <option value="SE">Sergipe (SE)</option>
                            <option value="TO">Tocantins (TO)</option>
                        </select>
                    </div>
                </div>

                <hr>

                <div class="row mb-2">
                    
                    <div class="col-sm-3">
                        <label>DDD:</label>
                        <input type="text" id="ddd" placeholder="ex: (11)" class="w-100 form-control" maxlength="3">
                    </div>
                    <div class="col-sm-3">
                        <label>Telefone:</label>
                        <input type="text" id="tel" placeholder="ex: (1234-5678)" class="w-100 form-control" maxlength="20">
                    </div>

                    <div class="col-sm-3">
                        <label>Email:</label>
                        <input type="email" id="email" placeholder="ex: (cliente@exemplo.com)" class="w-100 form-control" maxlength="50">
                    </div>

                    <div class="col-sm-3">
                        <label>Status: <span class="text-danger">*</span></label>
                        <select id="status" class="w-100 form-control" required>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                    </div>

                </div>

                <div class="d-flex mt-4 justify-content-center">
                    <button type="button" id="btnSalvarPost" class="btn btn-success w-50"><span class="mdi mdi-content-save"></span> Salvar</button>
                </div>
            </form>


            <div id="resultado" class="mt-3"></div>

        </div>

        <!-- <hr class="mb-5"> -->

        <h3 class="text-center my-5 py-2 shadow-sm bg-glass rounded">Busca:</h3>

        <div class="row align-content-center mb-5">
            <div class="col-sm-6 text-center">
                <!-- <div class="row">
                    <div class="col-sm-5 align-content-center text-left">
                        <span class="">ID:</span>
                        <input type="text" name="inputBuscaClienteCodigo" id="inputBuscaClienteCodigo" class="w-50">
                    </div>
                    
                    <div class="col-sm-5 align-content-center text-left">
                        <span class="">Loja:</span>
                        <input type="text" name="inputBuscaClienteLoja" id="inputBuscaClienteLoja" class="w-50">
                    </div>

                    <div class="col-sm-2 align-content-center text-left">
                        <button type="button" class="btn btn-primary" name="btnBuscaCliente" id="btnBuscaCliente">Buscar</button>
                    </div>
                </div> -->

                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex align-items-center flex-fill">
                        <span>ID:</span>
                        <input type="text" name="inputBuscaClienteCodigo" id="inputBuscaClienteCodigo" class="form-control mx-2 w-100">
                    </div>
                    
                    <div class="d-flex align-items-center flex-fill">
                        <span>Loja:</span>
                        <input type="text" name="inputBuscaClienteLoja" id="inputBuscaClienteLoja" class="form-control mx-2 w-100">
                    </div>

                    <div class="d-flex align-items-center justify-content-end">
                        <button type="button" class="btn btn-primary text-nowrap" name="btnBuscaCliente" id="btnBuscaCliente"><span class="mdi mdi-magnify"></span> Buscar</button>
                    </div>
                </div>


            </div>
            
            <div class="col-sm-6 text-center text-sm-right">
                <button id="listarClientes" class="btn btn-primary"><span class="mdi mdi-format-list-bulleted"></span> Listar</button>
                <button id="limparClientes" class="btn btn-danger d-none"><span class="mdi mdi-delete"></span> Limpar</button>
            </div>

            
        </div>
        

        <div id="clientesLista" class="mt-3 mb-3"></div>

    </div>

    <script>
        // var aData = null;

        //VALIDAÇÕES
        function validarCampos() {
            var boolCampos = true;

            // Validação do campo "Código"
            const codigo = $('#codigo');
            if (!/^\d+$/.test(codigo.val()) || !codigo.val()) { 
                codigo.val(''); 
                codigo.addClass('form-control-danger');
                boolCampos = false;
            } else {
                codigo.removeClass('form-control-danger');
            }

            // Validação do campo loja
            const loja = $('#loja');
            if (!/^\d+$/.test(loja.val()) || !loja.val()) { 
                loja.val(''); 
                loja.addClass('form-control-danger');
                boolCampos = false;
            } else {
                loja.removeClass('form-control-danger');
            }

            // Validação de campos obrigatórios
            $('#loja, #nome, #nreduz, #tipo, #pessoa, #endereco, #cidade, #bairro, #estado, #status').each(function () {
                if ($(this).val().trim() === "") {
                    $(this).val('');
                    $(this).addClass('form-control-danger');
                    boolCampos = false;
                } else {
                    $(this).removeClass('form-control-danger');
                }
            });

            // Validação do CNPJ
            const cnpj = $('#cnpj');
            const cnpjVal = cnpj.val().replace(/[^\d]/g, '');

            if (!cnpjVal || !/^\d{14}$/.test(cnpjVal)) {
                cnpj.val('');
                cnpj.addClass('form-control-danger');
                boolCampos = false;
            } else {
                cnpj.removeClass('form-control-danger');
            }

            // Validação do CEP
            const cep = $('#cep');
            const cepVal = cep.val().replace(/[^\d]/g, '');

            if (!cepVal || !/^\d{8}$/.test(cepVal)) {
                cep.val('');
                cep.addClass('form-control-danger');
                boolCampos = false;
            } else {
                cep.removeClass('form-control-danger');
            }

            // Validação do DDD e telefone
            const ddd = $('#ddd');
            if (!/^\d{2,3}$/.test(ddd.val())) {
                ddd.val('');
                ddd.addClass('form-control-danger');
                boolCampos = false;
            } else {
                ddd.removeClass('form-control-danger');
            }

            const tel = $('#tel');
            const telVal = tel.val().replace(/[^\d]/g, '');
            if (!/^\d{8,9}$/.test(telVal)) {
                tel.val('');
                tel.addClass('form-control-danger');
                boolCampos = false;
            } else {
                tel.removeClass('form-control-danger');
            }

            // Validação do e-mail, se preenchido
            const email = $('#email');
            if (!email.val().trim() || !/^[\w-]+@([\w-]+\.)+[\w-]{2,4}$/.test(email.val())) {
                email.val('');
                email.addClass('form-control-danger');
                boolCampos = false;
            } else {
                email.removeClass('form-control-danger');
            }

            return boolCampos;
        }

        function validarCamposPut(codigoCliente, lojaCliente) {
            var boolCampos = true;

            const codigo = $('#codigo_' + codigoCliente + '_' + lojaCliente);
            const loja = $('#loja_' + codigoCliente + '_' + lojaCliente);
            const cnpj = $('#cnpj_' + codigoCliente + '_' + lojaCliente);
            const nome = $('#nome_' + codigoCliente + '_' + lojaCliente);
            const nreduz = $('#nreduz_' + codigoCliente + '_' + lojaCliente);
            const tipo = $('#tipo_' + codigoCliente + '_' + lojaCliente);
            const pessoa = $('#pessoa_' + codigoCliente + '_' + lojaCliente);
            const endereco = $('#endereco_' + codigoCliente + '_' + lojaCliente);
            const cidade = $('#cidade_' + codigoCliente + '_' + lojaCliente);
            const bairro = $('#bairro_' + codigoCliente + '_' + lojaCliente);
            const cep = $('#cep_' + codigoCliente + '_' + lojaCliente);
            const estado = $('#estado_' + codigoCliente + '_' + lojaCliente);
            const status = $('#status_' + codigoCliente + '_' + lojaCliente);
            const email = $('#email_' + codigoCliente + '_' + lojaCliente);
            const telefone = $('#telefone_' + codigoCliente + '_' + lojaCliente);
            const ddd = $('#ddd_' + codigoCliente + '_' + lojaCliente);

            // Validação do campo "Código"
            if (!/^\d+$/.test(codigo.val()) || !codigo.val()) { 
                codigo.val(''); 
                codigo.addClass('form-control-danger');
                boolCampos = false;
            } else {
                codigo.removeClass('form-control-danger');
            }

            // Validação do campo "Loja"
            if (!/^\d+$/.test(loja.val()) || !loja.val()) { 
                loja.val(''); 
                loja.addClass('form-control-danger');
                boolCampos = false;
            } else {
                loja.removeClass('form-control-danger');
            }

            // Validação de campos obrigatórios
            [loja, nome, nreduz, tipo, pessoa, endereco, cidade, bairro, estado, status].forEach(function (campo) {
                if (campo.val().trim() === "") {
                    campo.val('');
                    campo.addClass('form-control-danger');
                    boolCampos = false;
                } else {
                    campo.removeClass('form-control-danger');
                }
            });

            // Validação do CNPJ
            const cnpjVal = cnpj.val().replace(/[^\d]/g, '');
            if (!cnpjVal || !/^\d{14}$/.test(cnpjVal)) {
                cnpj.val('');
                cnpj.addClass('form-control-danger');
                boolCampos = false;
            } else {
                cnpj.removeClass('form-control-danger');
            }

            // Validação do CEP
            const cepVal = cep.val().replace(/[^\d]/g, '');
            if (!cepVal || !/^\d{8}$/.test(cepVal)) {
                cep.val('');
                cep.addClass('form-control-danger');
                boolCampos = false;
            } else {
                cep.removeClass('form-control-danger');
            }
            
            //Validação de DDD
            if (!/^\d{2,3}$/.test(ddd.val())) {
                ddd.val('');
                ddd.addClass('form-control-danger');
                boolCampos = false;
            } else {
                ddd.removeClass('form-control-danger');
            }

            // Validação do Telefone
            const telefoneVal = telefone.val().replace(/[^\d]/g, '');
            if (!/^\d{8,9}$/.test(telefoneVal)) {
                telefone.val('');
                telefone.addClass('form-control-danger');
                boolCampos = false;
            } else {
                telefone.removeClass('form-control-danger');
            }

            // Validação do e-mail
            if (!email.val().trim() || !/^[\w-]+@([\w-]+\.)+[\w-]{2,4}$/.test(email.val())) {
                email.val('');
                email.addClass('form-control-danger');
                boolCampos = false;
            } else {
                email.removeClass('form-control-danger');
            }

            return boolCampos;
        }


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

                // var aData = [{
                //     "codigo": 2,
                //     "loja": 02,
                //     "nome": "aaa",
                //     "nreduz": "as",
                //     "pessoa": "pessoa",
                //     "cnpj": "cnpj",
                //     "tipo": "tipo",
                //     "endereco": "endereco",
                //     "bairro": "bairro",
                //     "cidade": "cidade",
                //     "codmun": "codmun",
                //     "estado": "SP",
                //     "cep": "cep",
                //     "status": "status",
                //     "ddd": "ddd",
                //     "tel": "tel",
                //     "email": "email"
                // },
                // {
                //     "codigo": 1,
                //     "loja": 02,
                //     "nome": "aaa",
                //     "nreduz": "as",
                //     "pessoa": "pessoa",
                //     "cnpj": "cnpj",
                //     "tipo": "tipo",
                //     "endereco": "endereco",
                //     "bairro": "bairro",
                //     "cidade": "cidade",
                //     "codmun": "codmun",
                //     "estado": "MG",
                //     "cep": "cep",
                //     "status": "status",
                //     "ddd": "ddd",
                //     "tel": "tel",
                //     "email": "email"
                // }];

                $('#clientesLista').html('');

                console.log(aData);

                if (Array.isArray(aData) && aData.length > 0) {
                    
                    for (var i = 0; i < aData.length; i++) {
                        var cliente = aData[i];
                        var c = i+1;

                        $('#clientesLista').append(


                            "<div class='row border shadow m-1 py-3 px-0 mb-4' id='cliente_" + cliente.codigo + "_" + cliente.loja + "'>" +
                                "<div class='col-sm-12'>" +
                                    "<h5 class='text-center text-muted'>" + c + " - ID: " + cliente.codigo + " Loja: " + cliente.loja + " Nome: " + cliente.nreduz + "</h5>" +
                                    "<form id='formCliente_" + cliente.codigo + "_" + cliente.loja + "'>" +
                                        "<div class='row mb-2'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Código: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='5' required value='" + cliente.codigo + "' id='codigo_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Loja: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='3' required value='" + cliente.loja + "' id='loja_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>CNPJ: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='20' required value='" + cliente.cnpj + "' id='cnpj_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Nome: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='50' required value='" + cliente.nome + "' id='nome_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                        "</div>" +

                                        "<div class='row mb-2'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Nome Reduzido: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='20' required value='" + cliente.nreduz + "' id='nreduz_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Tipo: <span class='text-danger'>*</span></label>" +
                                                "<select id='tipo_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                    "<option value=''>Selecione</option>" +
                                                    "<option value='F'" + (cliente.tipo === 'F' ? " selected" : "") + ">F</option>" +
                                                    "<option value='L'" + (cliente.tipo === 'L' ? " selected" : "") + ">L</option>" +
                                                    "<option value='R'" + (cliente.tipo === 'R' ? " selected" : "") + ">R</option>" +
                                                    "<option value='S'" + (cliente.tipo === 'S' ? " selected" : "") + ">S</option>" +
                                                    "<option value='X'" + (cliente.tipo === 'X' ? " selected" : "") + ">X</option>" +
                                                "</select>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Pessoa: <span class='text-danger'>*</span></label>" +
                                                "<select id='pessoa_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                    "<option value=''>Selecione</option>" +
                                                    "<option value='J'" + (cliente.pessoa === 'J' ? " selected" : "") + ">J</option>" +
                                                    "<option value='F'" + (cliente.pessoa === 'F' ? " selected" : "") + ">F</option>" +
                                                "</select>" +
                                            "</div>" +
                                        "</div>" +

                                        "<hr>" +

                                        "<div class='row mb-2'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Endereço: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='100' required value='" + cliente.endereco + "' id='endereco_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Cidade: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='50' required value='" + cliente.cidade + "' id='cidade_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Bairro: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='30' required value='" + cliente.bairro + "' id='bairro_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>CEP: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='10' required value='" + cliente.cep + "' id='cep_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            
                                        "</div>" +

                                        "<div class='row mb-2'>"+
                                            "<div class='col-sm-3'>" +
                                                "<label>Código Município:</label>" +
                                                "<input type='text' maxlength='20' value='" + cliente.codmun + "' id='codmun_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Estado: <span class='text-danger'>*</span></label>" +
                                                "<select id='estado_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                    "<option value=''>Selecione</option>" +
                                                    "<option value='AC'" + (cliente.estado === 'AC' ? " selected" : "") + ">Acre (AC)</option>" +
                                                    "<option value='AL'" + (cliente.estado === 'AL' ? " selected" : "") + ">Alagoas (AL)</option>" +
                                                    "<option value='AP'" + (cliente.estado === 'AP' ? " selected" : "") + ">Amapá (AP)</option>" +
                                                    "<option value='AM'" + (cliente.estado === 'AM' ? " selected" : "") + ">Amazonas (AM)</option>" +
                                                    "<option value='BA'" + (cliente.estado === 'BA' ? " selected" : "") + ">Bahia (BA)</option>" +
                                                    "<option value='CE'" + (cliente.estado === 'CE' ? " selected" : "") + ">Ceará (CE)</option>" +
                                                    "<option value='DF'" + (cliente.estado === 'DF' ? " selected" : "") + ">Distrito Federal (DF)</option>" +
                                                    "<option value='ES'" + (cliente.estado === 'ES' ? " selected" : "") + ">Espírito Santo (ES)</option>" +
                                                    "<option value='GO'" + (cliente.estado === 'GO' ? " selected" : "") + ">Goiás (GO)</option>" +
                                                    "<option value='MA'" + (cliente.estado === 'MA' ? " selected" : "") + ">Maranhão (MA)</option>" +
                                                    "<option value='MT'" + (cliente.estado === 'MT' ? " selected" : "") + ">Mato Grosso (MT)</option>" +
                                                    "<option value='MS'" + (cliente.estado === 'MS' ? " selected" : "") + ">Mato Grosso do Sul (MS)</option>" +
                                                    "<option value='MG'" + (cliente.estado === 'MG' ? " selected" : "") + ">Minas Gerais (MG)</option>" +
                                                    "<option value='PA'" + (cliente.estado === 'PA' ? " selected" : "") + ">Pará (PA)</option>" +
                                                    "<option value='PB'" + (cliente.estado === 'PB' ? " selected" : "") + ">Paraíba (PB)</option>" +
                                                    "<option value='PR'" + (cliente.estado === 'PR' ? " selected" : "") + ">Paraná (PR)</option>" +
                                                    "<option value='PE'" + (cliente.estado === 'PE' ? " selected" : "") + ">Pernambuco (PE)</option>" +
                                                    "<option value='PI'" + (cliente.estado === 'PI' ? " selected" : "") + ">Piauí (PI)</option>" +
                                                    "<option value='RJ'" + (cliente.estado === 'RJ' ? " selected" : "") + ">Rio de Janeiro (RJ)</option>" +
                                                    "<option value='RN'" + (cliente.estado === 'RN' ? " selected" : "") + ">Rio Grande do Norte (RN)</option>" +
                                                    "<option value='RS'" + (cliente.estado === 'RS' ? " selected" : "") + ">Rio Grande do Sul (RS)</option>" +
                                                    "<option value='RO'" + (cliente.estado === 'RO' ? " selected" : "") + ">Rondônia (RO)</option>" +
                                                    "<option value='RR'" + (cliente.estado === 'RR' ? " selected" : "") + ">Roraima (RR)</option>" +
                                                    "<option value='SC'" + (cliente.estado === 'SC' ? " selected" : "") + ">Santa Catarina (SC)</option>" +
                                                    "<option value='SP'" + (cliente.estado === 'SP' ? " selected" : "") + ">São Paulo (SP)</option>" +
                                                    "<option value='SE'" + (cliente.estado === 'SE' ? " selected" : "") + ">Sergipe (SE)</option>" +
                                                    "<option value='TO'" + (cliente.estado === 'TO' ? " selected" : "") + ">Tocantins (TO)</option>" +
                                                "</select>" +
                                            "</div>" +
                                        "</div>"+

                                        "<hr>" +

                                        "<div class='row mb-2'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>DDD:</label>" +
                                                "<input type='text' maxlength='3' value='" + cliente.ddd + "' id='ddd_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Telefone:</label>" +
                                                "<input type='text' maxlength='20' value='" + cliente.telefone + "' id='telefone_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>E-mail: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='50' required value='" + cliente.email + "' id='email_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Status: <span class='text-danger'>*</span></label>" +
                                                "<select id='status_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                    "<option value='1'" + (cliente.status === "1" ? " selected" : "") + ">Ativo</option>" +
                                                    "<option value='0'" + (cliente.status === "0" ? " selected" : "") + ">Inativo</option>" +
                                                "</select>" +
                                            "</div>" +
                                        "</div>" +
                                            "<div class='d-flex mt-3 justify-content-center'>" +
                                                "<button type='button' id='btnEdit_" + cliente.codigo + "_" + cliente.loja + "' class='btn btn-secondary m-1' onclick='btnEditarCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'><span class='mdi mdi-pencil'></span> Editar</button>"+
                                                "<button type='button' id='btnSalvarEdit_" + cliente.codigo + "_" + cliente.loja + "' class='btn btn-success m-1 d-none' onclick='editarCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'><span class='mdi mdi-content-save'></span> Salvar</button>" +
                                                "<button type='button' class='btn btn-danger m-1' onclick='excluirCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'><span class='mdi mdi-delete'></span> Excluir</button>" +
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

                    // $('#clientesLista').append(

                    //     "<div class='row border m-1 py-3 px-0' id='cliente_" + cliente.codigo + "_" + cliente.loja + "'>" +
                    //         "<div class='col-sm-12'>" +
                    //             "<form id='formCliente_" + cliente.codigo + "_" + cliente.loja + "'>" +
                    //                 "<div class='row'>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Código:</label>" +
                    //                         "<input type='text' value='" + cliente.codigo + "' id='codigo_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Loja:</label>" +
                    //                         "<input type='text' value='" + cliente.loja + "' id='loja_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>CNPJ:</label>" +
                    //                         "<input type='text' value='" + cliente.cnpj + "' id='cnpj_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Nome:</label>" +
                    //                         "<input type='text' value='" + cliente.nome + "' id='nome_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                 "</div>" +
                    //                 "<div class='row'>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Nome Reduzido:</label>" +
                    //                         "<input type='text' value='" + cliente.nreduz + "' id='nreduz_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Tipo:</label>" +
                    //                         "<select id='tipo_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                             "<option value=''>Selecione</option>" +
                    //                             "<option value='F'" + (cliente.tipo === 'F' ? " selected" : "") + ">F</option>" +
                    //                             "<option value='L'" + (cliente.tipo === 'L' ? " selected" : "") + ">L</option>" +
                    //                             "<option value='R'" + (cliente.tipo === 'R' ? " selected" : "") + ">R</option>" +
                    //                             "<option value='S'" + (cliente.tipo === 'S' ? " selected" : "") + ">S</option>" +
                    //                             "<option value='X'" + (cliente.tipo === 'X' ? " selected" : "") + ">X</option>" +
                    //                         "</select>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Pessoa:</label>" +
                    //                         "<select id='pessoa_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                             "<option value=''>Selecione</option>" +
                    //                             "<option value='J'" + (cliente.pessoa === 'J' ? " selected" : "") + ">J</option>" +
                    //                             "<option value='F'" + (cliente.pessoa === 'F' ? " selected" : "") + ">F</option>" +
                    //                         "</select>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Endereço:</label>" +
                    //                         "<input type='text' value='" + cliente.endereco + "' id='endereco_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                 "</div>" +
                    //                 "<div class='row'>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Cidade:</label>" +
                    //                         "<input type='text' value='" + cliente.cidade + "' id='cidade_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Bairro:</label>" +
                    //                         "<input type='text' value='" + cliente.bairro + "' id='bairro_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Estado:</label>" +
                    //                         "<input type='text' value='" + cliente.estado + "' id='estado_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>CEP:</label>" +
                    //                         "<input type='text' value='" + cliente.cep + "' id='cep_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                 "</div>" +
                    //                 "<div class='row'>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Código Município:</label>" +
                    //                         "<input type='text' value='" + cliente.codmun + "' id='codmun_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Status:</label>" +
                    //                         "<select id='status_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                             "<option value='1'" + (cliente.status === "1" ? " selected" : "") + ">Ativo</option>" +
                    //                             "<option value='0'" + (cliente.status === "0" ? " selected" : "") + ">Inativo</option>" +
                    //                         "</select>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>DDD:</label>" +
                    //                         "<input type='text' value='" + cliente.ddd + "' id='ddd_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Telefone:</label>" +
                    //                         "<input type='text' value='" + cliente.tel + "' id='tel_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                 "</div>" +
                    //                 "<div class='row'>" +
                    //                     "<div class='col-sm-3'>" +
                    //                         "<label>Email:</label>" +
                    //                         "<input type='email' value='" + cliente.email + "' id='email_" + cliente.codigo + "_" + cliente.loja + "' class='w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                    //                     "</div>" +
                    //                 "</div>" +
                    //                 "<div class='d-flex mt-3 justify-content-center'>" +
                    //                     "<button type='button' class='btn btn-secondary m-1' onclick='editarCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'>Editar</button>" +
                    //                     "<button type='button' class='btn btn-danger m-1' onclick='excluirCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'>Excluir</button>" +
                    //                 "</div>" +
                    //                 "<div class='d-flex justify-content-center mt-3' id='resultado_" + cliente.codigo + "_" + cliente.loja + "'></div>" +
                    //             "</form>" +
                    //         "</div>" +
                    //     "</div>"


                            
                    // );

                    $('#clientesLista').append(
                            "<div class='row border shadow m-1 py-3 px-0 mb-4' id='cliente_" + cliente.codigo + "_" + cliente.loja + "'>" +
                                "<div class='col-sm-12'>" +
                                    "<h5 class='text-center text-muted'>" + c + " - ID: " + cliente.codigo + " Loja: " + cliente.loja + " Nome: " + cliente.nreduz + "</h5>" +
                                    "<form id='formCliente_" + cliente.codigo + "_" + cliente.loja + "'>" +
                                        "<div class='row mb-2'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Código: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='5' required value='" + cliente.codigo + "' id='codigo_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Loja: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='3' required value='" + cliente.loja + "' id='loja_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>CNPJ: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='20' required value='" + cliente.cnpj + "' id='cnpj_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Nome: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='50' required value='" + cliente.nome + "' id='nome_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                        "</div>" +

                                        "<div class='row mb-2'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Nome Reduzido: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='20' required value='" + cliente.nreduz + "' id='nreduz_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Tipo: <span class='text-danger'>*</span></label>" +
                                                "<select id='tipo_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                    "<option value=''>Selecione</option>" +
                                                    "<option value='F'" + (cliente.tipo === 'F' ? " selected" : "") + ">F</option>" +
                                                    "<option value='L'" + (cliente.tipo === 'L' ? " selected" : "") + ">L</option>" +
                                                    "<option value='R'" + (cliente.tipo === 'R' ? " selected" : "") + ">R</option>" +
                                                    "<option value='S'" + (cliente.tipo === 'S' ? " selected" : "") + ">S</option>" +
                                                    "<option value='X'" + (cliente.tipo === 'X' ? " selected" : "") + ">X</option>" +
                                                "</select>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Pessoa: <span class='text-danger'>*</span></label>" +
                                                "<select id='pessoa_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                    "<option value=''>Selecione</option>" +
                                                    "<option value='J'" + (cliente.pessoa === 'J' ? " selected" : "") + ">J</option>" +
                                                    "<option value='F'" + (cliente.pessoa === 'F' ? " selected" : "") + ">F</option>" +
                                                "</select>" +
                                            "</div>" +
                                        "</div>" +

                                        "<hr>" +

                                        "<div class='row mb-2'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Endereço: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='100' required value='" + cliente.endereco + "' id='endereco_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Cidade: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='50' required value='" + cliente.cidade + "' id='cidade_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Bairro: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='30' required value='" + cliente.bairro + "' id='bairro_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>CEP: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='10' required value='" + cliente.cep + "' id='cep_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            
                                        "</div>" +

                                        "<div class='row mb-2'>"+
                                            "<div class='col-sm-3'>" +
                                                "<label>Código Município:</label>" +
                                                "<input type='text' maxlength='20' value='" + cliente.codmun + "' id='codmun_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Estado: <span class='text-danger'>*</span></label>" +
                                                "<select id='estado_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                    "<option value=''>Selecione</option>" +
                                                    "<option value='AC'" + (cliente.estado === 'AC' ? " selected" : "") + ">Acre (AC)</option>" +
                                                    "<option value='AL'" + (cliente.estado === 'AL' ? " selected" : "") + ">Alagoas (AL)</option>" +
                                                    "<option value='AP'" + (cliente.estado === 'AP' ? " selected" : "") + ">Amapá (AP)</option>" +
                                                    "<option value='AM'" + (cliente.estado === 'AM' ? " selected" : "") + ">Amazonas (AM)</option>" +
                                                    "<option value='BA'" + (cliente.estado === 'BA' ? " selected" : "") + ">Bahia (BA)</option>" +
                                                    "<option value='CE'" + (cliente.estado === 'CE' ? " selected" : "") + ">Ceará (CE)</option>" +
                                                    "<option value='DF'" + (cliente.estado === 'DF' ? " selected" : "") + ">Distrito Federal (DF)</option>" +
                                                    "<option value='ES'" + (cliente.estado === 'ES' ? " selected" : "") + ">Espírito Santo (ES)</option>" +
                                                    "<option value='GO'" + (cliente.estado === 'GO' ? " selected" : "") + ">Goiás (GO)</option>" +
                                                    "<option value='MA'" + (cliente.estado === 'MA' ? " selected" : "") + ">Maranhão (MA)</option>" +
                                                    "<option value='MT'" + (cliente.estado === 'MT' ? " selected" : "") + ">Mato Grosso (MT)</option>" +
                                                    "<option value='MS'" + (cliente.estado === 'MS' ? " selected" : "") + ">Mato Grosso do Sul (MS)</option>" +
                                                    "<option value='MG'" + (cliente.estado === 'MG' ? " selected" : "") + ">Minas Gerais (MG)</option>" +
                                                    "<option value='PA'" + (cliente.estado === 'PA' ? " selected" : "") + ">Pará (PA)</option>" +
                                                    "<option value='PB'" + (cliente.estado === 'PB' ? " selected" : "") + ">Paraíba (PB)</option>" +
                                                    "<option value='PR'" + (cliente.estado === 'PR' ? " selected" : "") + ">Paraná (PR)</option>" +
                                                    "<option value='PE'" + (cliente.estado === 'PE' ? " selected" : "") + ">Pernambuco (PE)</option>" +
                                                    "<option value='PI'" + (cliente.estado === 'PI' ? " selected" : "") + ">Piauí (PI)</option>" +
                                                    "<option value='RJ'" + (cliente.estado === 'RJ' ? " selected" : "") + ">Rio de Janeiro (RJ)</option>" +
                                                    "<option value='RN'" + (cliente.estado === 'RN' ? " selected" : "") + ">Rio Grande do Norte (RN)</option>" +
                                                    "<option value='RS'" + (cliente.estado === 'RS' ? " selected" : "") + ">Rio Grande do Sul (RS)</option>" +
                                                    "<option value='RO'" + (cliente.estado === 'RO' ? " selected" : "") + ">Rondônia (RO)</option>" +
                                                    "<option value='RR'" + (cliente.estado === 'RR' ? " selected" : "") + ">Roraima (RR)</option>" +
                                                    "<option value='SC'" + (cliente.estado === 'SC' ? " selected" : "") + ">Santa Catarina (SC)</option>" +
                                                    "<option value='SP'" + (cliente.estado === 'SP' ? " selected" : "") + ">São Paulo (SP)</option>" +
                                                    "<option value='SE'" + (cliente.estado === 'SE' ? " selected" : "") + ">Sergipe (SE)</option>" +
                                                    "<option value='TO'" + (cliente.estado === 'TO' ? " selected" : "") + ">Tocantins (TO)</option>" +
                                                "</select>" +
                                            "</div>" +
                                        "</div>"+

                                        "<hr>" +

                                        "<div class='row mb-2'>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>DDD:</label>" +
                                                "<input type='text' maxlength='3' value='" + cliente.ddd + "' id='ddd_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Telefone:</label>" +
                                                "<input type='text' maxlength='20' value='" + cliente.telefone + "' id='telefone_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>E-mail: <span class='text-danger'>*</span></label>" +
                                                "<input type='text' maxlength='50' required value='" + cliente.email + "' id='email_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                            "</div>" +
                                            "<div class='col-sm-3'>" +
                                                "<label>Status: <span class='text-danger'>*</span></label>" +
                                                "<select id='status_" + cliente.codigo + "_" + cliente.loja + "' class='form-control w-100 habilitarCampos_" + cliente.codigo + "_" + cliente.loja + "' disabled>" +
                                                    "<option value='1'" + (cliente.status === "1" ? " selected" : "") + ">Ativo</option>" +
                                                    "<option value='0'" + (cliente.status === "0" ? " selected" : "") + ">Inativo</option>" +
                                                "</select>" +
                                            "</div>" +
                                        "</div>" +
                                            "<div class='d-flex mt-3 justify-content-center'>" +
                                                "<button type='button' id='btnEdit_" + cliente.codigo + "_" + cliente.loja + "' class='btn btn-secondary m-1' onclick='btnEditarCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'><span class='mdi mdi-pencil'></span> Editar</button>"+
                                                "<button type='button' id='btnSalvarEdit_" + cliente.codigo + "_" + cliente.loja + "' class='btn btn-success m-1 d-none' onclick='editarCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'><span class='mdi mdi-content-save'></span> Salvar</button>" +
                                                "<button type='button' class='btn btn-danger m-1' onclick='excluirCliente(\"" + cliente.codigo + "\", \"" + cliente.loja + "\")'><span class='mdi mdi-delete'></span> Excluir</button>" +
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
        $('#btnSalvarPost').on('click', async function (event) {

            var boolCampos = validarCampos();

            if (boolCampos){
                var codigo = $('#codigo').val();
                var loja = $('#loja').val();
                var nome = $('#nome').val();
                var nreduz = $('#nreduz').val();
                var pessoa = $('#pessoa').val();

                var cnpjVal = $('#cnpj').val().replace(/[^\d]/g, '');

                var cnpj = cnpjVal;
                var tipo = $('#tipo').val();
                var endereco = $('#endereco').val();
                var bairro = $('#bairro').val();

                var cidade = $('#cidade').val().toUpperCase();

                var codmun = $('#codmun').val();
                var estado = $('#estado').val();
                var cep = $('#cep').val();
                var status = $('#status').val();
                var ddd = $('#ddd').val();
                var tel = $('#tel').val();
                var email = $('#email').val();

                // console.log({
                //     codigo: codigo,
                //     loja: loja,
                //     nome: nome,
                //     nreduz: nreduz,
                //     pessoa: pessoa,
                //     cnpj: cnpj,
                //     tipo: tipo,
                //     endereco: endereco,
                //     bairro: bairro,
                //     cidade: cidade,
                //     codmun: codmun,
                //     estado: estado,
                //     cep: cep,
                //     status: status,
                //     ddd: ddd,
                //     tel: tel,
                //     email: email
                // });

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
            }

            
        });

        //PUT
        async function editarCliente(codigo, loja) {

            var boolCampos = validarCamposPut(codigo, loja);

            if(boolCampos){
                    
                const nome = $('#nome_' + codigo + '_' + loja).val();
                const nreduz = $('#nreduz_' + codigo + '_' + loja).val();
                const pessoa = $('#pessoa_' + codigo + '_' + loja).val();

                const cnpj = $('#cnpj_' + codigo + '_' + loja).val().replace(/[^\d]/g, '');

                const tipo = $('#tipo_' + codigo + '_' + loja).val();
                const endereco = $('#endereco_' + codigo + '_' + loja).val();
                const bairro = $('#bairro_' + codigo + '_' + loja).val();

                const cidade = $('#cidade_' + codigo + '_' + loja).val().toUpperCase();

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

                        $('#btnEdit_' + codigo + '_' + loja).removeClass('d-none');

                        $('#btnSalvarEdit_'+ codigo + '_' + loja).addClass('d-none');

                    }, 4000);

                } catch (error) {
                    
                    $('#resultado_' + codigo + loja).html("<div class='alert alert-danger'>Erro ao atualizar cliente: " + error.message + "</div>");
                }
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

        function btnEditarCliente (codigo, loja){
            $('#btnSalvarEdit_'+ codigo + '_' + loja).removeClass('d-none');

            $('#btnEdit_' + codigo + '_' + loja).addClass('d-none');

            $('.habilitarCampos_' + codigo + '_' + loja).removeAttr('disabled');
        }
        
    </script>
</body>
</html>
