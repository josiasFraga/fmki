<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco $campeonatoCategoriaGrupoGraduaco
 */
?>
<?php
$this->assign('title', __('Edit Campeonato Categoria Grupo Graduaco'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Campeonato Categoria Grupo Graduacoes'), 'url' => ['action' => 'index']],
    ['title' => __('View'), 'url' => ['action' => 'view', $campeonatoCategoriaGrupoGraduaco->id]],
    ['title' => __('Edit')],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($campeonatoCategoriaGrupoGraduaco) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('campeonato_categoria_grupo_id', ['options' => $campeonatoCategoriaGrupos]);
      echo $this->Form->control('graduacao_id', ['options' => $graduacoes]);
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => __('delete'), $campeonatoCategoriaGrupoGraduaco->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $campeonatoCategoriaGrupoGraduaco->id), 'class' => 'btn btn-danger']
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
