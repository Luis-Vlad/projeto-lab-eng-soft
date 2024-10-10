<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clientes</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>Gerenciamento de Clientes</h1>
<h2>Listar Clientes</h2>
<button id="listar-clientes" class="btn btn-primary">Listar Clientes</button>
<div id="clientes-list" class="mt-3"></div>
<h2>Incluir Cliente</h2>
<form id="form-incluir">
<input type="text" id="codigo" placeholder="Código" required>
<input type="text" id="loja" placeholder="Loja" required>
<input type="text" id="nome" placeholder="Nome" required>
<button type="submit" class="btn btn-success">Incluir Cliente</button>
</form>
<div id="resultado" class="mt-3"></div>
</div>
 
    <script>
        document.getElementById('listar-clientes').addEventListener('click', async () => {
            const response = await fetch('/api/clientes');
            const data = await response.json();
            const clientesList = document.getElementById('clientes-list');
 
            clientesList.innerHTML = '';
            data.forEach(cliente => {
                clientesList.innerHTML += `<div>${cliente.codigo} - ${cliente.nome}</div>`;
            });
        });
 
        document.getElementById('form-incluir').addEventListener('submit', async (event) => {
            event.preventDefault();
            const codigo = document.getElementById('codigo').value;
            const loja = document.getElementById('loja').value;
            const nome = document.getElementById('nome').value;
 
            const response = await fetch('/api/clientes', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ codigo, loja, nome }),
            });
 
            const result = await response.json();
            document.getElementById('resultado').innerText = result.resultado || result.error;
        });
</script>
</body>
</html>