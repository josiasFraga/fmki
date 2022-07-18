<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>

<?php
$this->assign('title', __('Aluno'));
$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => '/'],
    ['title' => __('List').' '.__('Alunos'), 'url' => ['action' => 'index']],
    ['title' => __('View')],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title d-flex align-items-center">
      <div class="image">
        <?= $this->Html->image('alunos/foto/'.$aluno->img_dir.'/square_'.$aluno->foto, ['class' => 'img-circle elevation-2', 'width' => '80px', 'height' => '80px']) ?>
      </div>
      <div class="info">
        <?= h($aluno->nome) ?>
      </div>
    </h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Sexo') ?></th>
            <td><?= h($aluno->sexo) ?></td>
        </tr>
        <tr>
            <th><?= __('Graduaco') ?></th>
            <td><?= $aluno->has('graduaco') ? $this->Html->link($aluno->graduaco->titulo, ['controller' => 'Graduacoes', 'action' => 'view', $aluno->graduaco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Academia') ?></th>
            <td><?= $aluno->has('academia') ? $this->Html->link($aluno->academia->nome, ['controller' => 'Academias', 'action' => 'view', $aluno->academia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= $aluno->has('cidade') ? $this->Html->link($aluno->cidade->name, ['controller' => 'Cidades', 'action' => 'view', $aluno->cidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($aluno->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone') ?></th>
            <td><?= h($aluno->telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($aluno->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Instagram') ?></th>
            <td><?= h($aluno->instagram) ?></td>
        </tr>
        <tr>
            <th><?= __('Facebook') ?></th>
            <td><?= h($aluno->facebook) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($aluno->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso') ?></th>
            <td><?= $this->Number->format($aluno->peso) ?></td>
        </tr>
        <tr>
            <th><?= __('Altura') ?></th>
            <td><?= $this->Number->format($aluno->altura) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($aluno->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($aluno->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Nascimento') ?></th>
            <td><?= h($aluno->nascimento) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $aluno->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluno->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-campeonatoInscricao view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= "Campeonato Inscricao" ?> <?= __('Related') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'CampeonatoInscricao' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List'), ['controller' => 'CampeonatoInscricao' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th><?= __('Campeonato Id') ?></th>
          <th><?= __('Aluno Id') ?></th>
          <th><?= __('Academia Id') ?></th>
          <th><?= __('Categoria Id') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($aluno->campeonato_inscricao)) { ?>
        <tr>
            <td colspan="8" class="text-muted">
              <?= __('record not found!') ?>
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($aluno->campeonato_inscricao as $campeonatoInscricao) : ?>
        <tr>
            <td><?= h($campeonatoInscricao->id) ?></td>
            <td><?= h($campeonatoInscricao->created) ?></td>
            <td><?= h($campeonatoInscricao->modified) ?></td>
            <td><?= h($campeonatoInscricao->campeonato_id) ?></td>
            <td><?= h($campeonatoInscricao->aluno_id) ?></td>
            <td><?= h($campeonatoInscricao->academia_id) ?></td>
            <td><?= h($campeonatoInscricao->categoria_id) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'CampeonatoInscricao', 'action' => 'view', $campeonatoInscricao->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'CampeonatoInscricao', 'action' => 'edit', $campeonatoInscricao->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'CampeonatoInscricao', 'action' => 'delete', $campeonatoInscricao->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $campeonatoInscricao->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>
