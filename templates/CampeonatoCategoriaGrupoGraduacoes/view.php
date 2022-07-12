<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco $campeonatoCategoriaGrupoGraduaco
 */
?>

<?php
$this->assign('title', __('Campeonato Categoria Grupo Graduaco'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Campeonato Categoria Grupo Graduacoes'), 'url' => ['action' => 'index']],
    ['title' => __('View')],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($campeonatoCategoriaGrupoGraduaco->id) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Campeonato Categoria Grupo') ?></th>
            <td><?= $campeonatoCategoriaGrupoGraduaco->has('campeonato_categoria_grupo') ? $this->Html->link($campeonatoCategoriaGrupoGraduaco->campeonato_categoria_grupo->codigo, ['controller' => 'CampeonatoCategoriaGrupos', 'action' => 'view', $campeonatoCategoriaGrupoGraduaco->campeonato_categoria_grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Graduaco') ?></th>
            <td><?= $campeonatoCategoriaGrupoGraduaco->has('graduaco') ? $this->Html->link($campeonatoCategoriaGrupoGraduaco->graduaco->titulo, ['controller' => 'Graduacoes', 'action' => 'view', $campeonatoCategoriaGrupoGraduaco->graduaco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($campeonatoCategoriaGrupoGraduaco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($campeonatoCategoriaGrupoGraduaco->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($campeonatoCategoriaGrupoGraduaco->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $campeonatoCategoriaGrupoGraduaco->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $campeonatoCategoriaGrupoGraduaco->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campeonatoCategoriaGrupoGraduaco->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


