<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <!-- IE compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .input-group {
            margin: 10px;
            display: block;
        }

        .custom-select {
            margin: 10px;
        }
    </style>
    <title>Scandiweb Task</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/html5shiv.min.js"></script>
    <script src="../js/respond.min.js"></script>

</head>
<body>

<form class="add_product" method="post" action="">
    <select id="product_type" name="type" class="form-control ">
        <option value="0">Select type:</option>
        <?php foreach ($types as $type): ?>
            <option value="<?php echo $type['id'] ?>"><?php echo $type['name']; ?></option>
        <?php endforeach; ?>

    </select>
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name="Name1" class="form-control" id="Name" aria-describedby="Name"
               placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="Name">SKU</label>
        <input type="number" name="SKU" class="form-control" id="SKU" aria-describedby="SKU"
               placeholder="Enter SKU">
    </div>
    <div class="form-group">
        <label for="price">PRICE</label>
        <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
    </div>

    <!-- <div class="form-group">
         <label for="price">Image</label>
        <input type="file" name="pic" accept="image/*">
    </div>-->


    <input type="text" class="hidden" id="unit-value" name="unit_value">

    <hr>
    <div id="form-1" class="custom-form hidden">
        <label for="unit_value">Size</label>
        <input type="text" class="form-control unit-value" placeholder="Enter CD/DVD Size">
    </div>

    <div id="form-2" class="custom-form hidden">
        <label for="unit_value">Weight</label>
        <input type="text" class="form-control unit-value" placeholder="Enter Weight">
    </div>

    <div id="form-3" class="custom-form hidden">
        <label for="unit_value">Height</label>
        <input type="text" class="form-control unit-value-advance" id="height" placeholder="Enter Height">

        <label for="unit_value">Width</label>
        <input type="text" class="form-control unit-value-advance" id="widgth" placeholder="Enter Widgth">

        <label for="unit_value">Length</label>
        <input type="text" class="form-control unit-value-advance" id="widgth" placeholder="Enter Length">
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6 pull-pull">
        <button class="btn btn-primary" name="submit" type="submit">SAVE</button>
    </div>
</form>