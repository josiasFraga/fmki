<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campeonato $campeonato
 */
?>

<?php
$this->assign('title', __('Campeonato'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Campeonatos'), 'url' => ['action' => 'index']],
    ['title' => __('View')],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($campeonato->nome) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($campeonato->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($campeonato->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= $campeonato->has('cidade') ? $this->Html->link($campeonato->cidade->name, ['controller' => 'Cidades', 'action' => 'view', $campeonato->cidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($campeonato->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($campeonato->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($campeonato->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Inicio') ?></th>
            <td><?= h($campeonato->inicio) ?></td>
        </tr>
        <tr>
            <th><?= __('Fim') ?></th>
            <td><?= h($campeonato->fim) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $campeonato->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $campeonato->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campeonato->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-campeonatoInscricoes view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= "Campeonato Inscricoes" ?> <?= __('Related') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'CampeonatoInscricoes' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List'), ['controller' => 'CampeonatoInscricoes' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
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
          <th><?= __('Divisao Id') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($campeonato->campeonato_inscricoes)) { ?>
        <tr>
            <td colspan="9" class="text-muted">
              <?= __('record not found!') ?>
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($campeonato->campeonato_inscricoes as $campeonatoInscricoes) : ?>
        <tr>
            <td><?= h($campeonatoInscricoes->id) ?></td>
            <td><?= h($campeonatoInscricoes->created) ?></td>
            <td><?= h($campeonatoInscricoes->modified) ?></td>
            <td><?= h($campeonatoInscricoes->campeonato_id) ?></td>
            <td><?= h($campeonatoInscricoes->aluno_id) ?></td>
            <td><?= h($campeonatoInscricoes->academia_id) ?></td>
            <td><?= h($campeonatoInscricoes->categoria_id) ?></td>
            <td><?= h($campeonatoInscricoes->divisao_id) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'CampeonatoInscricoes', 'action' => 'view', $campeonatoInscricoes->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'CampeonatoInscricoes', 'action' => 'edit', $campeonatoInscricoes->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'CampeonatoInscricoes', 'action' => 'delete', $campeonatoInscricoes->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $campeonatoInscricoes->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

