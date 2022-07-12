<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco[]|\Cake\Collection\CollectionInterface $campeonatoCategoriaGrupoGraduacoes
 */
?>
<?php
$this->assign('title', __('Campeonato Categoria Grupo Graduacoes'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Campeonato Categoria Grupo Graduacoes')],
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
            <?= $this->Html->link(__('New Campeonato Categoria Grupo Graduaco'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
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
                    <th><?= $this->Paginator->sort('campeonato_categoria_grupo_id') ?></th>
                    <th><?= $this->Paginator->sort('graduacao_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($campeonatoCategoriaGrupoGraduacoes as $campeonatoCategoriaGrupoGraduaco) : ?>
                    <tr>
                        <td><?= $this->Number->format($campeonatoCategoriaGrupoGraduaco->id) ?></td>
                        <td><?= h($campeonatoCategoriaGrupoGraduaco->created) ?></td>
                        <td><?= h($campeonatoCategoriaGrupoGraduaco->modified) ?></td>
                        <td><?= $campeonatoCategoriaGrupoGraduaco->has('campeonato_categoria_grupo') ? $this->Html->link($campeonatoCategoriaGrupoGraduaco->campeonato_categoria_grupo->codigo, ['controller' => 'CampeonatoCategoriaGrupos', 'action' => 'view', $campeonatoCategoriaGrupoGraduaco->campeonato_categoria_grupo->id]) : '' ?></td>
                        <td><?= $campeonatoCategoriaGrupoGraduaco->has('graduaco') ? $this->Html->link($campeonatoCategoriaGrupoGraduaco->graduaco->titulo, ['controller' => 'Graduacoes', 'action' => 'view', $campeonatoCategoriaGrupoGraduaco->graduaco->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $campeonatoCategoriaGrupoGraduaco->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campeonatoCategoriaGrupoGraduaco->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campeonatoCategoriaGrupoGraduaco->id], ['class' => 'btn btn-xs btn-outline-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $campeonatoCategoriaGrupoGraduaco->id)]) ?>
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
