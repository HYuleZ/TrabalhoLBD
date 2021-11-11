<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contum $contum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contum'), ['action' => 'edit', $contum->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contum'), ['action' => 'delete', $contum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contum->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conta'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contum'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conta view content">
            <h3><?= h($contum->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $contum->has('usuario') ? $this->Html->link($contum->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $contum->usuario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Login') ?></th>
                    <td><?= h($contum->login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Senha') ?></th>
                    <td><?= h($contum->senha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contum->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($contum->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($contum->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
