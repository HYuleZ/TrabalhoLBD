<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contum[]|\Cake\Collection\CollectionInterface $conta
 */
?>
<div class="conta index content">
    <?= $this->Html->link(__('New Contum'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conta') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th><?= $this->Paginator->sort('login') ?></th>
                    <th><?= $this->Paginator->sort('senha') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conta as $contum): ?>
                <tr>
                    <td><?= $this->Number->format($contum->id) ?></td>
                    <td><?= $contum->has('usuario') ? $this->Html->link($contum->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $contum->usuario->id]) : '' ?></td>
                    <td><?= h($contum->login) ?></td>
                    <td><?= h($contum->senha) ?></td>
                    <td><?= h($contum->created) ?></td>
                    <td><?= h($contum->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contum->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contum->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contum->id)]) ?>
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
    <div>
        <a href="Livros"><button class="button-page">Livros</button></a>
        <a href="Menus"><button class="button-page">Menus</button></a>
        <a href="Usuarios"><button class="button-page">Usuarios</button></a>
        <a href="Categorias"><button class="button-page">Categorias</button></a>
    </div>
</div>
<style>
    .button-page{
        background-color: #7e47a6;
    }
</style>
