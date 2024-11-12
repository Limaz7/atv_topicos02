document.addEventListener("DOMContentLoaded", () => {
    listarTodos();
});

function listarTodos() {
    fetch("listar.php",
        {
            method: "GET",
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    )
        .then(response => response.json())
        .then(pedidos => inserirPedidos(pedidos))
        .catch(error => console.log(error));
}

function inserirPedidos(pedidos) {
    for (const pedido of pedidos) {
        inserirPedido(pedido);  
    }
}

function inserirPedido(pedido) {
    let tbody = document.getElementById('pedidos');
    let tr = document.createElement('tr');
    let tdId = document.createElement('td');
    tdId.innerHTML = pedido.id_pedido;
    let tdNome = document.createElement('td');
    tdNome.innerHTML = pedido.nome;
    let tdDesc = document.createElement('td');
    tdDesc.innerHTML = pedido.descricao;
    let tdCat = document.createElement('td');
    tdCat.innerHTML = pedido.categoria;
    let tdAlterar = document.createElement('td');
    let btnAlterar = document.createElement('button');
    btnAlterar.innerHTML = "Alterar";
    btnAlterar.classList.add('waves-light', 'waves-effect', 'btn');
    btnAlterar.style.background = 'black';
    btnAlterar.addEventListener("click", buscaPedido, false);
    btnAlterar.id_pedido = pedido.id_pedido;
    tdAlterar.appendChild(btnAlterar);
    let tdExcluir = document.createElement('td');
    let btnExcluir = document.createElement('button');
    btnExcluir.classList.add('waves-light', 'waves-effect', 'btn');
    btnExcluir.style.background = "black";
    btnExcluir.addEventListener("click", excluir, false);
    btnExcluir.id_pedido = pedido.id_pedido;
    btnExcluir.innerHTML = "Excluir";
    tdExcluir.appendChild(btnExcluir);
    tr.appendChild(tdId);
    tr.appendChild(tdNome);
    tr.appendChild(tdDesc);
    tr.appendChild(tdCat);
    tr.appendChild(tdAlterar);
    tr.appendChild(tdExcluir);
    tbody.appendChild(tr);
}

function excluir(evt) {
    let id_pedido = evt.currentTarget.id_pedido;
    let excluir = confirm("Você tem certeza que deseja excluir?");
    if (excluir == true) {
        fetch('excluir.php?id_pedido=' + id_pedido,
            {
                method: "GET",
                headers: { 'Content-Type': "application/json; charset=UTF-8" }
            }
        )
            .then(response => response.json())
            .then(retorno => excluirPedido(retorno, id_pedido))
            .catch(error => console.log(error));
    }
}

function excluirPedido(retorno, id_pedido) {
    if (retorno == true) {
        let tbody = document.getElementById('pedidos');
        for (const tr of tbody.children) {
            if (tr.children[0].innerHTML == id_pedido) {
                tbody.removeChild(tr);
            }
        }
    }
}


function alterarPedido(pedido) {
    let tbody = document.getElementById('pedidos');
    for (const tr of tbody.children) {
        if (tr.children[0].innerHTML == pedido.id_pedido) {
            tr.children[1].innerHTML = pedido.nome;
            tr.children[2].innerHTML = pedido.descricao;
            tr.children[3].innerHTML = pedido.categoria;
        }
    }
}

function buscaPedido(evt) {
    let id_pedido = evt.currentTarget.id_pedido;
    fetch('buscarPedidos.php?id_pedido=' + id_pedido,
        {
            method: "GET",
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    )
        .then(response => response.json())
        .then(pedido => preencheForm(pedido))
        .catch(error => console.log(error));
}

function preencheForm(pedido) {
    let inputIDPedido = document.getElementsByName("id_pedido")[0];
    inputIDPedido.value = pedido.id_pedido;
    let inputNome = document.getElementsByName("nome")[0];
    inputNome.value = pedido.nome;
    let inputDesc = document.getElementsByName("desc")[0];
    inputDesc.value = pedido.descricao;
    let inputCat = document.getElementsByName("cat")[0];
    inputCat.value = pedido.categoria;
}

function salvarPedido(event) {
    // parar o comportamento padrão do form
    event.preventDefault();


    let inputIDPedido= document.getElementsByName("id_pedido")[0];
    let id_pedido = inputIDPedido.value;
    let inputNome = document.getElementsByName("nome")[0];
    let nome = inputNome.value;
    let inputDesc = document.getElementsByName("desc")[0];
    let descricao = inputDesc.value;
    let inputCat = document.getElementsByName("cat")[0];
    let categoria = inputCat.value;

    if(id_pedido == null) {
        cadastrar(nome, descricao, categoria);
    } else {
        alterar(id_pedido, nome, descricao, categoria);
    }

    document.getElementsByTagName('form')[0].reset();
}

function cadastrar(nome, descricao, categoria) {
    fetch('inserir.php',
        {
            method: 'POST',
            body: JSON.stringify({
                nome: nome,
                descricao: descricao,
                categoria: categoria
            }),
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    )
        .then(response => response.json())
        .then(pedido => inserirPedido(pedido))
        .catch(error => console.log(error));
}

function alterar(id_pedido, nome, descricao, categoria) {
    fetch('alterar.php',
        {
            method: 'POST',
            body: JSON.stringify({
                id_pedido: id_pedido,
                nome: nome,
                descricao: descricao,
                categoria: categoria
            }),
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    )
        .then(response => response.json())
        .then(pedido => alterarPedido(pedido))
        .catch(error => console.log(error));
}