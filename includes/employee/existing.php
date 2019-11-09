<div class="col-12">
<div class="card">
<div class="card-body">
  <form action="emp_reg.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">User ID</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="user" placeholder="Enter ID" required/>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Aadhar No.</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="adhar" placeholder="Enter twelve Digit Aadhar No." required/>
          </div>
        </div>
      </div>
    </div>
    <center>
      <input type="submit" name="fetch" value="Get Details" class="btn btn-gradient-success btn-lg mr-2">
      <button type="reset" class="btn btn-gradient-dark btn-lg mr-2" >Reset</button>
      <input type="submit" name="delete" value="Delete" class="btn btn-gradient-success btn-lg mr-2">
    </center>
  </form>
</div>
</div>
</div>  
