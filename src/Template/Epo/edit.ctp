<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Epo $epo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $epo->ident],
                ['confirm' => __('Are you sure you want to delete # {0}?', $epo->ident)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Epo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="epo form large-9 medium-8 columns content">
    <?= $this->Form->create($epo) ?>
    <fieldset>
        <legend><?= __('Edit Epo') ?></legend>
        <?php
            echo $this->Form->control('nazwa');
            echo $this->Form->control('numer');
            echo $this->Form->control('d_epo');
            echo $this->Form->control('opis');
            echo $this->Form->control('liczba_przesylek');
            echo $this->Form->control('czyus');
            echo $this->Form->control('kreator');
            echo $this->Form->control('modyfikator');
            echo $this->Form->control('d_kreacji');
            echo $this->Form->control('d_modyfikacji');
            echo $this->Form->control('guid');
            echo $this->Form->control('stan_epo');
            echo $this->Form->control('ekn_xml');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
