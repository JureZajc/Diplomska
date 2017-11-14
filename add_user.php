<?php
    include_once './header.php';
?>
<h1 style="text-align: center">Registracija</h1>
        <form action="user_check.php" method="post">
            <label>Uporabniško ime</label>
            <input type="text" name="username" placeholder="Vpišite uporabniško ime" required="required"/>
            <label>Email</label>
            <input type="email" name="email" placeholder="Vpišite email" required="required" />
            <label>Geslo</label>
            <input type="password" name="pass1" placeholder="Vpišite geslo" required="required" />
            <label>Ponovite geslo </label>
            <input type="password" name="pass2" placeholder="Ponovite geslo " required="required" />
            <input type="submit" name="submit" value="Registriraj se" />
            <input type="reset" name="reset" value="Prekliči" />
        </form>
<?php
    include_once './footer.php';
?>