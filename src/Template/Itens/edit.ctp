<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $iten->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $iten->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Itens'), ['action' => 'index']) ?></li>
    </ul>
</nav> -->

<section class="container margin-top-large">
    <div class="row">
        <?= $this->Form->create($item) ?>
            <div class="input-field">
                <label for="name">Nome</label>
                <?= $this->Form->text('name', ['id' => "name"]) ?>
            </div>
            <div class="input-field">
                <label for="unit_measurement">Unidade de medida</label>
                <?= $this->Form->text('unit_measurement', ['id' => "unit_measurement"]) ?>
            </div>
            <div class="input-field">
                <label for="qtd">Quantidade</label>
                <?= $this->Form->text('qtd', ['id' => "qtd"]) ?>
            </div>
            <div class="input-field">
                <label for="price">Preço</label>
                <?= $this->Form->text('price', ['id' => "price"]) ?>
            </div>
            <div class="margin-bottom">
                <label>
                    <?= $this->Form->checkbox('perishable_product', ['class' => 'filled-in']) ?>
                    <span>Produto perecível</span>
                </label>
            </div>
            <div class="input-field">
                <label for="expiry_date">Data de validade</label>
                <?= $this->Form->text('expiry_date', ['id' => 'expiry_date', 'class' => 'datepicker']) ?>
            </div>
            <div class="input-field">
                <label for="date_manufacture">Data de fabricação</label>
                <?= $this->Form->text('date_manufacture', ['id' => 'date_manufacture', 'class' => 'datepicker']) ?>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>

        <?= $this->Form->end() ?>
    </div>
</section>

<script>
    $(document).ready(function() {
        var $input = $('.datepicker').datepicker({
            // format:'dd/mm/yyyy',
            format: 'yyyy-mm-dd',
            i18n:{
                months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
                weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
                weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
                today: 'Hoje',
                clear: 'Limpar',
                close: 'Pronto',
                labelMonthNext: 'Próximo mês',
                labelMonthPrev: 'Mês anterior',
                labelMonthSelect: 'Selecione um mês',
                labelYearSelect: 'Selecione um ano',
                selectMonths: true,
                selectYears: 15,
                cancel: 'Cancelar',
                clear: 'Limpar'
            }
        });

        // var picker = $input.pickadate('picker')
        // picker.set('select', '2016-04-20', { format: 'yyyy-mm-dd' })
    });
    
</script>

