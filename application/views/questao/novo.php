<?=form_open('questao-salvar')?>
    <table>
        <tr>
            <td>Título</td>
            <td><input type="text" name="questao"/></td>
        </tr>
        
    </table>
    <input type="submit" value="Salvar"/>
<?=form_close()?>
<?=anchor('questao','Voltar')?>