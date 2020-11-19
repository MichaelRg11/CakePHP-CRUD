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
        <table>
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
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendedores as $vendedore): ?>
                <tr>
                    <td><?= $this->Number->format($vendedore->id) ?></td>
                    <td><?= h($vendedore->documento) ?></td>
                    <td><?= h($vendedore->nombres) ?></td>
                    <td><?= h($vendedore->apellidos) ?></td>
                    <td><?= h($vendedore->direccion) ?></td>
                    <td><?= h($vendedore->telefono) ?></td>
                    <td><?= h($vendedore->correo) ?></td>
                    <td><?= $this->Number->format($vendedore->salario) ?></td>
                    <td><?= h($vendedore->created) ?></td>
                    <td><?= h($vendedore->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vendedore->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendedore->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedore->id)]) ?>
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
