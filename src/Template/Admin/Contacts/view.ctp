<div class="contacts view large-9 medium-8 columns content">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->idContact], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->idContact)]) ?> </li>
    </ul>
    <h3><?= h($contact->Email) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contact->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($contact->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= $this->Number->format($contact->Telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= ($contact->Created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->Text)); ?>
    </div>
</div>
