<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>

<?php
$this->assign('title', __('Usuario'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Usuarios'), 'url' => ['action' => 'index']],
    ['title' => __('View')],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title d-flex align-items-center">
      <div class="image">
        <?= $this->Html->image('usuarios/foto/'.$usuario->img_dir.'/square_'.$usuario->foto, ['class' => 'img-circle elevation-2', 'width' => '80px', 'height' => '80px']) ?>
      </div>
      <div class="info">
        <?= h($usuario->nome) ?>
      </div>
    </h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Academia') ?></th>
            <td><?= $usuario->has('academia') ? $this->Html->link($usuario->academia->nome, ['controller' => 'Academias', 'action' => 'view', $usuario->academia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Login') ?></th>
            <td><?= h($usuario->login) ?></td>
        </tr>
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= h($usuario->role) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($usuario->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($usuario->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $usuario->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


