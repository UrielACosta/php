/* O código desenvolvido abaixo foi feito a pensando em mostrar todos os usuários do banco assim que a página fosse carregada. */

var objeto = {

	editar : function(dados){
		

		$.ajax({
			type: "POST",
			url: "http://localhost/site/editar.php",
			data: dados,
			success: function()
			{
				/* Chamando a função de busca para que imprima na tela o usuário novo assim que for cadastrado. */
				objeto.busca();
			}

		});
	},

	listEdit : function (id) {
		$.ajax({
			type: "GET",
			url: "http://localhost/site/listEdit.php",
			data: {
				id:id
			},
			success: function(dados){
				var html = null;
				var result = JSON.parse(dados);


				$('#id').val(result[0].id);
					
				$('#idNomeEdit').val(result[0].idEmail);
				$('#idEmailEdit').val(result[0].email);
				$('#idTelefoneEdit').val(result[0].telefone);
				$('#idDataNascEdit').val(result[0].dataNasc);
				$('#idCargoEdit').val(result[0].id);
				$('#idSalarioEdit').val(result[0].id);
				$('#idFotoEdit').val(result[0].id);




			}




		})
		
	},

	deletar : function (id){
		
		$.ajax({
			type: "POST",
			url: "http://localhost/site/deletar.php",
			data: {
				id: id
			},
			success: function(id)
			{
				/* Chamando a função de busca para que imprima na tela o usuário novo assim que for cadastrado. */
				objeto.busca();
			}

		});
	},

	cadastrar : function(dados){
		

		$.ajax({
			type: "POST",
			url: "http://localhost/site/cadastro.php",
			data: dados,
			success: function()
			{
				/* Chamando a função de busca para que imprima na tela o usuário novo assim que for cadastrado. */
				objeto.busca();
			}

		});
	},
	

	busca : function() {
		$.ajax({
			url: "http://localhost/site/listagem.php",
			type: "GET",
			success: function(dados){
				var html = null;
				var result = JSON.parse(dados);

				for(var i=0; i < result.length; i++){
					html += "<tr>" +
					"<td>" + result[i].id + "</td>" +
					"<td>" + result[i].nome + "</td>" +
					"<td>" + result[i].email + "</td>" +
					"<td>" + result[i].telefone + "</td>" +
					"<td>" + result[i].dataNasc + "</td>" +
					"<td>" + result[i].cargo + "</td>" +
					"<td>" + result[i].salario + "</td>" +
					"<td>" + result[i].foto + "</td>" +
					"<td><a href='#editar' class='listEdit btn btn-dark' data-id='" + result[i].id + "'>Editar</span></a>"+
					"<td><a href='#' class='deletar btn btn-info' data-id='" + result[i].id + "'>Excluir</span></a>" 
					"</tr>"

				}
				// 
				$("#conteudo").html(html);	

				$('.deletar').click(function(e){
					e.preventDefault();
					var id = $(this).attr('data-id');
					objeto.deletar(id);
				})

			}

			

		})


	}
}		
/* Chamando a função de busca para que imprima na tela todos os usuários do banco assim que a página for carregada. */


objeto.busca();
// var obj = new objeto;


$(document).ready(function(){
	$('#btnAcessa').click(){
		$('#editarSection').hide();
		$('#tabela').hide();
	}

	$('#btn-edit').click(){
		$('#cadastro').hide();
		$('#editarSection').show();
		$('#tabela').hide();
	}


   $('#cadastro').hide();
   $('#editarSection').hide();

	$('.listEdit').click(function(){
		
		var id = $(this).attr('data-id');
		objeto.listEdit(id);
		return false;
	})

	$('#editar').submit(function(){
		var dados = $( this ).serialize();
		// var obj = new objeto;
		objeto.editar(dados);

		return false;		
	})

	$('#usuario').submit(function(){
		var dados = $( this ).serialize();
		// var obj = new objeto;
		objeto.cadastrar(dados);

		return false;		
	})
//Função aqui funciona só uma vez, por causa do document .ready
$('.deletar').click(function(e){
	e.preventDefault();
	var id = $(this).attr('data-id');
	objeto.deletar(id);
})


});

function myFunction() {
	var input, filter, table, tr, td, i;
	input = document.getElementById("myInput");

	filter = input.value.toUpperCase();

	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[0];
		if (td) {
			if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
		}       
	}
}















