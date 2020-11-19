<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendedore[]|\Cake\Collection\CollectionInterface $vendedores
 */
?>
<div class="vendedores index content">
    <?= $this->Html->link(__('New Vendedore'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vendedores') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display " style="width:100%">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('documento') ?></th>
                    <th><?= $this->Paginator->sort('nombres') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('salario') ?></th>


                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendedores as $vendedore) : ?>
                    <tr>
                        <td><?= $this->Number->format($vendedore->id) ?></td>
                        <td><?= h($vendedore->documento) ?></td>
                        <td><?= h($vendedore->nombres) ?></td>
                        <td><?= h($vendedore->apellidos) ?></td>
                        <td><?= h($vendedore->direccion) ?></td>
                        <td><?= h($vendedore->telefono) ?></td>
                        <td><?= h($vendedore->correo) ?></td>
                        <td><?= $this->Number->format($vendedore->salario) ?></td>

                        <td>
                            <?= $this->Html->link('<i class="fa fa-eye" style="font-size:15px"></i>', ['controller' => 'Vendedores', 'action' => 'view', $vendedore->id], ['escape' => false, 'class' => 'btn btn-success', 'title' => 'Ver Vendedores']) ?>
                            <?= $this->Html->link('<i class="fas fa-pencil-alt" style="font-size:15px"></i>', ['controller' => 'Vendedores', 'action' => 'edit', $vendedore->id], ['escape' => false, 'class' => 'btn btn-info', 'title' => 'Editar Vendedor']) ?>
                            <?= $this->Form->postLink('<i class="fa fa-trash" style="font-size:15px"></i>', ['controller' => 'Vendedores', 'action' => 'delete', $vendedore->id], ['confirm' => __('Estás seguro de que quieres eliminar el # {0}?', $vendedore->id), 'escape' => false, 'class' => 'btn btn-danger', 'title' => 'Eliminar Vendedor']) ?>
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