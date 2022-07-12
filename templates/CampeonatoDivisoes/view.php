<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampeonatoDiviso $campeonatoDiviso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Campeonato Diviso'), ['action' => 'edit', $campeonatoDiviso->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Campeonato Diviso'), ['action' => 'delete', $campeonatoDiviso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campeonatoDiviso->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Campeonato Divisoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Campeonato Diviso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="campeonatoDivisoes view content">
            <h3><?= h($campeonatoDiviso->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($campeonatoDiviso->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Limite Min Peso') ?></th>
                    <td><?= $this->Number->format($campeonatoDiviso->limite_min_peso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Limite Max Peso') ?></th>
                    <td><?= $this->Number->format($campeonatoDiviso->limite_max_peso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($campeonatoDiviso->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($campeonatoDiviso->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
