<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ciudade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ciudades index large-9 medium-8 columns content">
    <h3><?= __('Ciudades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_ciudad') ?></th>
                <th><?= $this->Paginator->sort('id_estado') ?></th>
                <th><?= $this->Paginator->sort('ciudad') ?></th>
                <th><?= $this->Paginator->sort('capital') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ciudades as $ciudade): ?>
            <tr>
                <td><?= $this->Number->format($ciudade->id_ciudad) ?></td>
                <td><?= $this->Number->format($ciudade->id_estado) ?></td>
                <td><?= h($ciudade->ciudad) ?></td>
                <td><?= h($ciudade->capital) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ciudade->id_ciudad]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ciudade->id_ciudad]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ciudade->id_ciudad], ['confirm' => __('Are you sure you want to delete # {0}?', $ciudade->id_ciudad)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
