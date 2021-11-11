<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Livro'), ['action' => 'edit', $livro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Livro'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Livros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Livro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="livros view content">
            <h3><?= h($livro->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($livro->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Autor') ?></th>
                    <td><?= h($livro->autor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genero') ?></th>
                    <td><?= h($livro->genero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editora') ?></th>
                    <td><?= h($livro->editora) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($livro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paginas') ?></th>
                    <td><?= $this->Number->format($livro->paginas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano Publicacao') ?></th>
                    <td><?= h($livro->ano_publicacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($livro->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($livro->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
