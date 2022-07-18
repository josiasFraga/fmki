<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoCategoria[]|\Cake\Collection\CollectionInterface $campeonatoCategorias
 */
?>
<?php
$this->assign('title', __('Campeonato Categorias'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Campeonato Categorias')],
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
            <?= $this->Html->link(__('New Campeonato Categoria'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
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
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('categoria') ?></th>
                    <th><?= $this->Paginator->sort('limite_min_idade') ?></th>
                    <th><?= $this->Paginator->sort('limite_max_idade') ?></th>
                    <th><?= $this->Paginator->sort('limite_min_peso') ?></th>
                    <th><?= $this->Paginator->sort('limite_max_peso') ?></th>
                    <th><?= $this->Paginator->sort('limite_min_altura') ?></th>
                    <th><?= $this->Paginator->sort('limite_max_altura') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($campeonatoCategorias as $campeonatoCategoria) : ?>
                    <tr>
                        <td><?= $this->Number->format($campeonatoCategoria->id) ?></td>
                        <td><?= h($campeonatoCategoria->created) ?></td>
                        <td><?= h($campeonatoCategoria->modified) ?></td>
                        <td><?= h($campeonatoCategoria->titulo) ?></td>
                        <td><?= h($campeonatoCategoria->categoria) ?></td>
                        <td><?= $this->Number->format($campeonatoCategoria->limite_min_idade) ?></td>
                        <td><?= $this->Number->format($campeonatoCategoria->limite_max_idade) ?></td>
                        <td><?= $this->Number->format($campeonatoCategoria->limite_min_peso) ?></td>
                        <td><?= $this->Number->format($campeonatoCategoria->limite_max_peso) ?></td>
                        <td><?= $this->Number->format($campeonatoCategoria->limite_min_altura) ?></td>
                        <td><?= $this->Number->format($campeonatoCategoria->limite_max_altura) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $campeonatoCategoria->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campeonatoCategoria->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campeonatoCategoria->id], ['class' => 'btn btn-xs btn-outline-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $campeonatoCategoria->id)]) ?>
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
