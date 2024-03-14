<?php
include "boot.php";
?>

<div class="container col-5">
<div class="text-center mt-5"></div>
<div>
<body background="image/latar2.jpg" style="background-size:cover;">

<form action="isi.php" class="form-control">
<div class="text-center mt-7">
    <div class="row">
        <div class="col">
            <br>
            <b>
                <div class="text-center">
                    <p class="ms-4 text fs-1">LOGIN</p>
            </b>
                </div>
                <br>
        <div class="cintainer">
    <div class="mb-3">
        <label for="exampleInputemail" class="form-label">username</label>
        <input type="text" class="form-control" id="exampleInpputEmail" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</form>
</div>
</div>