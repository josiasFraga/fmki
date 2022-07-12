<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Graduaco $graduaco
 */
?>

<?php
$this->assign('title', __('Graduaco'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Graduacoes'), 'url' => ['action' => 'index']],
    ['title' => __('View')],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($graduaco->titulo) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($graduaco->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($graduaco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($graduaco->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($graduaco->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $graduaco->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $graduaco->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $graduaco->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-alunos view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= "Alunos" ?> <?= __('Related') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Alunos' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List'), ['controller' => 'Alunos' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('Foto') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Academia') ?></th>
          <th><?= __('Nome') ?></th>
          <th><?= __('Cidade') ?></th>
          <th><?= __('Endereco') ?></th>
          <th><?= __('Telefone') ?></th>
          <th><?= __('Email') ?></th>
          <th><?= __('Instagram') ?></th>
          <th><?= __('Facebook') ?></th>
          <th><?= __('Peso') ?></th>
          <th><?= __('Altura') ?></th>
          <th><?= __('Nascimento') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($graduaco->alunos)) { ?>
        <tr>
            <td colspan="18" class="text-muted">
              <?= __('record not found!') ?>
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($graduaco->alunos as $alunos) : ?>
        <tr>
            <td><?= h($alunos->id) ?></td>
            <td><?= $this->Html->image('alunos/foto/'.$alunos->img_dir.'/square_'.$alunos->foto, ["height"=> 50, "width"=>50]) ?></td>
            <td><?= h($alunos->created) ?></td>
            <td><?= $alunos->has('academia') ? $this->Html->link($alunos->academia->nome, ['controller' => 'Academias', 'action' => 'view', $alunos->academia->id]) : '' ?></td>
            <td><?= h($alunos->nome) ?></td>
            <td><?= $alunos->has('cidade') ? $this->Html->link($alunos->cidade->name, ['controller' => 'Cidades', 'action' => 'view', $alunos->cidade->id]) : '' ?></td>
            <td><?= h($alunos->endereco) ?></td>
            <td><?= h($alunos->telefone) ?></td>
            <td><?= h($alunos->email) ?></td>
            <td><?= h($alunos->instagram) ?></td>
            <td><?= h($alunos->facebook) ?></td>
            <td><?= h($alunos->peso) ?></td>
            <td><?= h($alunos->altura) ?></td>
            <td><?= h($alunos->nascimento) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Alunos', 'action' => 'view', $alunos->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Alunos', 'action' => 'edit', $alunos->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Alunos', 'action' => 'delete', $alunos->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $alunos->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

