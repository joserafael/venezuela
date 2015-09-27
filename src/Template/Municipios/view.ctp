<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Municipio'), ['action' => 'edit', $municipio->id_municipio]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Municipio'), ['action' => 'delete', $municipio->id_municipio], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->id_municipio)]) ?> </li>
        <li><?= $this->Html->link(__('List Municipios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="municipios view large-9 medium-8 columns content">
    <h3><?= h($municipio->id_municipio) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Municipio') ?></th>
            <td><?= h($municipio->municipio) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($municipio->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Id') ?></th>
            <td><?= $this->Number->format($municipio->estado_id) ?></td>
        </tr>
    </table>
</div>
