<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Iten'), ['action' => 'edit', $item->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Iten'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Itens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iten'), ['action' => 'add']) ?> </li>
    </ul>
</nav> -->

<section class="container margin-top-large">
    <div class="row">
        <h3><?= h($item->name) ?></h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('ID') ?></th>
                <td><?= $this->Number->format($item->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Nome') ?></th>
                <td><?= h($item->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Unidade de medida') ?></th>
                <td><?= h($item->unit_measurement) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Quantidade') ?></th>
                <td><?= $this->Number->format($item->qtd) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Preço') ?></th>
                <td>R$ <?= $this->Number->format($item->price) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Produto perecível') ?></th>
                <td><?= $item->perishable_product ? __('Sim') : __('Não'); ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Data de validade') ?></th>
                <td><?= h($item->expiry_date) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Data de fabricação') ?></th>
                <td><?= h($item->date_manufacture) ?></td>
            </tr>
            <!-- <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($item->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($item->modified) ?></td>
            </tr> -->
        </table>
    </div>
</section>
