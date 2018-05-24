<?php include('header.php'); ?>
<?php include('data.php') ?>
<?php 
$kukanID = $_GET["kukka_id"]; 
$kukka = $kukat[$kukanID];
?>
<div class="kukka">
    <h2><?php echo $kukka["otsikko"] ?></h2>
    <p>
    <?php echo $kukka["teksti"] ?>
    </p>
</div>
<?php include('footer.php'); ?>
</body>
</html>