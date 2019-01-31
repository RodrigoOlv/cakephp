<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagina[]|\Cake\Collection\CollectionInterface $paginas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pagina'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paginas index large-9 medium-8 columns content">
    <h3><?= __('Paginas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paginas as $pagina): ?>
            <tr>
                <td><?= $this->Number->format($pagina->id) ?></td>
                <td><?= h($pagina->titulo) ?></td>
                <td><?= h($pagina->url) ?></td>
                <td><?= $pagina->has('categoria') ? $this->Html->link($pagina->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $pagina->categoria->id]) : '' ?></td>
                <td><?= h($pagina->created) ?></td>
                <td><?= h($pagina->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pagina->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pagina->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pagina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pagina->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
