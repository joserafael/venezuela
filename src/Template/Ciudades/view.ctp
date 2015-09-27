<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ciudade'), ['action' => 'edit', $ciudade->id_ciudad]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ciudade'), ['action' => 'delete', $ciudade->id_ciudad], ['confirm' => __('Are you sure you want to delete # {0}?', $ciudade->id_ciudad)]) ?> </li>
        <li><?= $this->Html->link(__('List Ciudades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ciudade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ciudades view large-9 medium-8 columns content">
    <h3><?= h($ciudade->id_ciudad) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ciudad') ?></th>
            <td><?= h($ciudade->ciudad) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ciudade->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Id') ?></th>
            <td><?= $this->Number->format($ciudade->estado_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Capital') ?></th>
            <td><?= $ciudade->capital ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
