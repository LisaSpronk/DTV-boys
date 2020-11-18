<?php
include("beheerHeader.php");
include("beheerNav.php");
?>
<section>

<?php while($post = $result->fetch_assoc()): ?>
     <div class="post">

        <img src="images/posts/<?php echo $post['image']; ?>">

    </div>
            

<?php endwhile ?>

</section>