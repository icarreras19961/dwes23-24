<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<div style="width: 15%; margin:auto; margin-top:50px">
  <form class="shadow bg-white rounded" action="/student034/dwes/db/reservations/db_reservation_insert.php" method="POST">


    <div class="form-group">
      <label class="m-2">Score <input class="form-control" type="number" name="review_score"></label>
    </div>
    <div class="form-group">
      <label class="m-2">Comment <input class="form-control" type="textarea" name="review_score"></label>
    </div>
    <div class="form-group" style="text-align: center;">
      <label class="m-2"><input class="btn btn-primary" type="submit" value="submit" name="submit"></label>
    </div>
  </form>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>