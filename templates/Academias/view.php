<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Academia $academia
 */
?>

<?php
$this->assign('title', __('Academia'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Academias'), 'url' => ['action' => 'index']],
    ['title' => __('View')],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title d-flex align-items-center">
        <div class="image">
          <?= $this->Html->image('academias/logo/'.$academia->img_dir.'/square_'.$academia->logo, ['class' => 'elevation-2', 'width' => '150px']) ?>
        </div>
        
        <div class="info">
          <?= h($academia->nome) ?>
        </div>
    </h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <!--<tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($academia->nome) ?></td>
        </tr>-->
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= $academia->has('cidade') ? $this->Html->link($academia->cidade->name, ['controller' => 'Cidades', 'action' => 'view', $academia->cidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($academia->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Img Dir') ?></th>
            <td><?= h($academia->img_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone') ?></th>
            <td><?= h($academia->telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Facebook') ?></th>
            <td><?= h($academia->facebook) ?></td>
        </tr>
        <tr>
            <th><?= __('Instagram') ?></th>
            <td><?= h($academia->instagram) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($academia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($academia->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($academia->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $academia->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $academia->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $academia->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-campeonatoInscricao view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= "Campeonato Inscricao" ?> <?= __('Related') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'CampeonatoInscricao' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List'), ['controller' => 'CampeonatoInscricao' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th><?= __('Campeonato Id') ?></th>
          <th><?= __('Aluno Id') ?></th>
          <th><?= __('Academia Id') ?></th>
          <th><?= __('Categoria Id') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($academia->campeonato_inscricao)) { ?>
        <tr>
            <td colspan="8" class="text-muted">
              <?= __('record not found!') ?>
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($academia->campeonato_inscricao as $campeonatoInscricao) : ?>
        <tr>
            <td><?= h($campeonatoInscricao->id) ?></td>
            <td><?= h($campeonatoInscricao->created) ?></td>
            <td><?= h($campeonatoInscricao->modified) ?></td>
            <td><?= h($campeonatoInscricao->campeonato_id) ?></td>
            <td><?= h($campeonatoInscricao->aluno_id) ?></td>
            <td><?= h($campeonatoInscricao->academia_id) ?></td>
            <td><?= h($campeonatoInscricao->categoria_id) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'CampeonatoInscricao', 'action' => 'view', $campeonatoInscricao->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'CampeonatoInscricao', 'action' => 'edit', $campeonatoInscricao->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'CampeonatoInscricao', 'action' => 'delete', $campeonatoInscricao->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $campeonatoInscricao->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

<div class="related related-usuarios view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= "Usuarios" ?> <?= __('Related') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Usuarios' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List'), ['controller' => 'Usuarios' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th><?= __('Academia Id') ?></th>
          <th><?= __('Role') ?></th>
          <th><?= __('Email') ?></th>
          <th><?= __('User') ?></th>
          <th><?= __('Password') ?></th>
          <th><?= __('Foto') ?></th>
          <th><?= __('Img Dir') ?></th>
          <th><?= __('Name') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($academia->usuarios)) { ?>
        <tr>
            <td colspan="12" class="text-muted">
              <?= __('record not found!') ?>
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($academia->usuarios as $usuarios) : ?>
        <tr>
            <td><?= h($usuarios->id) ?></td>
            <td><?= h($usuarios->created) ?></td>
            <td><?= h($usuarios->modified) ?></td>
            <td><?= h($usuarios->academia_id) ?></td>
            <td><?= h($usuarios->role) ?></td>
            <td><?= h($usuarios->email) ?></td>
            <td><?= h($usuarios->user) ?></td>
            <td><?= h($usuarios->password) ?></td>
            <td><?= h($usuarios->foto) ?></td>
            <td><?= h($usuarios->img_dir) ?></td>
            <td><?= h($usuarios->name) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

