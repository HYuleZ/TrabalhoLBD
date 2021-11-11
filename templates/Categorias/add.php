<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 * @var \Cake\Collection\CollectionInterface|string[] $livros
 * @var \Cake\Collection\CollectionInterface|string[] $menus
 * @var \Cake\Collection\CollectionInterface|string[] $usuarios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Categorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categorias form content">
            <?= $this->Form->create($categoria) ?>
            <fieldset>
                <legend><?= __('Add Categoria') ?></legend>
                <?php
                    echo $this->Form->control('livro_id', ['options' => $livros]);
                    echo $this->Form->control('menu_id', ['options' => $menus]);
                    echo $this->Form->control('usuario_id', ['options' => $usuarios]);
                    echo $this->Form->control('paginas_lidas');
                    echo $this->Form->control('tipo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
