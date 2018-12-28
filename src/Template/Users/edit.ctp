
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edycja danych operatora programu') ?></legend>
        <?php
            echo $this->Form->control('username',['label'=>'Nazwa użytkownika']);
            echo $this->Form->control('fullname',['label'=>'Imię i nazwisko']);
            echo $this->Form->control('password',['label'=>'Hasło']);

        ?>
    </fieldset>
    <?= $this->Html->link(__('Anuluj'), ['action' => 'index'],['class'=>'button']) ?>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
