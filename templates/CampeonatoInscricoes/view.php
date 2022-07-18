<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoInscrico $campeonatoInscrico
 */
?>

<?php
$this->assign('title', __('Campeonato Inscrico'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Campeonato Inscricoes'), 'url' => ['action' => 'index']],
    ['title' => __('View')],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($campeonatoInscrico->id) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Campeonato') ?></th>
            <td><?= $campeonatoInscrico->has('campeonato') ? $this->Html->link($campeonatoInscrico->campeonato->nome, ['controller' => 'Campeonatos', 'action' => 'view', $campeonatoInscrico->campeonato->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Aluno') ?></th>
            <td><?= $campeonatoInscrico->has('aluno') ? $this->Html->link($campeonatoInscrico->aluno->nome, ['controller' => 'Alunos', 'action' => 'view', $campeonatoInscrico->aluno->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Academia') ?></th>
            <td><?= $campeonatoInscrico->has('academia') ? $this->Html->link($campeonatoInscrico->academia->nome, ['controller' => 'Academias', 'action' => 'view', $campeonatoInscrico->academia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Campeonato Categoria') ?></th>
            <td><?= $campeonatoInscrico->has('campeonato_categoria') ? $this->Html->link($campeonatoInscrico->campeonato_categoria->titulo, ['controller' => 'CampeonatoCategorias', 'action' => 'view', $campeonatoInscrico->campeonato_categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($campeonatoInscrico->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($campeonatoInscrico->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($campeonatoInscrico->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $campeonatoInscrico->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $campeonatoInscrico->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campeonatoInscrico->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


