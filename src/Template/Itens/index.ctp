<section class="container">
    <div class="row">
        <h1><?= __('Itens Cadastrados') ?></h1>
        <table class="striped highlight centered responsive-table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id', 'ID') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name', 'Nome') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('unit_measurement', "Unidade de medida") ?></th>
                    <th scope="col"><?= $this->Paginator->sort('qtd', 'Quantidade') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('price', 'Preço') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('perishable_product', 'Produto perecível') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('expiry_date', 'Data de validade') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('date_manufacture', 'Data de fabricação') ?></th>
                    <th scope="col" class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($itens as $item): ?>
                <tr>
                    <td><?= $this->Number->format($item->id) ?></td>
                    <td><?= h($item->name) ?></td>
                    <td><?= h($item->unit_measurement) ?></td>
                    <td><?= $this->Number->format($item->qtd) ?></td>
                    <td>R$ <?= $this->Number->format($item->price) ?></td>
                    <td><?= $item->perishable_product ? __('Sim') : __('Não') ?></td>
                    <td><?= h($item->expiry_date) ?></td>
                    <td><?= h($item->date_manufacture) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('visibility', ['action' => 'view', $item->id], ['class' => 'material-icons']) ?>
                        <?= $this->Html->link('edit', ['action' => 'edit', $item->id], ['class' => 'material-icons']) ?> 
                        <?= $this->Form->postLink('delete_forever', ['action' => 'delete', $item->id], ['class' => 'material-icons', 'confirm' => __("Tem certeza de que deseja excluir esse item?", $item->id)]) ?>                    
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator center-align">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Próximo') . ' >') ?>
                <?= $this->Paginator->last(__('Último') . ' >>') ?>
            </ul>
            <?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registros de {{count}} no total')]) ?>
        </div>
    </div>
</div>
