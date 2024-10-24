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
<input type="text" id="loja" placeholder="Loja" required>
<input type="text" id="nome" placeholder="Nome" required>
<button type="submit" class="btn btn-success">Incluir Cliente</button>
</form>
<div id="resultado" class="mt-3"></div>
</div>
 
    <script>
        
        $('#listarClientes').on('click', async function (){
            var response = await fetch("http://localhost:8091/restapi/clientes/listar", {
            method: "GET", // ou "POST" se necessário
            headers: {
                "Content-Type": "application/json", // Define o tipo de conteúdo
                "Authorization": "Basic YWRtaW46IA==" // Substitua por seu token de autorização
            }
            });
            

            var data = await response.json();
            var clientesList = $('#clientesLista').html();

            alert(data);
 
            $('#clientesLista').html('');
            // data.forEach(cliente => {
            //     clientesList.innerHTML += `<div>${cliente.codigo} - ${cliente.nome}</div>`;
            // });
        });
 

        $('#formIncluir').on('click', function (){

            var response = await fetch("http://localhost:8091/restapi/clientes/listar", {
            method: "GET", // ou "POST" se necessário
            headers: {
                "Content-Type": "application/json", // Define o tipo de conteúdo
                "Authorization": "Basic YWRtaW46IA==" // Substitua por seu token de autorização
            }
            });
            

            var data = await response.json();
            var clientesList = $('#clientesLista').html();

            alert(data);
 
            $('#clientesLista').html('');

            alert('kakakakakaka');
        });

</script>
</body>
</html>