<?php 
    include "includes/header.php"; 
    ?> 


Product Page


<p id="demo"></p>

<script>
const cars = ["BMW", "Volvo", "Saab", "Ford", "Fiat", "Audi"];

let text = "";
for (let i = 0; i < cars.length; i++) {
  text += cars[i] + "<br>";
}

document.getElementById("demo").innerHTML = text;
</script>
<?php
?>

<?php 
    include "includes/footer.php"; 
    ?> 
