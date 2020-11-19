<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto[]|\Cake\Collection\CollectionInterface $productos
 */
?>
<div class="productos index content">
    <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Productos') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display " style="width:100%">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('descuento') ?></th>
                    <th><?= $this->Paginator->sort('iva') ?></th>
                    <th><?= $this->Paginator->sort('categorias_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->id) ?></td>
                    <td><?= h($producto->descripcion) ?></td>
                    <td><?= $this->Number->format($producto->precio) ?></td>
                    <td><?= $this->Number->format($producto->cantidad) ?></td>
                    <td><?= $this->Number->format($producto->descuento) ?></td>
                    <td><?= $this->Number->format($producto->iva) ?></td>
                    <td><?= $producto->has('categoria') ? $this->Html->link($producto->categoria->id.'-'.$producto->categoria->descripcion, ['controller' => 'Categorias', 'action' => 'view', $producto->categoria->id]) : '' ?></td>
                    <td><?= h($producto->created) ?></td>
                    <td><?= h($producto->modified) ?></td>
                    <td>
                    <?= $this->Html->link('<i class="fa fa-eye" style="font-size:15px"></i>', ['controller' => 'Productos', 'action' => 'view', $producto->id],['escape' => false,'class'=>'btn btn-success','title'=>'Ver Producto']) ?>
                        <?= $this->Html->link('<i class="fas fa-pencil-alt" style="font-size:15px"></i>', ['controller' => 'Productos', 'action' => 'edit', $producto->id],['escape' => false,'class'=>'btn btn-info','title'=>'Editar Producto']) ?>
                        <?= $this->Form->postLink('<i class="fa fa-trash" style="font-size:15px"></i>', ['controller' => 'Productos','action' => 'delete', $producto->id], ['confirm' => __('Estás seguro de que quieres eliminar el # {0}?', $producto->id),'escape' => false,'class'=>'btn btn-danger','title'=>'Eliminar Producto']) ?>
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
