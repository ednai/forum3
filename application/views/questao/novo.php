<?=form_open('questao-salvar')?>

<div class="form-row">

	<label for="exampleFormControlTextarea1">Título</label>
    <textarea class="form-control col-sm-2" rows="5" name="questao"></textarea>
 </div>

<input class="btn btn-secondary" type="submit" value="Salvar"/>
<?=anchor('questao','Voltar',array('class' => 'btn btn-secondary'))?>

<?=form_close()?>
