<?=anchor('questao-novo','Nova Questão',array('class' => 'btn btn-secondary'))?>
<?php if ($questoes == FALSE): ?>
    <h3>Nenhuma questão encontrada</h3>
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
                <?php foreach ($questoes as $questao): ?>
                    <tr>
                        <td><?=$questao['questao']?></td>
                        <td><?=anchor('comentario-index/'.$questao['Id'],'Comentários','class="btn btn-primary btn-block"')?></td>
                        <td><?=anchor('questao-editar/'.$questao['Id'],'Editar','class="btn btn-secondary btn-block"')?></td>
                        <td><?=anchor('questao-excluir/'.$questao['Id'],'Excluir','class="btn btn-danger"')?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?=anchor('usuario-novo/','Login','class="btn btn-secondary"')?>
     <?=anchor('usuario-index/','Listar Usuarios','class="btn btn-secondary"')?>
<?php endif; ?>
