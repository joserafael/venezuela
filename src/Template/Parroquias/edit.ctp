<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $parroquia->id_parroquia],
                ['confirm' => __('Are you sure you want to delete # {0}?', $parroquia->id_parroquia)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Parroquias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="parroquias form large-9 medium-8 columns content">
    <?= $this->Form->create($parroquia) ?>
    <fieldset>
        <legend><?= __('Edit Parroquia') ?></legend>
        <?php
            echo $this->Form->input('id_municipio');
            echo $this->Form->input('parroquia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
