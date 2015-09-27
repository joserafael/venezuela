<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ciudades'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ciudades form large-9 medium-8 columns content">
    <?= $this->Form->create($ciudade) ?>
    <fieldset>
        <legend><?= __('Add Ciudade') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('estado_id');
            echo $this->Form->input('ciudad');
            echo $this->Form->input('capital');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
