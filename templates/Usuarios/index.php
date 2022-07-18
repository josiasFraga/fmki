<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<?php
$this->assign('title', __('Usuarios'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Usuarios')],
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
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th>Foto</th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('academia_id') ?></th>
                    <th><?= $this->Paginator->sort('login') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?= $this->Number->format($usuario->id) ?></td>
                        <td><?= $this->Html->image('usuarios/foto/'.$usuario->img_dir.'/square_'.$usuario->foto, ["height"=> 50, "width"=>50]) ?></td>
                        <td><?= h($usuario->created) ?></td>
                        <td><?= h($usuario->modified) ?></td>
                        <td><?= h($usuario->nome) ?></td>
                        <td><?= $usuario->has('academia') ? $this->Html->link($usuario->academia->nome, ['controller' => 'Academias', 'action' => 'view', $usuario->academia->id]) : '' ?></td>
                        <td><?= h($usuario->login) ?></td>
                        <td><?= h($usuario->role) ?></td>
                        <td><?= h($usuario->email) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['class' => 'btn btn-xs btn-outline-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
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
