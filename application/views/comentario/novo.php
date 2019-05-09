<?=form_open('comentario-salvar')?>

<div class="form-row">

	<label for="exampleFormControlTextarea1">Título</label>
    <textarea class="form-control col-sm-2" rows="5" name="comentario"></textarea>
 </div>

<input class="btn btn-secondary" type="submit" value="Salvar"/>
<?=anchor('comentario-index','Voltar', array('class' => 'btn btn-secondary'))?>

<?=form_close()?>
