// Script para acionar modal - Adicionar

$('.add').on('click', function(){
	var nome = $(this).data('nome'); // vamos buscar o valor do atributo data-name que temos no botão que foi clicado
	var id = $(this).data('id'); // vamos buscar o valor do atributo data-id
    $('span.nome').text(nome+ ' (id = ' +id+ ')'); // inserir na o nome na pergunta de confirmação dentro da modal - propriedade data-nome, no botão de abertura do modal
	$('a.add-yes').attr('href', 'cadastrando.php?id=' +id); // mudar dinamicamente o link, href do botão confirmar da modal
	$('#modaladd').modal('show'); // modal aparece
});

// Script para acionar modal - Alterar

$('.alterar').on('click', function(){
	var nome = $(this).data('nome'); // vamos buscar o valor do atributo data-name que temos no botão que foi clicado
	var id = $(this).data('id'); // vamos buscar o valor do atributo data-id
      
    var nomecompleto = $(this).data('nomecompleto');  
    var datanasc = $(this).data('datanasc');     
    var rm = $(this).data('rm');     
	var ra = $(this).data('ra');      
    var nomemae = $(this).data('nomemae');  
    var telefone = $(this).data('telefone');     
    var endereco = $(this).data('endereco');  

    $('#id').val(id);  
    $('#nomecompleto').val(nomecompleto);  
    $('#datanasc').val(datanasc);  
    $('#rm').val(rm); 
    $('#ra').val(ra);  
    $('#nomemae').val(nomemae);  
    $('#telefone').val(telefone);  
    $('#endereco').val(endereco); 

	$('span.nome').text('[ id: ' +id+ ' ]'); // inserir na o nome na pergunta de confirmação dentro da modal - propriedade data-nome, no botão de abertura do modal
	$('a.altera-yes').attr('href', 'atualiza.php?id=' +id); // mudar dinamicamente o link, href do botão confirmar da modal
	$('#modalalterar').modal('show'); // modal aparece
});

// Script para acionar modal - Deletar

$('.deletar').on('click', function(){
	var nome = $(this).data('nome'); // vamos buscar o valor do atributo data-name que temos no botão que foi clicado
	var id = $(this).data('id'); // vamos buscar o valor do atributo data-id
    $('span.nome').text('[ id: ' +id+ ' ] ?'); // inserir na o nome na pergunta de confirmação dentro da modal - propriedade data-nome, no botão de abertura do modal
	$('a.deleta-yes').attr('href', 'deleta.php?id=' +id); // mudar dinamicamente o link, href do botão confirmar da modal
	$('#modaldeletar').modal('show'); // modal aparece
});
