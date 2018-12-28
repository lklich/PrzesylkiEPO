<?= $this->layout=false ?>
<?php $this->layout = 'login'; ?>
<?= $this->Flash->render() ?>

<center><br><h2>Pomocnik EPO</h2></center>
<center><h3>logowanie do systemu</h3></center>
<div class="users form large-5 medium-5 columns content">
<?= $this->Form->create() ?>
<center><?= $this->Form->control('username', ['label'=>false, 'autofocus' => true, 'required'=>true, 'placeholder'=>'Nazwa użytkownika']) ?></center>
  <?= $this->Form->control('password',['label'=>false, 'required'=>true, 'type'=>'password','placeholder'=>'Hasło']) ?>
  <?= $this->Form->submit('Zaloguj', array('class' => 'button','style'=>'width: 290px; height: 50px;')) ?>
  <?= $this->Form->end() ?>
  
<br>
<center><?= $this->Html->image('alkor_logo_mini.png') ?></center>
<center><i>lklich@alkor.edu.pl<i></center>

</div>
