<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<?php
$this->assign('title', __('Edit Usuario'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Usuarios'), 'url' => ['action' => 'index']],
    ['title' => __('View'), 'url' => ['action' => 'view', $usuario->id]],
    ['title' => __('Edit')],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($usuario, ['type' => 'file']) ?>
  <div class="card-title d-flex align-items-center pl-3 pt-4">
    <div class="image">
      <?= $this->Html->image('usuarios/foto/'.$usuario->img_dir.'/square_'.$usuario->foto, ['class' => 'img-circle elevation-2', 'width' => '80px', 'height' => '80px']) ?>
    </div>
    
    <div class="info">
      <?= $this->Form->control('foto', ['type' => 'file', 'label' => 'Alterar Foto']); ?>
    </div>
  </div>
  <div class="card-body">
    <?php
      echo $this->Form->control('nome');
      echo $this->Form->control('academia_id', ['options' => $academias, 'empty' => true]);
      echo $this->Form->control('login');
      echo $this->Form->control('password');
      echo $this->Form->control('role');
      echo $this->Form->control('email');
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => __('delete'), $usuario->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
          <?= $this->Form->button(__('Confirm Updates')) ?>
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
