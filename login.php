<?php
    include_once './header.php';
?>


<h1 style="text-align: center">Prijava</h1>

<form action="login_check.php" method="post">
    <label>E-mail</label>
    <input type="email" name="email" placeholder="Vnesi email" 
           required="required" />
    <label>Geslo</label>
    <input type="password" name="pass" placeholder="Vnesi geslo" 
           required="required" />
    <br>
    <input type="submit" name="submit" value="Prijava" />
</form>



<?php
    include_once './footer.php';
?>