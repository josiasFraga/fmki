<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TorneioInscricao $torneioInscricao
 */
?>

<?php
$this->assign('title', __('Torneio Inscricao'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Torneio Inscricao', 'url' => ['action' => 'index']],
    ['title' => 'View'],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($torneioInscricao->id) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Torneio') ?></th>
            <td><?= $torneioInscricao->has('torneio') ? $this->Html->link($torneioInscricao->torneio->id, ['controller' => 'Torneios', 'action' => 'view', $torneioInscricao->torneio->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Aluno') ?></th>
            <td><?= $torneioInscricao->has('aluno') ? $this->Html->link($torneioInscricao->aluno->id, ['controller' => 'Alunos', 'action' => 'view', $torneioInscricao->aluno->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Academia') ?></th>
            <td><?= $torneioInscricao->has('academia') ? $this->Html->link($torneioInscricao->academia->id, ['controller' => 'Academias', 'action' => 'view', $torneioInscricao->academia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Torneio Categoria') ?></th>
            <td><?= $torneioInscricao->has('torneio_categoria') ? $this->Html->link($torneioInscricao->torneio_categoria->id, ['controller' => 'TorneioCategorias', 'action' => 'view', $torneioInscricao->torneio_categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($torneioInscricao->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= $this->Number->format($torneioInscricao->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($torneioInscricao->created) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $torneioInscricao->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $torneioInscricao->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $torneioInscricao->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


