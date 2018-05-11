function show_save_loading() {
	swal({
		title: "Salvando",
		text: "Aguarde enquanto seu novo post é publicado",
		imageUrl: '/img/progress.gif',
		showConfirmButton: false
	});
}

function delete_info(id, url)
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
			url: url + id,
			type: 'DELETE',
			success: function(result)
			{
				swal({
					title: 'Removido!',
					type: 'success',
					confirmButtonClass: "btn btn-success",
					buttonsStyling: false
				}).then(() => window.location.href = '/' + url.split('/')[2]);
			}
		});

	}).catch(swal.noop)
}

function set_visibility(id, url)
{
	swal({
		title: 'Alterar visualização?',
		type: 'warning',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-danger',
		cancelButtonClass: 'btn btn-success',
		confirmButtonText: 'Sim, quero alterar!',
		buttonsStyling: false
	}).then(function() {

		$.ajax({
			url: url + id,
			type: 'PUT',
			success: function(result)
			{
				swal({
					title: 'Alterado!',
					type: 'success',
					confirmButtonClass: "btn btn-success",
					buttonsStyling: false
				}).then(() => window.location.href = '/' + url.split('/')[2]);
			}
		});

	}).catch(swal.noop)
}