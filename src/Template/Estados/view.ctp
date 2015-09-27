<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->id_estado]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->id_estado], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id_estado)]) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estados view large-9 medium-8 columns content">
    <h3><?= h($estado->id_estado) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($estado->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Iso 3166-2') ?></th>
            <td><?= h($estado->iso_3166-2) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Estado') ?></th>
            <td><?= $this->Number->format($estado->id_estado) ?></td>
        </tr>
    </table>
</div>
