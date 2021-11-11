<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categoria'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categorias view content">
            <h3><?= h($categoria->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Livro') ?></th>
                    <td><?= $categoria->has('livro') ? $this->Html->link($categoria->livro->id, ['controller' => 'Livros', 'action' => 'view', $categoria->livro->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Menu') ?></th>
                    <td><?= $categoria->has('menu') ? $this->Html->link($categoria->menu->id, ['controller' => 'Menus', 'action' => 'view', $categoria->menu->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $categoria->has('usuario') ? $this->Html->link($categoria->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $categoria->usuario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($categoria->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($categoria->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paginas Lidas') ?></th>
                    <td><?= $this->Number->format($categoria->paginas_lidas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($categoria->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($categoria->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
