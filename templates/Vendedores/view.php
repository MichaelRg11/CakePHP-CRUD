<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendedore $vendedore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vendedore'), ['action' => 'edit', $vendedore->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vendedore'), ['action' => 'delete', $vendedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedore->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vendedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vendedore'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-100">
        <div class="vendedores view content">
            <h3><?= h($vendedore->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Documento') ?></th>
                    <td><?= h($vendedore->documento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombres') ?></th>
                    <td><?= h($vendedore->nombres) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($vendedore->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($vendedore->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($vendedore->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($vendedore->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vendedore->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salario') ?></th>
                    <td><?= $this->Number->format($vendedore->salario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($vendedore->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($vendedore->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
