<?php require_once './inc/header.php'; session_start();?>
<link rel="stylesheet" href="./css/book.css">
</head>
<body>
<?php require_once './inc/nav.php'; ?>

<section id="book">
    <div class="container">
      <form>
        <div class="row">
          <div class="col-md-12">
            <label style="margin-bottom: 8px;">Enter Email</label>
            <input type="email" class="form-control input">
          </div>
          <div class="col-md-12">
            <label style="margin-bottom: 8px;">Enter Name</label>
            <input type="text" class="form-control input">
          </div>
          <div class="col-md-12">
            <label style="margin-bottom: 8px;">Enter Mobile Number</label>
            <input type="number" class="form-control input">
          </div>
          <div class="col-md-6">
            <label for="from">From</label>
            <select id="from" class="form-control">
              <option value="none" selected disabled hidden>Select an option</option>
              <option value="Tirupati">Tirupati</option>
              <option value="Vizag">Vizag</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="to">To</label>
            <select id="to" class="form-control">
              <option value="none" selected disabled hidden>Select an option</option>
              <option value="Rajahmundry">Rajahmundry</option>
              <option value="Amaravathi">Amaravathi</option>
            </select>
          </div>
          <label class="col-md-6" style="padding-left: 20px; margin-top: 16px;">Select Number Of Persons</label>
          <div class="col-md-6"></div>
          <!-- <div class=""> -->
            <i class="fas fa-minus-circle col-sm-1" id="minus"></i>
            <input type="number" id="number" value="0" class="form-control col-sm-10 input">
            <i class="fas fa-plus-circle col-sm-1" id="plus"></i>
          <!-- </div> -->
          <div class="col-md-12">
            <input type="button" class="btn btn-block" id="bt" onclick="abc()"  data-toggle="modal" data-target="#exampleModal" value="Check Price" />
          </div>
        </div>
      </form>
      <!-- <p id="cost"></p> -->
      
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Price Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p id="cost"></p>
            </div>
            <div class="modal-footer">
              <button type="button" id="bt" class="btn btn-secondary" data-dismiss="modal" style="background-color: #667ACD;">Close</button>
              <button type="button" id="bt" class="btn btn-primary">Book Now</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php require_once './inc/footer.php'; ?>
<script type="text/javascript" src="./js/book.js"></script>
</body>
</html>