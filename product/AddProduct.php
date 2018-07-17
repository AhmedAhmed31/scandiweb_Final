<?php
// This page for add Products

include '../init.php';
require 'Products.php';
$db = database::getInstance();
$new= new Products;
$db = new database($db);

$types=$new->ProductType($db);

// take data from fields and put it in Database
if (isset($_POST['submit']))
{

    $insert = $new->AddProduct($db);
}


?>


<?php include "../Templates/navebar.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">

            <br>
            <?php require "addform.php"; ?>
    </div>
</div>
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
// get values from product_type
    $('#product_type').change(function () {
        var el = $(this);
        var value = el.val();
        console.log(value);

        $('.custom-form').addClass('hidden');
        $('#form-' + value).removeClass('hidden');

    })
    // put values in another hidden input to put it in DB after
    $('.unit-value').on('keyup', function () {
        var el = $(this);
        var value = el.val();
        $('input[name="unit_value"]').val(value);
    })
// making all dimension in same input and putting  x between it "lxwxh "
    $('.unit-value-advance').on('keyup', function () {
        unitValues = [];
        $('.unit-value-advance').each(function (i, e) {
            unitValues.push($(this).val());
        })
        $('input[name="unit_value"]').val(unitValues.join('x'));
    })

</script>
</body>
</html>
