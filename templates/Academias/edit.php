<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Academia $academia
 */
?>
<?php
$this->assign('title', __('Edit Academia'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Academias'), 'url' => ['action' => 'index']],
    ['title' => __('View'), 'url' => ['action' => 'view', $academia->id]],
    ['title' => __('Edit')],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($academia, ['type' => 'file']) ?>
  <div class="card-title d-flex align-items-center pl-3 pt-4">
    <div class="image">
      <?= $this->Html->image('academias/logo/'.$academia->img_dir.'/square_'.$academia->logo, ['class' => 'elevation-2', 'width' => '150px']) ?>
    </div>
    
    <div class="info">
      <?= $this->Form->control('logo', ['type' => 'file', 'label' => 'Alterar Logo']); ?>
    </div>
  </div>
  <div class="card-body">

    <?php
      echo $this->Form->control('nome');
      echo $this->Localization->generateBasicLocation('col-md-6 col-xs-12', @$academia->cidade_id, 'cities', (!empty($academia->id)), 'select2bs4');
      echo $this->Form->control('endereco');
      echo $this->Form->control('telefone', [ 
        'placeholder' => "(__) _____-____",
        'data-inputmask' => "'mask': ['(99) 99999-9999', '(99) 99999-99999']",
        'inputmode' => 'text',
        'data-mask' => '',
      ]);
      echo $this->Form->control('facebook');
      echo $this->Form->control('instagram');
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => __('delete'), $academia->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $academia->id), 'class' => 'btn btn-danger']
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
