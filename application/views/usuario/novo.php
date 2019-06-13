<?=form_open('usuario-salvar')?>

<div class="form-row">

	<label for="exampleFormControlTextarea1">  Login   </label></br>	

    <input type:"text" class="form-control col-sm-2" rows="5" name="usuario">

    <label for="exampleFormControlTextarea1">  senha  </label></br>	
    <input type:"password" class="form-control col-sm-2" rows="5" name="Senha"> 
   
 </div>

<input class="btn btn-secondary" type="submit" value="Salvar"/>
<?=anchor('usuario-index','Voltar', array('class' => 'btn btn-secondary'))?>

<?=form_close()?>
