<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
?>
<?php
$this->assign('title', __('Alunos'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Alunos')],
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
            <?= $this->Html->link(__('New Aluno'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
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
                    <th><?= $this->Paginator->sort('graduacao_id') ?></th>
                    <th><?= $this->Paginator->sort('academia_id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('cidade_id') ?></th>
                    <th><?= $this->Paginator->sort('endereco') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('instagram') ?></th>
                    <th><?= $this->Paginator->sort('facebook') ?></th>
                    <th><?= $this->Paginator->sort('peso') ?></th>
                    <th><?= $this->Paginator->sort('altura') ?></th>
                    <th><?= $this->Paginator->sort('nascimento') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno) : ?>
                    <tr>
                        <td><?= $this->Number->format($aluno->id) ?></td>
                        <td><?= $this->Html->image('alunos/foto/'.$aluno->img_dir.'/square_'.$aluno->foto, ["height"=> 50, "width"=>50]) ?></td>
                        <td><?= h($aluno->created) ?></td>
                        <td><?= h($aluno->modified) ?></td>
                        <td><?= $aluno->has('graduaco') ? $this->Html->link($aluno->graduaco->titulo, ['controller' => 'Graduacoes', 'action' => 'view', $aluno->graduaco->id]) : '' ?></td>
                        <td><?= $aluno->has('academia') ? $this->Html->link($aluno->academia->nome, ['controller' => 'Academias', 'action' => 'view', $aluno->academia->id]) : '' ?></td>
                        <td><?= h($aluno->nome) ?></td>
                        <td><?= $aluno->has('cidade') ? $this->Html->link($aluno->cidade->name, ['controller' => 'Cidades', 'action' => 'view', $aluno->cidade->id]) : '' ?></td>
                        <td><?= h($aluno->endereco) ?></td>
                        <td><?= h($aluno->telefone) ?></td>
                        <td><?= h($aluno->email) ?></td>
                        <td><?= h($aluno->instagram) ?></td>
                        <td><?= h($aluno->facebook) ?></td>
                        <td><?= $this->Number->format($aluno->peso) ?></td>
                        <td><?= $this->Number->format($aluno->altura) ?></td>
                        <td><?= h($aluno->nascimento) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $aluno->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluno->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aluno->id], ['class' => 'btn btn-xs btn-outline-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $aluno->id)]) ?>
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
