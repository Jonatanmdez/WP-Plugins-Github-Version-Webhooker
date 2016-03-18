<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Repository'), ['action' => 'edit', $repository->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Repository'), ['action' => 'delete', $repository->id], ['confirm' => __('Are you sure you want to delete # {0}?', $repository->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Repositories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Repository'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="repositories view large-9 medium-8 columns content">
    <h3><?= h($repository->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($repository->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($repository->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Version') ?></th>
            <td><?= h($repository->version) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($repository->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($repository->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($repository->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($repository->url)); ?>
    </div>
</div>
