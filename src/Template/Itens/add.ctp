<section class="container">
    <div class="row">
        <?= $this->Form->create($iten) ?>
        <fieldset>
            <legend><?= __('Add Iten') ?></legend>
            <?php
                echo $this->Form->control('name');
                echo $this->Form->control('unit_measurement');
                echo $this->Form->control('qtd');
                echo $this->Form->control('price');
                echo $this->Form->control('perishable_product');
                echo $this->Form->control('expiry_date');
                echo $this->Form->control('date_manufacture');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</section>
