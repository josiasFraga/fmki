<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TorneioInscricao $torneioInscricao
 */
?>
<?php
$this->assign('title', __('Add Torneio Inscricao'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Torneio Inscricao', 'url' => ['action' => 'index']],
    ['title' => 'Add'],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($torneioInscricao) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('torneio_id', ['options' => $torneios]);
      echo $this->Form->control('aluno_id', ['options' => $alunos]);
      echo $this->Form->control('academia_id', ['options' => $academias]);
      echo $this->Form->control('categoria_id', ['options' => $torneioCategorias]);
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

