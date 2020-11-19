<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
?>

<div class="clientes index content">
    <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clientes') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display " style="width:100%">
            <thead class="thead-gray">
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('documento') ?></th>
                    <th><?= $this->Paginator->sort('nombres') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                    <td><?= h($cliente->documento) ?></td>
                    <td><?= h($cliente->nombres) ?></td>
                    <td><?= h($cliente->apellidos) ?></td>
                    <td><?= h($cliente->direccion) ?></td>
                    <td><?= h($cliente->telefono) ?></td>
                    <td><?= h($cliente->correo) ?></td>
                    <td><?= h($cliente->created) ?></td>
                    <td><?= h($cliente->modified) ?></td>
                    <td >
                        <?= $this->Html->link('<i class="fa fa-eye" style="font-size:15px"></i>', ['controller' => 'Clientes', 'action' => 'view', $cliente->id],['escape' => false,'class'=>'btn btn-success','title'=>'Ver Cliente']) ?>
                        <?= $this->Html->link('<i class="fas fa-pencil-alt" style="font-size:15px"></i>', ['controller' => 'Clientes', 'action' => 'edit', $cliente->id],['escape' => false,'class'=>'btn btn-info','title'=>'Editar Cliente']) ?>
                        <?= $this->Form->postLink('<i class="fa fa-trash" style="font-size:15px"></i>', ['controller' => 'Clientes','action' => 'delete', $cliente->id], ['confirm' => __('Estás seguro de que quieres eliminar el # {0}?', $cliente->id),'escape' => false,'class'=>'btn btn-danger','title'=>'Eliminar Cliente']) ?>
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
