<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detalle[]|\Cake\Collection\CollectionInterface $detalles
 */
?>
<div class="detalles index content">
    <?= $this->Html->link(__('New Detalle'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Detalles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('descuento') ?></th>
                    <th><?= $this->Paginator->sort('ventas_id') ?></th>
                    <th><?= $this->Paginator->sort('productos_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detalles as $detalle): ?>
                <tr>
                    <td><?= $this->Number->format($detalle->id) ?></td>
                    <td><?= $this->Number->format($detalle->precio) ?></td>
                    <td><?= $this->Number->format($detalle->cantidad) ?></td>
                    <td><?= $this->Number->format($detalle->descuento) ?></td>
                    <td><?= $detalle->has('venta') ? $this->Html->link($detalle->venta->id, ['controller' => 'Ventas', 'action' => 'view', $detalle->venta->id]) : '' ?></td>
                    <td><?= $detalle->has('producto') ? $this->Html->link($detalle->producto->id, ['controller' => 'Productos', 'action' => 'view', $detalle->producto->id]) : '' ?></td>
                    <td><?= h($detalle->created) ?></td>
                    <td><?= h($detalle->modified) ?></td>
                    <td >
                    <?= $this->Html->link('<i class="fa fa-eye" style="font-size:15px"></i>', ['controller' => 'Detalles', 'action' => 'view', $detalle->id],['escape' => false,'class'=>'btn btn-success','title'=>'Ver Detalle']) ?>
                        <?= $this->Html->link('<i class="fas fa-pencil-alt" style="font-size:15px"></i>', ['controller' => 'Detalles', 'action' => 'edit', $detalle->id],['escape' => false,'class'=>'btn btn-info','title'=>'Editar Detalle']) ?>
                        <?= $this->Form->postLink('<i class="fa fa-trash" style="font-size:15px"></i>', ['controller' => 'Detalles','action' => 'delete', $detalle->id], ['confirm' => __('Estás seguro de que quieres eliminar el # {0}?', $detalle->id),'escape' => false,'class'=>'btn btn-danger','title'=>'Eliminar Detalle']) ?>
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
