<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detalle $detalle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $detalle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $detalle->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Detalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="detalles form content">
            <?= $this->Form->create($detalle) ?>
            <fieldset>
                <legend><?= __('Edit Detalle') ?></legend>
                <?php
                    echo $this->Form->control('precio');
                    echo $this->Form->control('cantidad');
                    echo $this->Form->control('descuento');
                    echo $this->Form->control('ventas_id', ['options' => $ventas]);
                    echo $this->Form->control('productos_id', ['options' => $productos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
