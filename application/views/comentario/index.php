<?=anchor('comentario-novo/'.$id_questao,'Novo Comentario',array('class' => 'btn btn-secondary'))?>

<?php if ($comentarios == FALSE): ?>
    <h3>Nenhum mentario encontrado</h3>
<?php else: ?>
    <div class="container">

        <table class="table table-striped table-light">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comentarios as $comentario): ?>
                    <tr>
                        <td><?=$comentario['comentario']?></td>
                    <td><?=anchor('comentario-editar/'.$id_questao.'/'.$comentario['Id'],'Editar','class="btn btn-secondary btn-block"')?></td>
                        <td><?=anchor('comentario-excluir/'.$comentario['Id'],'Excluir','class="btn btn-danger"')?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
