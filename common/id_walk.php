<?php
function button($id = 1, $title = 1)
{
    if (isset($_SESSION['questions'])) {
        $title = "Save. " . ((is_int($title)) ? "Go to $title" : $title);
    }
    return '<button type="submit" class="col-lg-2 btn btn-info text-cher fs-7" name="id" value=' . $id . '>' . $title . '</button>';
}

function buttonOrBlock($proviso, $id, $title)
{
    echo $proviso ? button($id, $title) : '<div class="col-2"></div>';
}

if (isset($_SESSION['admin'])) {
    $proviso = ($id < $count);
    $next = $id + 1;
} elseif (isset($_SESSION['questions'])) {
    $proviso = true;
    $next = ($count != $id) ?  $id + 1 : "Summ up";
}
?>
<div class="col-5"></div>
<?php buttonOrBlock($id > 1, -$id, $id - 1); ?>
<div class="col-2 text-info text-center align-bottom">
    <?php echo $id; ?>
</div>
<?php buttonOrBlock($proviso, $id, $next); ?>
<div class="col-1"></div>
