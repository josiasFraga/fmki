<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<?php
$this->assign('title', __('Edit Usuario'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Usuarios', 'url' => ['action' => 'index']],
    ['title' => 'View', 'url' => ['action' => 'view', $usuario->id]],
    ['title' => 'Edit'],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($usuario) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('academia_id', ['options' => $academias, 'empty' => true]);
      echo $this->Form->control('role');
      echo $this->Form->control('email');
      echo $this->Form->control('user');
      echo $this->Form->control('password');
      echo $this->Form->control('foto');
      echo $this->Form->control('name');
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $usuario->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>

