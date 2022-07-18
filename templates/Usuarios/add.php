<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<?php
$this->assign('title', __('Add Usuario'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Usuarios'), 'url' => ['action' => 'index']],
    ['title' => __('Add')],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($usuario) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('nome');
      echo $this->Form->control('academia_id', ['options' => $academias, 'empty' => true]);
      echo $this->Form->control('login');
      echo $this->Form->control('password');
      echo $this->Form->control('email');
      echo $this->Form->control('foto', ['type' => 'file']);
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

<?php
$this->Html->css('CakeLte./AdminLTE/plugins/select2/css/select2.min', ['block' => true]);
$this->Html->css('CakeLte./AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min', ['block' => true]);

$this->Html->script('CakeLte./AdminLTE/plugins/select2/js/select2.full.min', ['block' => true]);
$this->Html->script('CakeLte./AdminLTE/plugins/inputmask/jquery.inputmask.min', ['block' => true]);
