/* O código desenvolvido abaixo foi feito a pensando em mostrar todos os usuários do banco assim que a página fosse carregada. */

var objeto = {

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
					"<td><a href='#editar' class='editar btn btn-dark' data-id='" + result[i].id + "'>Editar</span></a>"+
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

	$('#editar').submit(function(){
		var dados = $( this ).serialize();
		obj.cadastrar(dados);

		return false;		
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














