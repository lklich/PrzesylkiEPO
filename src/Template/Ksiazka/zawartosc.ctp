

<div class="ksiazka index large-12 medium-8 columns content">
<?= $this->Html->link(__('Powrót'), ['controller'=>'epo','action'=>'index'],['class'=>'button']) ?>

    <h3><?= __('Zawartość przesyłek w paczce EPO nr ' . $epo->ident . ' z dnia ' . h(date_format($epo->d_epo, 'd.m.Y'))) ?></h3>
     <?php $stan='';
     if ($epo->stan_epo == 1) $stan='Przygotowana';
     if ($epo->stan_epo == 2) $stan='Błędna';
     if ($epo->stan_epo == 0) $stan='Wysłana';
     if ($epo->stan_epo == null ) $stan='Nieprawidłowa';
     if ($epo->stan_epo > 2) $stan='Błąd!';
     echo '<h4> Stan paczki: ' . h($stan) . '</h4>';
     echo $this->Form->postLink(__('Wycofaj EPO'), ['controller'=>'epo','action' => 'wycofajepo', $epo->ident], ['class'=>'button','confirm' => __('Czy na pewno chcesz wycofać EPO o numerze # {0}?', $epo->ident)]);

    ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th width="80px" scope="col"><?= $this->Paginator->sort('ident','Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sygnatura','Sygnatura') ?></th>
                <th width="180px" scope="col"><?= $this->Paginator->sort('adresat','Adresat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adres','Adres') ?></th>
                <th width="100px" scope="col"><?= $this->Paginator->sort('d_wyslania','Wysłano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nazwa_pisma','Nazwa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kod','Kod') ?></th>
                <th scope="col"><?= $this->Paginator->sort('d_kreacji','Utworzono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('d_modyfikacji','Zmodyfikowano') ?></th>
                <th width="80px" scope="col"><?= $this->Paginator->sort('czypolecony','Polecony') ?></th>
                <th width="80px" scope="col"><?= $this->Paginator->sort('czyzpo','ZPO') ?></th>
                <th width="80px" scope="col"><?= $this->Paginator->sort('czypriorytet','Priorytet') ?></th>
                <th width="80px" scope="col"><?= $this->Paginator->sort('czyzagraniczna','Zagranica') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ksiazka as $ksiazka): ?>
            <tr>
                <td><?= h($ksiazka->ident) ?></td>
                <td><?= h($ksiazka->sygnatura) ?></td>
                <td><?= h($ksiazka->adresat) ?></td>
                <td><?= h($ksiazka->adres) ?></td>
                <td><?= h(date_format($ksiazka->d_wyslania, 'd.m.Y')) ?></td>
                <td><?= h($ksiazka->nazwa_pisma) ?></td>
                <td><?= h($ksiazka->kod) ?></td>
                <td><?= h($ksiazka->d_kreacji) ?></td>
                <td><?= h($ksiazka->d_modyfikacji) ?></td>
                <td><?= h($ksiazka->czypolecony) ? 'Tak':'Nie' ?></td>
                <td><?= h($ksiazka->czyzpo) ? 'Tak':'Nie' ?></td>
                <td><?= h($ksiazka->czypriorytet) ? 'Tak':'Nie' ?></td>
                <td><?= h($ksiazka->czyzagraniczna)  ? 'Tak':'Nie' ?></td>
            </tr>
<?php
  $status='';
  if (strlen($ksiazka->sygnatura)<3) $status = $status . ' Błędna sygnatura. ';
  if (strlen($ksiazka->adresat)<7) $status = $status . ' Błędny adresat. ';
  if (strlen($ksiazka->ulica)<4) $status = $status . ' Brak adresu! ';
  if ((strlen($ksiazka->dom)<1) and (strlen($ksiazka->lokal))<1) $status = $status . ' Brak numeru domu! ';
  if ((strlen($ksiazka->lokal)>1) and (strlen($ksiazka->dom)<1)) $status = $status . ' Brak numeru dokmu! ';
  if (strlen($ksiazka->miejscowosc)<3) $status = $status . ' Brak miejscowości! ';
  if (strlen($ksiazka->adr_kod) != 5) $status = $status . ' Błąd kodu pocztowego: kod - ' . $ksiazka->adr_kod .  ' ';  
?>

            <tr>
            <?php if(strlen($status)>3) { echo '<td colspan=13 bgcolor="#FF0000"> <b>' . $status . '</b></td>';
            } else { echo '<td colspan=13>' . $status . '</td>'; } ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
