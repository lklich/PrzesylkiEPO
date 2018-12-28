<div class="ksiazka index large-12 medium-8 columns content">
    <h3><?= __('Podgląd książki nadawczej - tylko niewysłane') ?></h3>

<table><tr>
<?= $this->Form->create('search',['style'=>'width: 200px','class'=>'navbar-form navbar-left']) ?>
<td width="220px"><?= $this->Form->input('kod',['placeholder'=>'Kod przesyłki','label'=>false]) ?></td>
<td width="220px"><?= $this->Form->input('adresat',['placeholder'=>'Adresat','label'=>false]) ?></td>
<td> <?= $this->Form->submit('Filtruj', ['style'=>'width: 140px; height: 45px','class'=>'button', 'title' => 'Wyszukaj']) ?></td>
<td><?= $this->Html->link(__('Zamknij'), ['controller' => 'menu', 'action' => 'index'],['class'=>'button']) ?></td>
<?= $this->Form->end() ?>
</tr></table>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sygnatura','Sygnatura') ?></th>
                <th scope="col" width="80px"><?= $this->Paginator->sort('numer_ks','Książka') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresat','Adresat') ?></th>
s                <th scope="col"><?= $this->Paginator->sort('d_wyslania','Wysłano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nazwa_pisma','Nazwa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('oplata','Opłata') ?></th>
                <th scope="col" width="140px"><?= $this->Paginator->sort('kod','Kod') ?></th>
                <th scope="col"><?= $this->Paginator->sort('czypolecony','Polecony') ?></th>
                <th scope="col"><?= $this->Paginator->sort('czyzpo','ZPO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('czyzagraniczna','Zagraniczna') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_epo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kod_kraju') ?></th>
                <th scope="col" class="actions"><?= __('Operacje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ksiazka as $ksiazkas): ?>
            <tr>
                <td><?= h($ksiazkas->sygnatura) ?></td>
                <td><?= $this->Number->format($ksiazkas->numer_ks) ?></td>
                <td><?= h($ksiazkas->adresat) ?></td>
                <td><?= h($ksiazkas->adres) ?></td>
                <td><?= h(date_format($ksiazkas->d_wyslania, 'd.m.Y')) ?></td>
                <td><?= h($ksiazkas->nazwa_pisma) ?></td>
                <td><?= $this->Number->format($ksiazkas->oplata) ?></td>
                <td><?= h($ksiazkas->kod) ?></td>
                <td><?= h($ksiazkas->czypolecony) ? 'Tak':'Nie' ?></td>
                <td><?= $this->Number->format($ksiazkas->czyzpo) ? 'Tak':'Nie' ?></td>
                <td><?= $this->Number->format($ksiazkas->czyzagraniczna) ? 'Tak':'Nie' ?></td>
                <?php $stan='';
                if ($ksiazkas->status_epo == 1) $stan='Przygotowana';
                if ($ksiazkas->status_epo == 2) $stan='Błędna';
                if ($ksiazkas->status_epo == 0) $stan='Wysłana';
                if ($ksiazkas->status_epo == null ) $stan='Błędna';
                if ($ksiazkas->status_epo > 2) $stan='Błędna!';
                ?>
                <td><?= h($stan) ?> </td>

                <td><?= h($ksiazkas->kod_kraju) ?></td>
                <td class="actions">
				 <?php 
				   if ($ksiazkas->id_epo <> null ) { echo $this->Html->link(__('Pokaz EPO'), ['controller'=>'ksiazka', 'action'=>'zawartosc', $ksiazkas->id_epo]); }
				   else { echo "Brak EPO"; } ?>
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
