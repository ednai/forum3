<?=form_open('comentario-atualizar')?>
    <input type="hidden" name="Id" value="<?=$comentario['Id']?>">
    <input type="hidden" name="id_questao" value="<?=$comentario['id_questao']?>">
    <table>
        <tr>
            <td>Título</td>
            <td><input type="text" name="comentario" value="<?=$comentario['comentario']?>"/></td>
        </tr>        
    </table>
    <input type="submit" class='btn btn-secondary' value="Atualizar"/>
	<?=anchor('comentario-index/'.$comentario['id_questao'],'Voltar', array('class' => 'btn btn-secondary'))?>
<?=form_close()?>

