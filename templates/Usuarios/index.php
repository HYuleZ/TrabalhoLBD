<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<div class="usuarios index content">
    <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('sobrenome') ?></th>
                    <th><?= $this->Paginator->sort('nascimento') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                    <td><?= h($usuario->cpf) ?></td>
                    <td><?= h($usuario->nome) ?></td>
                    <td><?= h($usuario->sobrenome) ?></td>
                    <td><?= h($usuario->nascimento) ?></td>
                    <td><?= h($usuario->email) ?></td>
                    <td><?= h($usuario->created) ?></td>
                    <td><?= h($usuario->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
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
        <a href="Conta"><button class="button-page">Conta</button></a>
        <a href="livros"><button class="button-page">Livros</button></a>
        <a href="Menus"><button class="button-page">Menus</button></a>
        <a href="Categorias"><button class="button-page">Categorias</button></a>
    </div>
</div>

<style>
    .button-page{
        background-color: #7e47a6;
    }
</style>
