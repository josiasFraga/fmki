<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Torneio $torneio
 */
?>

<?php
$this->assign('title', __('Torneio'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Torneios', 'url' => ['action' => 'index']],
    ['title' => 'View'],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($torneio->id) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($torneio->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= h($torneio->cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($torneio->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($torneio->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($torneio->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($torneio->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Inicio') ?></th>
            <td><?= h($torneio->inicio) ?></td>
        </tr>
        <tr>
            <th><?= __('Fim') ?></th>
            <td><?= h($torneio->fim) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $torneio->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $torneio->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $torneio->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-torneioInscricao view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Torneio Inscricao') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'TorneioInscricao' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'TorneioInscricao' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th><?= __('Torneio Id') ?></th>
          <th><?= __('Aluno Id') ?></th>
          <th><?= __('Academia Id') ?></th>
          <th><?= __('Categoria Id') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($torneio->torneio_inscricao)) { ?>
        <tr>
            <td colspan="8" class="text-muted">
              Torneio Inscricao record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($torneio->torneio_inscricao as $torneioInscricao) : ?>
        <tr>
            <td><?= h($torneioInscricao->id) ?></td>
            <td><?= h($torneioInscricao->created) ?></td>
            <td><?= h($torneioInscricao->modified) ?></td>
            <td><?= h($torneioInscricao->torneio_id) ?></td>
            <td><?= h($torneioInscricao->aluno_id) ?></td>
            <td><?= h($torneioInscricao->academia_id) ?></td>
            <td><?= h($torneioInscricao->categoria_id) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'TorneioInscricao', 'action' => 'view', $torneioInscricao->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'TorneioInscricao', 'action' => 'edit', $torneioInscricao->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'TorneioInscricao', 'action' => 'delete', $torneioInscricao->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $torneioInscricao->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

