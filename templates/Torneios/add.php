<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Torneio $torneio
 */
?>
<?php
$this->assign('title', __('Add Torneio'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Torneios', 'url' => ['action' => 'index']],
    ['title' => 'Add'],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($torneio) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('inicio');
      echo $this->Form->control('fim');
      echo $this->Form->control('endereco');
      echo $this->Form->control('cidade');
      echo $this->Form->control('estado');
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>

