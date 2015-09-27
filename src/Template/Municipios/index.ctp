<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Municipio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="municipios index large-9 medium-8 columns content">
    <h3><?= __('Municipios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_municipio') ?></th>
                <th><?= $this->Paginator->sort('id_estado') ?></th>
                <th><?= $this->Paginator->sort('municipio') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($municipios as $municipio): ?>
            <tr>
                <td><?= $this->Number->format($municipio->id_municipio) ?></td>
                <td><?= $this->Number->format($municipio->id_estado) ?></td>
                <td><?= h($municipio->municipio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $municipio->id_municipio]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $municipio->id_municipio]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $municipio->id_municipio], ['confirm' => __('Are you sure you want to delete # {0}?', $municipio->id_municipio)]) ?>
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
