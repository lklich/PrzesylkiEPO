<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
?>

<div class="index large-12 medium-8 columns content">
<p>
<h3>Aktualna wersja programu: 0.1</h3>
<h2>Informacje o systemie Pomocnik EPO, prawa autorskie i licencja</h2>
<center><?= $this->Html->image('alkor_logo_mini.png') ?><br></center>
<center>Autorem systemu jest Leszek Klich.<br/></center>
<center>Kontakt: tel. 691050123, <a href="https://alkor.edu.pl">https://www.alkor.edu.pl</a><br/></center>

<br><b>Funkcje systemu:</b><br>
<ul>
<li>Przeglądanie ksiązki nadawczej wraz z wyszukiwaniem po kodzie oraz numerze przesyłki.</li>
<li>Przeglądnie paczek EPO, które zawierają błąd i nie zostały wysłane.</li>
<li>Analiza zawartości paczek EPO pod kątem błęów.</li>
<li>Wycofywanie paczek EPO, co umożliwia ich ponowną generację.</li>
</ul>

<br><b>Licencja:</b><br>
Niniejszy system jest darmowy do użytku komercyjnego.
<br><br>

<br/><b>System Wycofywanie EPO został napisany przy uzyciu następujących technologii:</b><br/>
<ul>
<li> Framework CakePHP 3, paradygmat MVC - http://cakephp.com - wersja frameworka: <?= Configure::version() ?> Red Velvet. </li>
<li> Biblioteka JQuery - JavaScript</li>
<?php
        try {
            $connection = ConnectionManager::get('default');
            $connected = $connection->connect();
        } catch (Exception $connectionError) {
            $connected = false;
            $errorMsg = $connectionError->getMessage();
            if (method_exists($connectionError, 'getAttributes')) :
                $attributes = $connectionError->getAttributes();
                if (isset($errorMsg['message'])) :
                    $errorMsg .= '<br />' . $attributes['message'];
                endif;
            endif;
        }
        ?>
<li> Serwer baz danych - MS SQL Server - biuro podawcze SAWA.</li>
   
         <?php if ($connected) : ?>
            <li class="bullet success">System jest poprawnie połączony z bazą danych biura podawczego.</li>
        <?php else : ?>
            <li class="bullet problem">Brak połączenia z bazą danych Biura Podawczego.<br /><?= $errorMsg ?></li>
        <?php endif; ?>

<br>
     <div class="row">
          <div class="col-6">
              <h4>Środowisko serwera</h4>
            <ul class="list-group">
              <?php if (version_compare(PHP_VERSION, '5.6.0', '>=')): ?>
                  <li class="list-group-item list-group-item-success">Wykryto poprawną wersję PHP <?= PHP_VERSION ?>.</li>
              <?php else: ?>
                  <li class="list-group-item list-group-item-danger">Błąd: Wersja PHP jest zbyt niska! Minimalna wersja to PHP 5.6.0 lub wyższa. Wykryto: <?= PHP_VERSION ?>.</li>
              <?php endif; ?>

              <?php if (extension_loaded('mbstring')): ?>
                  <li class="list-group-item list-group-item-success">Poprawnie załadowano moduł mbstring.</li>
              <?php else: ?>
                  <li class="list-group-item list-group-item-danger">Błąd: Musisz zainstalować moduł PHP mbstring!</li>;
              <?php endif; ?>

              <?php if (extension_loaded('openssl')): ?>
                  <li class="list-group-item list-group-item-success">Poprawnie wykryto moduł openssl.</li>
              <?php elseif (extension_loaded('mcrypt')): ?>
                  <li class="list-group-item list-group-item-success">PHP na serwerze posiada moduł kryptograficzny mcrypt!</li>
              <?php else: ?>
                  <li class="list-group-item list-group-item-danger">Błąd! Na serwerze nie wykryto modułu openssl lub mcrypt dla PHP.</li>
              <?php endif; ?>

              <?php if (extension_loaded('intl')): ?>
                  <li class="list-group-item list-group-item-success">Poprawnie wykryto moduł PHP intl.</li>
              <?php else: ?>
                  <li class="list-group-item list-group-item-danger">Błąd! Serwer PHP nie posiada rozszerzenia intl.</li>
              <?php endif; ?>
              </ul>
          </div>

              <div class="col-6">
              <h4>System plików</h4>
              <ul class="list-group">
              <?php if (is_writable(TMP)): ?>
                  <li class="list-group-item list-group-item-success">Katalog <i>tmp</i> jest zapisywalny.</li>
              <?php else: ?>
                  <li class="list-group-item list-group-item-danger">Błąd: Katalog tmp nie jest zapisywalny - wprowadź uprawnienia!</li>
              <?php endif; ?>

              <?php if (is_writable(LOGS)): ?>
                  <li class="list-group-item list-group-item-success">Katalog <i>logs</i> jest zapisywalny.</li>
              <?php else: ?>
                  <li class="list-group-item list-group-item-danger">Błąd! System musi mieć prawa do zapisu w katalogu logs!</li>
              <?php endif; ?>

              <?php $settings = Cache::config('_cake_core_'); ?>
              <?php if (!empty($settings)): ?>
 <li class="list-group-item list-group-item-success">Silnik pamięci podręcznej systemu: <em><?= $settings['className'] ?></em>.</li>
              <?php else: ?>
<li class="list-group-item list-group-item-danger">Błąd! Proszę sprawdzić ustawienia systemu. Pamięć podręczna nie działa poprawnie!</li>
              <?php endif; ?>
              </ul>
          </div>
        </div>


</ul>
</p>


</div>
