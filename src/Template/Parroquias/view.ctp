<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Parroquia'), ['action' => 'edit', $parroquia->id_parroquia]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Parroquia'), ['action' => 'delete', $parroquia->id_parroquia], ['confirm' => __('Are you sure you want to delete # {0}?', $parroquia->id_parroquia)]) ?> </li>
        <li><?= $this->Html->link(__('List Parroquias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parroquia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="parroquias view large-9 medium-8 columns content">
    <h3><?= h($parroquia->id_parroquia) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Parroquia') ?></th>
            <td><?= h($parroquia->parroquia) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Parroquia') ?></th>
            <td><?= $this->Number->format($parroquia->id_parroquia) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Municipio') ?></th>
            <td><?= $this->Number->format($parroquia->id_municipio) ?></td>
        </tr>
    </table>
</div>
