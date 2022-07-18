<div class="users form content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your email and password') ?></legend>
        <?= $this->Form->control('login') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Do Login')); ?>
    <?= $this->Form->end() ?>
</div>