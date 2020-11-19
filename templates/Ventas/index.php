<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venta[]|\Cake\Collection\CollectionInterface $ventas
 */
?>
<div class="ventas index content">
    <?= $this->Html->link(__('New Venta'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ventas') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display " style="width:100%">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('subtotal') ?></th>
                    <th><?= $this->Paginator->sort('iva') ?></th>
                    <th><?= $this->Paginator->sort('descuento') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('clientes_id') ?></th>
                    <th><?= $this->Paginator->sort('vendedores_id') ?></th>
                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas as $venta) : ?>
                    <tr>
                        <td><?= $this->Number->format($venta->id) ?></td>
                        <td><?= h($venta->numero) ?></td>
                        <td><?= h($venta->fecha) ?></td>
                        <td><?= $this->Number->format($venta->subtotal) ?></td>
                        <td><?= $this->Number->format($venta->iva) ?></td>
                        <td><?= $this->Number->format($venta->descuento) ?></td>
                        <td><?= $this->Number->format($venta->total) ?></td>
                        <td><?= $venta->cliente->FullName ?></td>
                        <td><?= $venta->vendedore->FullName ?></td>
                       
                        <td >
                            <?= $this->Html->link('<i class="fa fa-eye" style="font-size:15px"></i>', ['controller' => 'Ventas', 'action' => 'view', $venta->id], ['escape' => false, 'class' => 'btn btn-success', 'title' => 'Ver Venta']) ?>
                            <?= $this->Html->link('<i class="fas fa-pencil-alt" style="font-size:15px"></i>', ['controller' => 'Ventas', 'action' => 'edit', $venta->id], ['escape' => false, 'class' => 'btn btn-info', 'title' => 'Editar Venta']) ?>
                            <?= $this->Form->postLink('<i class="fa fa-trash" style="font-size:15px"></i>', ['controller' => 'Ventas', 'action' => 'delete', $venta->id], ['confirm' => __('Estás seguro de que quieres eliminar el # {0}?', $venta->id), 'escape' => false, 'class' => 'btn btn-danger', 'title' => 'Eliminar Venta']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>