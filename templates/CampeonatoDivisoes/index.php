<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoDiviso[]|\Cake\Collection\CollectionInterface $campeonatoDivisoes
 */
?>
<div class="campeonatoDivisoes index content">
    <?= $this->Html->link(__('New Campeonato Diviso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Campeonato Divisoes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('limite_min_peso') ?></th>
                    <th><?= $this->Paginator->sort('limite_max_peso') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($campeonatoDivisoes as $campeonatoDiviso): ?>
                <tr>
                    <td><?= $this->Number->format($campeonatoDiviso->id) ?></td>
                    <td><?= h($campeonatoDiviso->created) ?></td>
                    <td><?= h($campeonatoDiviso->modified) ?></td>
                    <td><?= $this->Number->format($campeonatoDiviso->limite_min_peso) ?></td>
                    <td><?= $this->Number->format($campeonatoDiviso->limite_max_peso) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $campeonatoDiviso->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campeonatoDiviso->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campeonatoDiviso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campeonatoDiviso->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
