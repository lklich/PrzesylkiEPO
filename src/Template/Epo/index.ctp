<?php
//use Cake\I18n\Time;
//Time::setToStringFormat('yyyy-MM-dd HH:mm:ss');
?>

<div class="epo index large-12 medium-8 columns content">
    <h3><?= __('Epo - tylko niewysłane lub błędne') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"  width="100px"><?= $this->Paginator->sort('ident','Identyfikator') ?></th>
                <th scope="col" width="120px"><?= $this->Paginator->sort('numer','Numer książki') ?></th>
                <th scope="col"><?= $this->Paginator->sort('d_epo','Data EPO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('liczba_przesylek','Ilość') ?></th>
                <th scope="col"><?= $this->Paginator->sort('d_kreacji','Utworzono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('d_modyfikacji','Zmodyfikowano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stan_epo','Stan') ?></th>
                <th scope="col" class="actions"><?= __('Operacje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($epo as $epo): ?>
            <tr>
                <td><?= h($epo->ident) ?></td>
                <td><?= $this->Number->format($epo->numer) ?></td>
                <td><?= h(date_format($epo->d_epo, 'd.m.Y')) ?></td>
                <td><?= $this->Number->format($epo->liczba_przesylek) . ' szt.'  ?></td>
                <td><?= h($epo->d_kreacji) ?></td>
                <td><?= h($epo->d_modyfikacji) ?></td>
                <?php $stan='';
                if ($epo->stan_epo == 1) $stan='Przygotowana';
                if ($epo->stan_epo == 2) $stan='Błędna';
                if ($epo->stan_epo == 0) $stan='Wysłana';
                if ($epo->stan_epo == null ) $stan='Nieprawidłowa';
                if ($epo->stan_epo > 2) $stan='Błąd!';
                ?>
                <td><?= h($stan) ?></td>
                <td class="actions">
    <?= $this->Html->link(__('Zawartość'), ['controller'=>'ksiazka','action'=>'zawartosc', $epo->ident]) ?>
    <?= $this->Form->postLink(__('Wycofaj EPO'), ['controller'=>'epo','action' => 'wycofajepo', $epo->ident], ['confirm' => __('Czy na pewno chcesz wycofać EPO o numerze # {0}?', $epo->ident)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('pierwsze')) ?>
            <?= $this->Paginator->prev('< ' . __('poprzednie')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('następne') . ' >') ?>
            <?= $this->Paginator->last(__('ostatnie') . ' >>') ?>
        </ul>

        <p><?= $this->Paginator->counter(['format' => __('Strona {{page}} z {{pages}}, widok {{current}} rekord(ów) z {{count}}')]) ?></p>
    </div>
</div>
