<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contum $contum
 * @var string[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contum->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contum->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conta'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conta form content">
            <?= $this->Form->create($contum) ?>
            <fieldset>
                <legend><?= __('Edit Contum') ?></legend>
                <?php
                    echo $this->Form->control('usuario_id', ['options' => $usuarios]);
                    echo $this->Form->control('login');
                    echo $this->Form->control('senha');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
