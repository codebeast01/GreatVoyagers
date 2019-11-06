<div class="col-12">
<div class="card">
<div class="card-body">
  <form class="form-sample">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Customer ID</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Enter Customer Id" required/>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Taxi Type</label>
          <div class="col-sm-9">
            <select class="form-control" required>
            <option>SUV</option>
              <option>XL</option>
              <option>Sedan</option>
              <option>Traveller</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Pickup Location</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Enter Place Name" required/>
            </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Destination</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Enter Destination"  required/>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Pickup Date</label>
          <div class="col-sm-9">
            <input type="Date" class="form-control"  required/>
          </div>
        </div>
        </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Drop Date</label>
          <div class="col-sm-9">
            <input type="Date" class="form-control"  required/>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">No. of PAX(s)</label>
          <div class="col-sm-9">
            <div class="row">
              <div class="col-sm-4"> 
                <div class="row">
                  <div class="col-sm-6"> 
                    <label class="col-form-label">Adults</label>  
                  </div>
                  <div class="col-sm-2"> 
                    <input type="number" class="form-control" required/>  
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-sm-6"> 
                    <label class="col-form-label">Children</label>  
                  </div>
                  <div class="col-sm-2"> 
                    <input type="number" class="form-control" required/>  
                  </div>
                </div>  
              </div>
              <div class="col-sm-3">
                <div class="row">
                  <div class="col-sm-6"> 
                    <label class="col-form-label">Infants</label>  
                  </div>
                  <div class="col-sm-2"> 
                    <input type="number" class="form-control" required/>  
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Remarks (if any)</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Description" class="form-control"/>
          </div>
        </div>
      </div>
    </div>

    <center>
      <button type="submit" class="btn btn-gradient-success btn-lg mr-2">Submit</button>
      <button type="reset" class="btn btn-gradient-dark btn-lg mr-2" >Reset</button>
    </center>

  </form>
</div>
</div>
</div>  
