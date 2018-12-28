
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Dodawanie operatora programu') ?></legend>
        <?php
            echo $this->Form->control('username',['label'=>'Nazwa logowania']);
            echo $this->Form->control('password',['label'=>'Hasło dostępu']);
            echo $this->Form->control('fullname',['label'=>'Pełna nazwa']);
        ?>
    </fieldset>
    <?= $this->Html->link(__('Anuluj'), ['action' => 'index'],['class'=>'button']) ?>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
