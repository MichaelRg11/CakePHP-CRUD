<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venta $venta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $venta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ventas form content">
            <?= $this->Form->create($venta) ?>
            <fieldset>
                <legend><?= __('Edit Venta') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('subtotal');
                    echo $this->Form->control('iva');
                    echo $this->Form->control('descuento');
                    echo $this->Form->control('total');
                    echo $this->Form->control('clientes_id', ['options' => $clientes]);
                    echo $this->Form->control('vendedores_id', ['options' => $vendedores]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
