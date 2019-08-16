<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Iten'), ['action' => 'edit', $iten->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Iten'), ['action' => 'delete', $iten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iten->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Itens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iten'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itens view large-9 medium-8 columns content">
    <h3><?= h($iten->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($iten->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit Measurement') ?></th>
            <td><?= h($iten->unit_measurement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($iten->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qtd') ?></th>
            <td><?= $this->Number->format($iten->qtd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($iten->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expiry Date') ?></th>
            <td><?= h($iten->expiry_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Manufacture') ?></th>
            <td><?= h($iten->date_manufacture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($iten->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($iten->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Perishable Product') ?></th>
            <td><?= $iten->perishable_product ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
