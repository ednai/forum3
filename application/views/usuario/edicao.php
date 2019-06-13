<?=form_open('usuario-atualizar')?>
    <input type="hidden" name="Id" value="<?=$usuario['Id']?>">
    <table>
        <tr>
            <td>Login</td>
            <td><input type="text" name="usuario" value="<?=$usuario['usuario']?>"/></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input type="password" name="senha" value="<?=$senha['senha']?>"/></td>
        </tr>
        
    </table>
    <input class="btn btn-secondary" type="submit" value="Atualizar"/>
    <?=anchor('usuario-index','Voltar', array('class' => 'btn btn-secondary'))?>
<?=form_close()?> 