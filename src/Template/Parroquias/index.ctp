<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Parroquia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parroquias index large-9 medium-8 columns content">
    <h3><?= __('Parroquias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('municipio_id') ?></th>
                <th><?= $this->Paginator->sort('parroquia') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parroquias as $parroquia): ?>
            <tr>
                <td><?= $this->Number->format($parroquia->id) ?></td>
                <td><?= $this->Number->format($parroquia->municipio_id) ?></td>
                <td><?= h($parroquia->parroquia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $parroquia->id_parroquia]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parroquia->id_parroquia]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parroquia->id_parroquia], ['confirm' => __('Are you sure you want to delete # {0}?', $parroquia->id_parroquia)]) ?>
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
