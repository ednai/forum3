<?=form_open('questao-atualizar')?>
    <input type="hidden" name="Id" value="<?=$questao['Id']?>">
    <table>
        <tr>
            <td>Título</td>
            <td><input type="text" name="questao" value="<?=$questao['questao']?>"/></td>
        </tr>
        
    </table>
    <input type="submit" value="Atualizar"/>
<?=form_close()?>
<?=anchor('questao-index','Voltar', array('class' => 'btn btn-secondary'))?>

