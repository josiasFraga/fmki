<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Graduaco $graduaco
 */
?>
<?php
$this->assign('title', __('Add Graduaco'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Graduacoes', 'url' => ['action' => 'index']],
    ['title' => 'Add'],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($graduaco) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('titulo');
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

