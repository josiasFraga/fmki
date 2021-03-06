<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Academia[]|\Cake\Collection\CollectionInterface $academias
 */
?>
<?php
$this->assign('title', __('Academias'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Academias')],
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
            <?= $this->Html->link(__('New Academia'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th>Logo</th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('sensei') ?></th>
                    <th><?= $this->Paginator->sort('estilo') ?></th>
                    <th><?= $this->Paginator->sort('cidade_id') ?></th>
                    <th><?= $this->Paginator->sort('endereco') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('facebook') ?></th>
                    <th><?= $this->Paginator->sort('instagram') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($academias as $academia) : ?>
                    <tr>
                        <td><?= $this->Number->format($academia->id) ?></td>
                        <td><?= $this->Html->image('academias/logo/'.$academia->img_dir.'/square_'.$academia->logo, ["height"=> 50, "width"=>50]) ?></td>
                        <td><?= h($academia->created) ?></td>
                        <td><?= h($academia->modified) ?></td>
                        <td><?= h($academia->nome) ?></td>
                        <td><?= h($academia->sensei) ?></td>
                        <td><?= h($academia->estilo) ?></td>
                        <td><?= $academia->has('cidade') ? $this->Html->link($academia->cidade->name, ['controller' => 'Cidades', 'action' => 'view', $academia->cidade->id]) : '' ?></td>
                        <td><?= h($academia->endereco) ?></td>
                        <td><?= h($academia->telefone) ?></td>
                        <td><?= h($academia->facebook) ?></td>
                        <td><?= h($academia->instagram) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $academia->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $academia->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $academia->id], ['class' => 'btn btn-xs btn-outline-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $academia->id)]) ?>
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
