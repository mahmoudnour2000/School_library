<?php 
    include './Inc/header.php';
?>

<?php 
    include './components/nav.php';
    include './Inc/data.php';

    $id = $_GET['id'];
    $card = $cards[$id];



?>

    <div class="bg-dark py-5 border-top border-warning-subtle border-5">
        <h1 class="text-warning text-center">Travel In Egypt</h1>
    </div>

<div class="container my-5 ">
<div class="row ">
    <div class="col-lg-6">
        <img src="./Img/<?php echo $card['img']?>" alt="">
    </div>

    <div class="col-lg-6 ">
        <h2 class="fs-1"><?php echo $card['title'] ?></h2>
        <p class="py-3"><?php echo $card['desc'] ?></p>
        <a href="./index.php" class="btn btn-warning">Back To Home</a>
    </div>

</div>
</div>


<?php 
    include './Inc/footer.php'
?>