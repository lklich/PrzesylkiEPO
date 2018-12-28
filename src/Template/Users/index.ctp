
<div class="users index large-12 medium-8 columns content">
<?= $this->Html->link(__('Dodaj'), ['action' => 'add'],['class'=>'button']) ?>

    <h3><?= __('Operatorzy programu') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
              <th scope="col"><?= $this->Paginator->sort('fullname','Imię i nazwisko') ?></th>
              <th scope="col"><?= $this->Paginator->sort('username','Użytkownik') ?></th>
              <th scope="col"><?= $this->Paginator->sort('password','Hasło') ?></th>
              <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->fullname) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edycja'), ['action' => 'edit', $user->id]) ?>
                      <?php if ($user->id != 1) { ?>
                    <?= $this->Form->postLink(__('Usuń'), ['action' => 'delete', $user->id], ['confirm' => __('Czy na pewno chcesz usunąć tego operatora?', $user->id)]) ?>
                    <?php } ?>
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
