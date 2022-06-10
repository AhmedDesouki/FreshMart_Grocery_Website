<!DOCTYPE html>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js"></script>


    <style>
          
          .form-style-2 {
  max-width: 500px;
  padding: 150px 0px 10px 50px;
  font-family: 'Archivo Black', sans-serif;
  margin-left: auto;
  margin-right: auto;
  display: block;

}

.form-style-2-heading {
  font-weight: bold;
  padding-left: 75px;
  font-family: 'Archivo Black', sans-serif;
  margin-bottom: 20px;
  font-size: 15px;
  padding-bottom: 3px;
}

.form-style-2 label {
  display: block;
  margin: 0px 0px 15px 0px;
}

.form-style-2 label>span {
  width: 150px;
  font-weight: bold;
  float: left;
  padding-top: 8px;
  padding-right: 10px;
}

.form-style-2 span.required {
  color: red;
}

.form-style-2 .tel-number-field {
  width: 40px;
  text-align: center;
}

.form-style-2 input.input-field,
.form-style-2 .select-field {
  width: 48%;
}

.form-style-2 input.input-field,
.form-style-2 .tel-number-field,
.form-style-2 .textarea-field,
.form-style-2 .select-field {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  border: 1px solid #C2C2C2;
  box-shadow: 1px 1px 4px #EBEBEB;
  -moz-box-shadow: 1px 1px 4px #EBEBEB;
  -webkit-box-shadow: 1px 1px 4px #EBEBEB;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  padding: 7px;
  outline: none;
}

.form-style-2 .input-field:focus,
.form-style-2 .tel-number-field:focus,
.form-style-2 .textarea-field:focus,
.form-style-2 .select-field:focus {
  border: 1px solid #aa0082;
}

.form-style-2 .textarea-field {
  height: 100px;
  width: 55%;
}

.form-style-2 input[type=submit],
.form-style-2 input[type=button] {
  border: none;
  padding: 8px 15px 8px 15px;
  background: #aa0082;
  color: #fff;
  box-shadow: 1px 1px 4px #DADADA;
  -moz-box-shadow: 1px 1px 4px #DADADA;
  -webkit-box-shadow: 1px 1px 4px #DADADA;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
}

    </style>

<body>

<?php  
include_once "../includes/nav_admin.php";
?>


    <div class="form-style-2">
        <div class="form-style-2-heading">
            <h2>Update Product</h2>
        </div>
        <form action="products.php">
            <label for="field0"><input type="hidden" class="input-field" name="edit_product" value="" /></label>
            <label for="field1"><span>Product ID: <span class="required">*</span></span><input class="input-field"
                    name="id" value="" /></label>
            <label for="field2"><span>Product Name: <span class="required">*</span></span><input class="input-field"
                    name="name" value="" /></label>
            <label for="field3"><span>Product Price: <span class="required">*</span></span><input class="input-field"
                    name="price" value="" /></label>
            <label for="field4"><span>Product Quantity: <span class="required">*</span></span><input class="input-field"
                    name="quantity" value="" /></label>
            <label><span> </span><input type="submit" value="Submit" /></label>
        </form>
    </div>



    <center><img src="../images/footerstrip.png" style="width: 80%; "></center>
    <?php  
include_once "../includes/footer.php";
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../script.js"></script>
</body>