<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<?php
$this->assign('title', __('Add Aluno'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Alunos'), 'url' => ['action' => 'index']],
    ['title' => __('Add')],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($aluno, ['type' => 'file']) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('graduacao_id', ['options' => $graduacoes, 'class' => 'select2bs4']);
      echo $this->Form->control('academia_id', ['options' => $academias, 'class' => 'select2bs4']);
      echo $this->Form->control('nome');
      echo $this->Form->control('sexo', ['options' => [
        'Masculino' => 'Masculino',
        'Feminino' => 'Feminino'
      ]]);
      echo $this->Localization->generateBasicLocation('col-md-6 col-xs-12', 592, 'cities', false, 'select2bs4');
      echo $this->Form->control('endereco');
      echo $this->Form->control('telefone', [ 
        'placeholder' => "(__) _____-____",
        'data-inputmask' => "'mask': ['(99) 99999-9999', '(99) 99999-99999']",
        'inputmode' => 'text',
        'data-mask' => '',
      ]);
      echo $this->Form->control('email', ['type' => 'email']);
      echo $this->Form->control('instagram');
      echo $this->Form->control('facebook');
      echo $this->Form->control('peso', ['placeholder' => 'em Kg']);
      echo $this->Form->control('altura', ['placeholder' => 'em cm']);
      echo $this->Form->control('nascimento');
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
