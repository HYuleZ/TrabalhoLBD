<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro[]|\Cake\Collection\CollectionInterface $livros
 */

use PhpParser\Node\Stmt\Label;

?>
<div class="livros index content">
    <?= $this->Html->link(__('Novo Livro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Livros') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('autor') ?></th>
                    <th><?= $this->Paginator->sort('genero', ['label' => 'Gênero']) ?></th>
                    <th><?= $this->Paginator->sort('editora') ?></th>
                    <th><?= $this->Paginator->sort('ano_publicacao', ['label' => 'Publicação']) ?></th>
                    <th><?= $this->Paginator->sort('paginas', ['label' => 'Páginas']) ?></th>
                    <th><?= $this->Paginator->sort('created', ['label' => 'Criado']) ?></th>
                    <th><?= $this->Paginator->sort('modified', ['label'=> 'Modificado']) ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($livros as $livro): ?>
                <tr>
                    <td><?= $this->Number->format($livro->id) ?></td>
                    <td><?= h($livro->nome) ?></td>
                    <td><?= h($livro->autor) ?></td>
                    <td><?= h($livro->genero) ?></td>
                    <td><?= h($livro->editora) ?></td>
                    <td><?= h($livro->ano_publicacao) ?></td>
                    <td><?= $this->Number->format($livro->paginas) ?></td>
                    <td><?= h($livro->created) ?></td>
                    <td><?= h($livro->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $livro->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $livro->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $livro->id], ['confirm' => __('Certeza que deseja deletar o item: #{0}?', $livro->id)]) ?>
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
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}} no total')) ?></p>
    </div>
    <div>
        <a href="Conta"><button class="button-page">Conta</button></a>
        <a href="Menus"><button class="button-page">Menus</button></a>
        <a href="Usuarios"><button class="button-page">Usuarios</button></a>
        <a href="Categorias"><button class="button-page">Categorias</button></a>
    </div>
</div>
<style>
    .button-page{
        background-color: #7e47a6;
    }

    .button float-right{
        background-color: #7e47a6;
    }
</style>
