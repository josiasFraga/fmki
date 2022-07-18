<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoCategoria $campeonatoCategoria
 */
?>
<?php
$this->assign('title', __('Add Campeonato Categoria'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Campeonato Categorias'), 'url' => ['action' => 'index']],
    ['title' => __('Add')],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($campeonatoCategoria) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('titulo');
      echo $this->Form->control('categoria', ['options' => [
        'KATA E KUMITE MASCULINO' => 'KATA E KUMITE MASCULINO',
        'KATA E KUMITE FEMININO' => 'KATA E KUMITE FEMININO'
      ]]);
      echo $this->Form->control('limite_min_idade');
      echo $this->Form->control('limite_max_idade');
      echo $this->Form->control('limite_min_peso', ['placeholder' => 'Em Kg']);
      echo $this->Form->control('limite_max_peso', ['placeholder' => 'Em Kg']);
      echo $this->Form->control('limite_min_altura', ['placeholder' => 'Em cm']);
      echo $this->Form->control('limite_max_altura', ['placeholder' => 'Em cm']);
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
