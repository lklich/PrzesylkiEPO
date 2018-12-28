<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Epo $epo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Epo'), ['action' => 'edit', $epo->ident]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Epo'), ['action' => 'delete', $epo->ident], ['confirm' => __('Are you sure you want to delete # {0}?', $epo->ident)]) ?> </li>
        <li><?= $this->Html->link(__('List Epo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Epo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="epo view large-9 medium-8 columns content">
    <h3><?= h($epo->ident) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nazwa') ?></th>
            <td><?= h($epo->nazwa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opis') ?></th>
            <td><?= h($epo->opis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Guid') ?></th>
            <td><?= h($epo->guid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ident') ?></th>
            <td><?= $this->Number->format($epo->ident) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numer') ?></th>
            <td><?= $this->Number->format($epo->numer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Liczba Przesylek') ?></th>
            <td><?= $this->Number->format($epo->liczba_przesylek) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Czyus') ?></th>
            <td><?= $this->Number->format($epo->czyus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kreator') ?></th>
            <td><?= $this->Number->format($epo->kreator) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modyfikator') ?></th>
            <td><?= $this->Number->format($epo->modyfikator) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stan Epo') ?></th>
            <td><?= $this->Number->format($epo->stan_epo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('D Epo') ?></th>
            <td><?= h($epo->d_epo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('D Kreacji') ?></th>
            <td><?= h($epo->d_kreacji) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('D Modyfikacji') ?></th>
            <td><?= h($epo->d_modyfikacji) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Ekn Xml') ?></h4>
        <?= $this->Text->autoParagraph(h($epo->ekn_xml)); ?>
    </div>
</div>
