<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria[]|\Cake\Collection\CollectionInterface $categorias
 */
 ?>
<div class="categorias index content">
    <?= $this->Html->link(__('New Categoria'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorias') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display " style="width:100%">
            <thead class="thead-gray">
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria): ?>
                <tr>
                    <td><?= $this->Number->format($categoria->id) ?></td>
                    <td><?= h($categoria->descripcion) ?></td>
                    <td><?= h($categoria->created) ?></td>
                    <td><?= h($categoria->modified) ?></td>
                    <td>
                    <?= $this->Html->link('<i class="fa fa-eye" style="font-size:15px"></i>', ['controller' => 'Categorias', 'action' => 'view', $categoria->id],['escape' => false,'class'=>'btn btn-success','title'=>'Ver Categoria']) ?>
                        <?= $this->Html->link('<i class="fas fa-pencil-alt" style="font-size:15px"></i>', ['controller' => 'Categorias', 'action' => 'edit', $categoria->id],['escape' => false,'class'=>'btn btn-info','title'=>'Editar Categoria']) ?>
                        <?= $this->Form->postLink('<i class="fa fa-trash" style="font-size:15px"></i>', ['controller' => 'Categorias','action' => 'delete', $categoria->id], ['confirm' => __('Estás seguro de que quieres eliminar el # {0}?', $categoria->id),'escape' => false,'class'=>'btn btn-danger','title'=>'Eliminar Categoria']) ?>
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
