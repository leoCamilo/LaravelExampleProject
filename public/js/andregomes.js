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

const question_html = '<div class="card-collapse"><div class="card-header" role="tab" id="?"><h5 class="mb-0 text-center"><a data-toggle="collapse" href="#collapseQuestion?" aria-expanded="false" aria-controls="collapseQuestion?" class="collapsed">Questão #?<i class="material-icons">keyboard_arrow_down</i></a></h5></div><div id="collapseQuestion?" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style=""><div class="card-body"><div class="row"><div class="col-md-12"><div class="form-group has-warning"><div class="form-group"><textarea name="content?" class="form-control" rows="5" required="true" aria-required="true" placeholder="Digite a pergunta aqui"></textarea></div></div></div></div><div class="row"><div class="col-md-1 checkbox-radios text-center"><div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="correctOpt?" value="1" checked=""><span class="circle"><span class="check"></span></span></label></div></div><div class="col-md-11"><div class="form-group has-warning"><label class="bmd-label-floating">resposta</label><input name="answer1_?" type="text" class="form-control" required="true" aria-required="true"></div></div></div><div class="row"><div class="col-md-1 checkbox-radios text-center"><div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="correctOpt?" value="2"><span class="circle"><span class="check"></span></span></label></div></div><div class="col-md-11"><div class="form-group has-warning"><label class="bmd-label-floating">resposta</label><input name="answer2_?" type="text" class="form-control" required="true" aria-required="true"></div></div></div><div class="row"><div class="col-md-1 checkbox-radios text-center"><div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="correctOpt?" value="3"><span class="circle"><span class="check"></span></span></label></div></div><div class="col-md-11"><div class="form-group has-warning"><label class="bmd-label-floating">resposta</label><input name="answer3_?" type="text" class="form-control" required="true" aria-required="true"></div></div></div><div class="row"><div class="col-md-1 checkbox-radios text-center"><div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="correctOpt?" value="4"><span class="circle"><span class="check"></span></span></label></div></div><div class="col-md-11"><div class="form-group has-warning"><label class="bmd-label-floating">resposta</label><input name="answer4_?" type="text" class="form-control" required="true" aria-required="true"></div></div></div><div class="row"><div class="col-md-1 checkbox-radios text-center"><div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="correctOpt?" value="5"><span class="circle"><span class="check"></span></span></label></div></div><div class="col-md-11"><div class="form-group has-warning"><label class="bmd-label-floating">resposta</label><input name="answer5_?" type="text" class="form-control" required="true" aria-required="true"></div></div></div></div></div></div>';

$(document).ready(function()
{
	// ================ config questions page ===================
	
	var question_idx = 2;
	$('#add_question_btn').click(function() { $("#questions_div").append(question_html.replace(/\?/g, question_idx++)); });
});