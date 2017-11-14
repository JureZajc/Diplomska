<?php
    include_once './header.php';
?>
<p style="text-align: center">Če želite spremeniti geslo ga lahko spremenite tukaj.</p>


<form action="./profile.php" method="post"> 
    <label> Vnesite staro geslo </label>
    <input type="password" name ="old_pass" placeholder="Vnesite staro geslo" required="required"/>
    <label>Vnesite novo geslo</label>
    <input type="password" name="pass3" placeholder="Vnesite novo geslo" required="required" />
    <label>Ponovite novo geslo</label>
    <input type="password" name="pass4" placeholder="Ponovite novo geslo" required="required" />
    <input type="submit" value="Spremeni geslo" />
</form>

<p style="text-align: center"> Če želite dodati osebne podatke naredite to tukaj. </p>
<form action="./add_name.php" method="post">
    <label>Vnesite svoje ime</label>
    <input type="text" name="name" placeholder="Vnesite svoje ime"/>
    <label> Vnesite svoj priimek </label>
    <input type="text" name="surname" placeholder="Vnesite svoj priimek"/>
    <input type="submit" value="Dodaj podatke"/>

</form>







<?php
    include_once './footer.php';
?>