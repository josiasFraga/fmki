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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $campeonatoDiviso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $campeonatoDiviso->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Campeonato Divisoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="campeonatoDivisoes form content">
            <?= $this->Form->create($campeonatoDiviso) ?>
            <fieldset>
                <legend><?= __('Edit Campeonato Diviso') ?></legend>
                <?php
                    echo $this->Form->control('limite_min_peso');
                    echo $this->Form->control('limite_max_peso');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
