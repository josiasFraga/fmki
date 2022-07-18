<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoInscrico $campeonatoInscrico
 */
?>
<?php
$this->assign('title', __('Edit Campeonato Inscrico'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Campeonato Inscricoes'), 'url' => ['action' => 'index']],
    ['title' => __('View'), 'url' => ['action' => 'view', $campeonatoInscrico->id]],
    ['title' => __('Edit')],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($campeonatoInscrico) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('campeonato_id', ['options' => $campeonatos]);
      echo $this->Form->control('aluno_id', ['options' => $alunos]);
      echo $this->Form->control('academia_id', ['options' => $academias]);
      echo $this->Form->control('categoria_id', ['options' => $campeonatoCategorias]);
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => __('delete'), $campeonatoInscrico->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $campeonatoInscrico->id), 'class' => 'btn btn-danger']
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
