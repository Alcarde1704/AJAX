$('#adiciona').click(function () {
  var cpf = $('#cpfcli').val()
  var nome = $('#nomecli').val()

  var dados = new Object()
  dados['clicpf'] = cpf
  dados['clinome'] = nome

  var pacote = { dados: JSON.stringify(dados) }
  var form = new FormData()
  for (item in pacote) {
    form.append(item, pacote[item])
  }

  $.ajax({
    url: 'ajax_insere.php',
    type: 'POST',

    success: function (retorno) {
      if (retorno == 'sucesso') {
        location.reload()
      } else if (retorno == 'erro') {
        alert('nao foi possivel inserir')
      }
    },

    data: form,
    cache: false,
    contentType: false,
    processData: false
  })
})

$('#adiciona-produto').click(function () {
  var nome = $('#produto').val()
  var valor = $('#preco').val()
  var cor = $('#cor').val()

  var dados = new Object()
  dados['prodnome'] = nome
  dados['prodvalor'] = valor
  dados['prodcor'] = cor

  var pacote = { dados: JSON.stringify(dados) }
  var form = new FormData()
  for (item in pacote) {
    form.append(item, pacote[item])
  }

  $.ajax({
    url: 'ajax_insere_produto.php',
    type: 'POST',

    success: function (retorno) {
      if (retorno == 'sucesso') {
        location.reload()
      } else if (retorno == 'erro') {
        alert('nao foi possivel inserir')
      }
    },

    data: form,
    cache: false,
    contentType: false,
    processData: false
  })
})

$('#salvar').click(function () {
  var cpf = $('#cpfcli').val()
  var nome = $('#nomecli').val()
  var id = $('#idcli').val()

  var dados = new Object()
  dados['clicpf'] = cpf
  dados['clinome'] = nome
  dados['cliid'] = id

  var pacote = { dados: JSON.stringify(dados) }
  var form = new FormData()
  for (item in pacote) {
    form.append(item, pacote[item])
  }

  $.ajax({
    url: 'ajax_edita.php',
    type: 'POST',

    success: function (retorno) {
      if (retorno == 'sucesso') {
        location = 'cadastro.php'
      } else if (retorno == 'erro') {
        alert('nao foi possivel alterar')
      }
    },
    data: form,
    cache: false,
    contentType: false,
    processData: false
  })
})

$('#salvar-produto').click(function () {
  var produto = $('#produto').val()
  var preco = $('#preco').val()
  var id = $('#idpro').val()

  var dados_produto = new Object()
  dados_produto['prodnome'] = produto
  dados_produto['prodpreco'] = preco
  dados_produto['prodid'] = id

  var pacote = { dados_produto: JSON.stringify(dados_produto) }
  var form = new FormData()
  for (item in pacote) {
    form.append(item, pacote[item])
  }

  $.ajax({
    url: 'ajax_editar_produto.php',
    type: 'POST',

    success: function (retorno) {
      if (retorno == 'sucesso') {
        location = 'cadastro.php'
      } else if (retorno == 'erro') {
        alert('nao foi possivel alterar')
      }
    },
    data: form,
    cache: false,
    contentType: false,
    processData: false
  })
})

$('.acao_excluir').click(function () {
  var id = this.getAttribute('bancoid')

  var dados = new Object()
  dados['cliid'] = id

  var pacote = { dados: JSON.stringify(dados) }
  var form = new FormData()
  for (item in pacote) {
    form.append(item, pacote[item])
  }

  $.ajax({
    url: 'ajax_exclui.php',
    type: 'POST',

    success: function (retorno) {
      if (retorno == 'sucesso') {
        location.reload()
      } else if (retorno == 'erro') {
        alert('nao foi possivel excluir')
      }
    },
    data: form,
    cache: false,
    contentType: false,
    processData: false
  })
})

$('.acao_excluir').click(function () {
  var id = this.getAttribute('bancoid')

  var dados = new Object()
  dados['prodid'] = id

  var pacote = { dados: JSON.stringify(dados) }
  var form = new FormData()
  for (item in pacote) {
    form.append(item, pacote[item])
  }

  $.ajax({
    url: 'ajax_exclui_produto.php',
    type: 'POST',

    success: function (retorno) {
      if (retorno == 'sucesso') {
        location.reload()
      } else if (retorno == 'erro') {
        alert('nao foi possivel excluir')
      }
    },
    data: form,
    cache: false,
    contentType: false,
    processData: false
  })
})
