
<?php
$key = isset($key) ? $key : '<%= key %>';
?>
<tr>
    <td>
        <?php echo $this->Form->hidden("comments.{$key}.id") ?>
        <?php echo $this->Form->text("comments.{$key}.title"); ?>
        

    </td>   
    <td>
        <?php echo $this->Form->text("comments.{$key}.description"); ?>
    </td>
    <td class="actions">
        <a href="#" class="remove">Remove grade</a>
    </td>
</tr>