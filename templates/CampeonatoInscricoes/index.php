<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoInscrico[]|\Cake\Collection\CollectionInterface $campeonatoInscricoes
 */
?>
<?php
$this->assign('title', __('Campeonato Inscricoes'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Campeonato Inscricoes')],
]);
?>

<div class="card card-primary card-outline">
    <div class="card-header d-sm-flex">
        <h2 class="card-title">
            <!-- -->
        </h2>
        <div class="card-toolbox">
            <?= $this->Paginator->limitControl([], null, [
                'label' => false,
                'class' => 'form-control-sm',
            ]); ?>
            <?= $this->Html->link(__('New Campeonato Inscrico'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('campeonato_id') ?></th>
                    <th><?= $this->Paginator->sort('aluno_id') ?></th>
                    <th><?= $this->Paginator->sort('academia_id') ?></th>
                    <th><?= $this->Paginator->sort('categoria_id') ?></th>
                    <th><?= $this->Paginator->sort('divisao_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($campeonatoInscricoes as $campeonatoInscrico) : ?>
                    <tr>
                        <td><?= $this->Number->format($campeonatoInscrico->id) ?></td>
                        <td><?= h($campeonatoInscrico->created) ?></td>
                        <td><?= h($campeonatoInscrico->modified) ?></td>
                        <td><?= $campeonatoInscrico->has('campeonato') ? $this->Html->link($campeonatoInscrico->campeonato->nome, ['controller' => 'Campeonatos', 'action' => 'view', $campeonatoInscrico->campeonato->id]) : '' ?></td>
                        <td><?= $campeonatoInscrico->has('aluno') ? $this->Html->link($campeonatoInscrico->aluno->nome, ['controller' => 'Alunos', 'action' => 'view', $campeonatoInscrico->aluno->id]) : '' ?></td>
                        <td><?= $campeonatoInscrico->has('academia') ? $this->Html->link($campeonatoInscrico->academia->nome, ['controller' => 'Academias', 'action' => 'view', $campeonatoInscrico->academia->id]) : '' ?></td>
                        <td><?= $campeonatoInscrico->has('campeonato_categoria') ? $this->Html->link($campeonatoInscrico->campeonato_categoria->titulo, ['controller' => 'CampeonatoCategorias', 'action' => 'view', $campeonatoInscrico->campeonato_categoria->id]) : '' ?></td>
                        <td><?= $campeonatoInscrico->has('campeonato_diviso') ? $this->Html->link($campeonatoInscrico->campeonato_diviso->id, ['controller' => 'CampeonatoDivisoes', 'action' => 'view', $campeonatoInscrico->campeonato_diviso->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $campeonatoInscrico->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campeonatoInscrico->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campeonatoInscrico->id], ['class' => 'btn btn-xs btn-outline-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $campeonatoInscrico->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->

    <div class="card-footer d-md-flex paginator">
        <div class="mr-auto" style="font-size:.8rem">
            <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
        </div>
        <ul class="pagination pagination-sm">
            <?= $this->Paginator->first('<i class="fas fa-angle-double-left"></i>', ['escape' => false]) ?>
            <?= $this->Paginator->prev('<i class="fas fa-angle-left"></i>', ['escape' => false]) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('<i class="fas fa-angle-right"></i>', ['escape' => false]) ?>
            <?= $this->Paginator->last('<i class="fas fa-angle-double-right"></i>', ['escape' => false]) ?>
        </ul>
    </div>
    <!-- /.card-footer -->
</div>
