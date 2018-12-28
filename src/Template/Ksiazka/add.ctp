<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ksiazka $ksiazka
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ksiazka'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ksiazka form large-9 medium-8 columns content">
    <?= $this->Form->create($ksiazka) ?>
    <fieldset>
        <legend><?= __('Add Ksiazka') ?></legend>
        <?php
            echo $this->Form->control('numer_ks');
            echo $this->Form->control('sygnatura');
            echo $this->Form->control('adresat');
            echo $this->Form->control('adres');
            echo $this->Form->control('rnumer');
            echo $this->Form->control('d_wyslania');
            echo $this->Form->control('s_numer');
            echo $this->Form->control('masa');
            echo $this->Form->control('oplata');
            echo $this->Form->control('kod');
            echo $this->Form->control('czyus');
            echo $this->Form->control('kreator');
            echo $this->Form->control('d_kreacji');
            echo $this->Form->control('d_modyfikacji');
            echo $this->Form->control('modyfikator');
            echo $this->Form->control('uwagi');
            echo $this->Form->control('czypolecony');
            echo $this->Form->control('czyzpo');
            echo $this->Form->control('czypriorytet');
            echo $this->Form->control('czyzagraniczna');
            echo $this->Form->control('id_epo');
            echo $this->Form->control('nazwa_adresata');
            echo $this->Form->control('nazwa_adresata2');
            echo $this->Form->control('ulica');
            echo $this->Form->control('dom');
            echo $this->Form->control('lokal');
            echo $this->Form->control('miejscowosc');
            echo $this->Form->control('adr_kod');
            echo $this->Form->control('kraj');
            echo $this->Form->control('nazwa_pisma');
            echo $this->Form->control('guid');
            echo $this->Form->control('gabaryt');
            echo $this->Form->control('epo');
            echo $this->Form->control('status_epo');
            echo $this->Form->control('EpoGuid');
            echo $this->Form->control('sposob_doreczenia');
            echo $this->Form->control('do_rak');
            echo $this->Form->control('czykarna');
            echo $this->Form->control('tytul');
            echo $this->Form->control('id_kontynent');
            echo $this->Form->control('paczka');
            echo $this->Form->control('kod_kraju');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
