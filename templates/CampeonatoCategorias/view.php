<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoCategoria $campeonatoCategoria
 */
?>

<?php
$this->assign('title', __('Campeonato Categoria'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Campeonato Categorias'), 'url' => ['action' => 'index']],
    ['title' => __('View')],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($campeonatoCategoria->id) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($campeonatoCategoria->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Categoria') ?></th>
            <td><?= h($campeonatoCategoria->categoria) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($campeonatoCategoria->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Limite Min Idade') ?></th>
            <td><?= $this->Number->format($campeonatoCategoria->limite_min_idade) ?></td>
        </tr>
        <tr>
            <th><?= __('Limite Max Idade') ?></th>
            <td><?= $this->Number->format($campeonatoCategoria->limite_max_idade) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($campeonatoCategoria->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($campeonatoCategoria->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $campeonatoCategoria->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $campeonatoCategoria->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campeonatoCategoria->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-campeonatoCategoriaGrupos view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= "Campeonato Categoria Grupos" ?> <?= __('Related') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'CampeonatoCategoriaGrupos' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List'), ['controller' => 'CampeonatoCategoriaGrupos' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Updated') ?></th>
          <th><?= __('Codigo') ?></th>
          <th><?= __('Graduações') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($campeonatoCategoria->campeonato_categoria_grupos)) { ?>
        <tr>
            <td colspan="6" class="text-muted">
              <?= __('record not found!') ?>
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($campeonatoCategoria->campeonato_categoria_grupos as $campeonatoCategoriaGrupos) :  ?>
        <tr>
            <td><?= h($campeonatoCategoriaGrupos->id) ?></td>
            <td><?= h($campeonatoCategoriaGrupos->created) ?></td>
            <td><?= h($campeonatoCategoriaGrupos->updated) ?></td>
            <td><?= h($campeonatoCategoriaGrupos->codigo) ?></td>
            <td><?= h(implode(', ', $campeonatoCategoriaGrupos->_graduacoes)) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'CampeonatoCategoriaGrupos', 'action' => 'view', $campeonatoCategoriaGrupos->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'CampeonatoCategoriaGrupos', 'action' => 'edit', $campeonatoCategoriaGrupos->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'CampeonatoCategoriaGrupos', 'action' => 'delete', $campeonatoCategoriaGrupos->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $campeonatoCategoriaGrupos->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

