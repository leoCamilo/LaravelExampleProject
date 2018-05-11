function show_save_loading() {
	swal({
		title: "Salvando",
		text: "Aguarde enquanto seu novo post é publicado",
		imageUrl: '/img/progress.gif',
		showConfirmButton: false
	});
}

function delete_news(id)
{
	swal({
		title: 'Quer mesmo deletar?',
		text: "Você não poderá reverter esta ação!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-danger',
		cancelButtonClass: 'btn btn-success',
		confirmButtonText: 'Sim, quero deletar!',
		buttonsStyling: false
	}).then(function() {

		$.ajax({
			url: '/api/news/' + id,
			type: 'DELETE',
			success: function(result)
			{
				swal({
					title: 'Removido!',
					text: 'Essa novidade não existe mais.',
					type: 'success',
					confirmButtonClass: "btn btn-success",
					buttonsStyling: false
				}).then(() => window.location.href = "/news");
			}
		});

	}).catch(swal.noop)
}