<?php
$key = isset($key) ? $key : '<%= key %>';
?>
<tr>
    <td>
        <?php echo $this->Form->hidden("Grades.{$key}.id") ?>
        <?php echo $this->Form->text("Grades.{$key}.subject"); ?>
    </td>   
    <td>
        <?php echo $this->Form->select("Grades.{$key}.grades", array(
            'A+',
            'A',
            'B+',
            'B',
            'C+',
            'C',
            'D',
            'E',
            'F'
        ), array(
            'empty' => '-- Select grade --'
        )); ?>
    </td>
    <td class="actions">
        <a href="#" class="remove">Remove grade</a>
    </td>
</tr>