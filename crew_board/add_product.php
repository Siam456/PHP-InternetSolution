<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CDN Start-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CDN End -->
    <link rel="shortcut icon" href="circle-cropped.png">
    <!-- ICONS PACK FONT-AWESOME -->
    <script src="https://kit.fontawesome.com/777b9d824c.js" crossorigin="anonymous"></script>
    <!-- END ICONS PACK FONT-AWESOME -->
    <!--DATA TABLE CDN-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- DATA TABLE CDN ENDS -->
    

    <title>Document</title>
</head>
<body>
  <?php
    include("./crew_nav.php");
  ?>


<!-- Modal -->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">ADD NEW PRODUCT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="insertcode.php" method="POST">
      <div class="modal-body">
              <div class="form-group">
                  <label for="">Product ID</label>
                    <input type="number" name="pid" class="form-control" placeholder="Enter Product Id" required>
              </div>
              <div class="form-group">
                  <label for="">Product Name</label>
                    <input type="text" name="pname" class="form-control" placeholder="Enter Product Name" required>
              </div>
              <div class="form-group">
                  <label for="">Price</label>
                    <input type="number" name="price" class="form-control" placeholder="Enter Price" required>
              </div>
              <div class="form-group">
                  <label for="">Enter Image URL</label>
                    <input type="text" name="img" class="form-control" placeholder="Enter Image url" required>
              </div>
              <div class="form-group">
                  <label for="">Enter Description</label>
                    <input type="text" name="des" class="form-control" placeholder="Enter Short Description" required>
              </div>
              <div class="form-group">
                  <label for="">Enter Long Description</label>
                    <input type="text" name="ldes" class="form-control" placeholder="Enter Long Description" required>
              </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="insertdata" class="btn btn-primary">Save DATA</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ######################################################################### -->

<!-- EDIT POP UP -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">EDIT DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="updatecode.php" method="POST">
      <div class="modal-body">
            <input type="hidden" name="update_id" id="update_id">
            <!-- <div class="form-group">
                  <label for="">Product ID</label>
                    <input type="number" name="pid" id="pid" class="form-control" placeholder="Enter Product ID" required>
              </div> -->

              <div class="form-group">
                  <label for="">Product Name</label>
                    <input type="text" name="pname" id="pname" class="form-control" placeholder="Enter Product Name" required>
              </div>
              <div class="form-group">
                  <label for="">Product Price</label>
                    <input type="number" name="price" id="price" class="form-control" placeholder="Enter Product Price" required>
              </div>
              <div class="form-group">
                  <label for="">Product Image URL</label>
                    <input type="text" name="img" id="img" class="form-control" placeholder="Enter Image url" required>
              </div>
              <div class="form-group">
                  <label for="">Product Description</label>
                    <input type="text" name="des" id="des" class="form-control" placeholder="Enter Description" required>
              </div>
              <div class="form-group">
                  <label for="">Product Long Description</label>
                    <input type="text" name="ldes" id="ldes" class="form-control" placeholder="Enter Long Description" required>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updatedata" class="btn btn-primary">UPDATE DATA</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- ################################################################################## -->
<!-- ######################################################################### -->

<!-- DELETE -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">DELETE DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="deletecode.php" method="POST">
      <div class="modal-body">
            <input type="hidden" name="delete_id" id="delete_id">
            <h4>Do you want to delte this data</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="submit" name="deletedata" class="btn btn-danger">DELETE</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- ################################################################################## -->
    <div class="container my-3 p-1">
            <div class="card">
                <h2 class="text-center my-2">ADD NEW PRODUCTS</h2><hr>
                <div class="card">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addmodal">ADD PRODUCT</button>
                    </div>
                </div>
                <div class="container my-5">
                    <div class="row justify-content-center">
                      <div class="col">
                        <table class="table table-bordered table-striped table-hover my-5 p-2">
                          <thead>
                          <tr>
                            <th scope="col">PRODUCT ID</th>
                            <th scope="col">PRODUCT NAME</th>
                            <th scope="col">PRODUCT PRICE</th>
                            <th scope="col">PRODUCT IMAGE URL</th>
                            <th scope="col">PRODUCT DESCRIPTION</th>
                            <th scope="col">PRODUCT LONG DESCRIPTION</th>
                            <th scope="col">EDIT</th>
                            <th scope="col">DELETE</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,'internet_solution');

                            $query = "SELECT * FROM cart_item";
                            $query_run = mysqli_query($connection,$query);
                            while($row=$query_run->fetch_assoc()){
                          ?>
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['name'];?></td>
                              <td><?php echo $row['price'];?></td>
                              <td><?php echo $row['image'];?></td>
                              <td><?php echo $row['description'];?></td>
                              <td><?php echo $row['long_description'];?></td>
                              <td>
                              <button type="button" class="btn btn-success editbtn btn-block">EDIT</button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-danger btn-block deletebtn">DELETE</button>
                              </td>
                              </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                      </div>
                            
                    </div>
                </div>
            </div>
    </div>
    
    <!--FOR EDIT-->
    <script>
    $(document).ready(function(){
        $('.deletebtn').on('click', function(){
            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);


        });

    });
    
    
  </script>

    <!-- FOR UPDATING -->

    <script>
    $(document).ready(function(){
        $('.editbtn').on('click', function(){
            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#pname').val(data[1]);
            $('#price').val(data[2]);
            $('#img').val(data[3]);
            $('#des').val(data[4]);
            $('#ldes').val(data[5]);

        });

    });
    
    
    </script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('table').DataTable();
        });
    </script>
</body>
</html>