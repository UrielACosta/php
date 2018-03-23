/* O código desenvolvido abaixo foi feito a pensando em mostrar todos os usuários do banco assim que a página fosse carregada. */

// $(function () {

//     var form;
//     $('#fileUpload').change(function (event) {
//         form = new FormData();
//         form.append('fileUpload', event.target.files[0]); // para apenas 1 arquivo
//         //var name = event.target.files[0].content.name; // para capturar o nome do arquivo com sua extenção
//     });

//     $('#btnEnviar').click(function () {
//         $.ajax({
//             url: 'URL SERVER', // Url do lado server que vai receber o arquivo
//             data: form,
//             processData: false,
//             contentType: false,
//             type: 'POST',
//             success: function (data) {
//                 // utilizar o retorno
//             }
//         });
//     });
// });

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

				for(var i=0; i < result.length; i++){
					html += "<option value='"+ result[i].id_perfil +"'>" + result[i].nome_Perfil+"</option>" 
					
					

				}
				$("#idPerfil").html(html);	
				$('#id').val(result[0].id);	
				$('#idNomeEdit').val(result[0].nome);
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

	buscaPerfil : function() {
		$.ajax({
			url: "http://localhost/site/listagemPerfil.php",
			type: "GET",
			success: function(dados){
				var html = null;
				var result = JSON.parse(dados);


				for(var i=0; i < result.length; i++){
					html += "<option value='"+ result[i].id_perfil +"'>" + result[i].nome_Perfil+"</option>" 
					
					

				}
				
				$("#idPerfil").html(html);	
			}


		})


	},

	cadastrarPerfil : function(dados){
		

		$.ajax({
			type: "POST",
			url: "http://localhost/site/cadastrarPerfil.php",
			data: dados,
			success: function()
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
					"<td>" + result[i].nome_Perfil + "</td>" +
					"<td>" + result[i].descricao + "</td>" +
				
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

objeto.buscaPerfil();
// var obj = new objeto;


$(document).ready(function(){

	$('#btnCadastrar').click(function(){
		
		$('#cadastro').show();
		$('#editarSection').hide();
		
	})

	$('#btnEditar').click(function(){
		
		$('#cadastro').hide();
		$('#editarSection').show();
		
	})
		


   $('#cadastro').hide();
   $('#editarSection').hide();

	$('.listEdit').click(function(){
		$('#cadastro').hide();
		$('#editarSection').show();
		var id = $(this).attr('data-id');
		objeto.listEdit(id);
		
	})

	$('#editar').submit(function(){
		var dados = $( this ).serialize();
		// var obj = new objeto;
		objeto.editar(dados);

		return false;		
	})


	$('#cadastrarPerfil').submit(function(){

		var dados = $( this ).serialize();


		objeto.cadastrarPerfil(dados);

		return false;		
	})

	$('#usuario').submit(function(){
		var dados = $( this ).serialize();

		
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
		td = tr[i].getElementsByTagName("td")[1];
		if (td) {
			if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
		}       
	}
}















