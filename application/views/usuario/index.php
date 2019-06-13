<?=anchor('usuario-novo','Novo Usuario',array('class' => 'btn btn-secondary'))?>
<?php if ($usuarios == FALSE): ?>
    <h3>Nenhum Usuario Cadastrado</h3>
<?php else: ?>
    <div class="container">

        <table class="table table-striped table-light">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?=$usuario['usuario']?></td>
                   
                    <td><?=anchor('usuario-editar/'.$usuario['Id'],'Editar','class="btn btn-secondary btn-block"')?></td>
                    <td><?=anchor('usuario-excluir/'.$usuario['Id'],'Excluir','class="btn btn-secondary btn-block"')?></td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif;?>
