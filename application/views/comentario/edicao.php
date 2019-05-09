<?=form_open('comentario-atualizar')?>
    <input type="hidden" name="Id" value="<?=$comentario['Id']?>">
    <table>
        <tr>
            <td>Título</td>
            <td><input type="text" name="comentario" value="<?=$comentario['comentario']?>"/></td>
        </tr>
        
    </table>
    <input type="submit" value="Atualizar"/>
<?=form_close()?>
<?=anchor('comentario-index','Voltar', array('class' => 'btn btn-secondary'))?>
