<?php include('header.php'); ?>
<?php include('data.php'); ?>

<?php foreach( $kukat as $id => $kukka ) : ?> 
 <div class="kukka">
    <a href="kukka.php?kukka_id=<?php echo "$id"?>">
    <h2><?php echo $kukka["otsikko"]?></h2></a>
   <!-- <p><?php echo $kukka["ote"]?></p> -->
</div>
<?php endforeach ?>
<?php include('footer.php'); ?>
</body>
</html>