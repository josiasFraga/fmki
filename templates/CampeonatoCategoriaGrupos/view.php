<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoCategoriaGrupo $campeonatoCategoriaGrupo
 */
?>

<?php
$this->assign('title', __('Campeonato Categoria Grupo'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Campeonato Categoria Grupos'), 'url' => ['action' => 'index']],
    ['title' => __('View')],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($campeonatoCategoriaGrupo->codigo) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Campeonato Categoria') ?></th>
            <td><?= $campeonatoCategoriaGrupo->has('campeonato_categoria') ? $this->Html->link($campeonatoCategoriaGrupo->campeonato_categoria->titulo, ['controller' => 'CampeonatoCategorias', 'action' => 'view', $campeonatoCategoriaGrupo->campeonato_categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($campeonatoCategoriaGrupo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($campeonatoCategoriaGrupo->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($campeonatoCategoriaGrupo->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated') ?></th>
            <td><?= h($campeonatoCategoriaGrupo->updated) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $campeonatoCategoriaGrupo->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $campeonatoCategoriaGrupo->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campeonatoCategoriaGrupo->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-campeonatoCategoriaGrupoGraduacoes view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= "Campeonato Categoria Grupo Graduacoes" ?> <?= __('Related') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'CampeonatoCategoriaGrupoGraduacoes' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List'), ['controller' => 'CampeonatoCategoriaGrupoGraduacoes' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th><?= __('Campeonato Categoria Grupo Id') ?></th>
          <th><?= __('Graduacao Id') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($campeonatoCategoriaGrupo->campeonato_categoria_grupo_graduacoes)) { ?>
        <tr>
            <td colspan="6" class="text-muted">
              <?= __('record not found!') ?>
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($campeonatoCategoriaGrupo->campeonato_categoria_grupo_graduacoes as $campeonatoCategoriaGrupoGraduacoes) : ?>
        <tr>
            <td><?= h($campeonatoCategoriaGrupoGraduacoes->id) ?></td>
            <td><?= h($campeonatoCategoriaGrupoGraduacoes->created) ?></td>
            <td><?= h($campeonatoCategoriaGrupoGraduacoes->modified) ?></td>
            <td><?= h($campeonatoCategoriaGrupoGraduacoes->campeonato_categoria_grupo_id) ?></td>
            <td><?= h($campeonatoCategoriaGrupoGraduacoes->graduacao_id) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'CampeonatoCategoriaGrupoGraduacoes', 'action' => 'view', $campeonatoCategoriaGrupoGraduacoes->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'CampeonatoCategoriaGrupoGraduacoes', 'action' => 'edit', $campeonatoCategoriaGrupoGraduacoes->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'CampeonatoCategoriaGrupoGraduacoes', 'action' => 'delete', $campeonatoCategoriaGrupoGraduacoes->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $campeonatoCategoriaGrupoGraduacoes->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

