<?php
include './Inc/data.php';
?>
<!-- Cards -->
<div>
  <h3 class="text-center my-3">Featured Cities</h3>
</div>

<div class="row gap-5 d-flex justify-content-center m-5">
  <?php

  foreach ($cards as $id => $card) {
  ?>
    <div class="card" style="width: 18rem;">
      <img src="./Img/<?php echo $card['img']?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $card['title'] ?></h5>
        <p><?php echo $card['desc'] ?></p>
        <a href="./details.php?id=<?= $id ?>" class="btn btn-outline-primary">Go somewhere</a>
      </div>
    </div>
  <?php }; ?>

</div>