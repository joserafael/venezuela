<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Parroquias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="parroquias form large-9 medium-8 columns content">
    <?= $this->Form->create($parroquia) ?>
    <fieldset>
        <legend><?= __('Add Parroquia') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('municipio_id');
            echo $this->Form->input('parroquia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
