<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('status');
        ?>
    </fieldset>    





     <fieldset>
        <legend><?php echo __('Comment');?></legend>
        <table id="grade-table">
            <thead>
                <tr>
                    <th>title</th>
                    <th>description</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($this->request->data['Comment'])) :?>
                    <?php for ($key = 0; $key < count($this->request->data['Comment']); $key++) :?>
                        <?php echo $this->element('comments', array('key' => $key));?>
                    <?php endfor;?>
                <?php endif;?>
            </tbody>
            <tfoot>
                <tr>
                
                    <td colspan="2"></td>
                    <td class="actions">
                        <a href="#" class="add">Add Comment</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </fieldset>
    <script id="grade-template" type="text/x-underscore-template">
        <?php echo $this->element('comments');?>
    </script>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script>
$(document).ready(function() {
    var
        gradeTable = $('#grade-table'),
        gradeBody = gradeTable.find('tbody'),
        numberRows = gradeTable.find('tbody > tr').length,
        gradeTemplate = _.template($('#grade-template').remove().text());
    gradeTable
        .on('click', 'a.add', function(e) {
            e.preventDefault();
            $(gradeTemplate({key: numberRows++}))
                .hide()
                .appendTo(gradeBody)
                .fadeIn('fast');
        })
        .on('click', 'a.remove', function(e) {
                e.preventDefault();
            $(this)
                .closest('tr')
                .fadeOut('fast', function() {
                    $(this).remove();
                });
        });
        if (numberRows === 0) {
            gradeTable.find('a.add').click();
        }
});
</script>