<?php
$val = $_GET['val'];
$lang = $_GET['lang'];
header('location:summa.html');
?>

<html>

<!-- Button trigger modal -->
<button
  type="button"
  class="btn btn-primary"
  data-mdb-toggle="modal"
  data-mdb-target="#staticBackdrop"
>
  Launch static backdrop modal
</button>

<!-- Modal -->
<div
  class="modal fade"
  id="staticBackdrop"
  data-mdb-backdrop="static"
  data-mdb-keyboard="false"
  tabindex="-1"
  aria-labelledby="staticBackdropLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">...</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
</html>