<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Links') ?></li>
        <li><?= $this->Html->link(__('Github Optimiza Click'), 'https://github.com/Optimiza-Click/',['target'=>'_blank']) ?></li>
    </ul>
</nav>
<div class="repositories index large-9 medium-8 columns content">
    <h3><?= __('Repositorios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
            
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('version') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($repositories as $repository): ?>
            <tr>
            
                <td><?= h($repository->name) ?></td>
                <td><?= h($repository->description) ?></td>
                <td><?= h($repository->version) ?></td>
                <td><?= h($repository->created) ?></td>
                <td><?= h($repository->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $repository->id]) ?>
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
