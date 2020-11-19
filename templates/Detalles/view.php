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
            <?= $this->Html->link(__('Edit Detalle'), ['action' => 'edit', $detalle->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Detalle'), ['action' => 'delete', $detalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalle->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Detalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Detalle'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-50">
        <div class="detalles view content">
            <h3><?= h($detalle->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Venta') ?></th>
                    <td><?= $detalle->has('venta') ? $this->Html->link($detalle->venta->id, ['controller' => 'Ventas', 'action' => 'view', $detalle->venta->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Producto') ?></th>
                    <td><?= $detalle->has('producto') ? $this->Html->link($detalle->producto->id, ['controller' => 'Productos', 'action' => 'view', $detalle->producto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($detalle->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($detalle->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($detalle->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descuento') ?></th>
                    <td><?= $this->Number->format($detalle->descuento) ?></td>
                </tr>

            </table>
        </div>
    </div>
</div>