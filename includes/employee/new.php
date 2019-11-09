          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form class="form-sample">
                  <center>
                    <img src="includes/blank1.png" alt="blank profile image" style="height: 35vh;width: 17vw;" required/>
                  </center>
                  <br>
                   <div class="row">
                    <div class="col-md-12">
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input form-control" id="customFile" name="filename">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </form>
                <br>
                <form class="form-sample" action="#" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="fname" class="form-control"  placeholder="Enter First Name" required/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="lname" class="form-control"  placeholder="Enter Last Name" required/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Father's Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="father" class="form-control" placeholder="Enter Father's Name" required/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Mother's Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="mother" class="form-control" placeholder="Enter Mother's Name" required/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Mobile No.</label>
                        <div class="col-sm-9">
                          <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile No."  required/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                          <input  type="date" name="dob" class="form-control" required/>
                        </div>
                      </div>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email Id</label>
                        <div class="col-sm-9">
                          <input type="Email" name="email" class="form-control"  placeholder="Enter Email Id" required/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Aadhar No.</label>
                        <div class="col-sm-9">
                          <input type="text" name="aadhar" class="form-control" placeholder="Enter Aadhar Card No."/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">PanCard No.</label>
                        <div class="col-sm-9">
                          <input type="text" name="pan" class="form-control"  placeholder="Enter PanCard No." required/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Upload Pan</label>
                        <div class="col-sm-9">
                        <input type="file" class="custom-file-input form-control" id="customFile" name="panfilename" required/>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-3">
                          <div class="form-check form-check-info">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="Male" required checked> Male </label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check form-check-info">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="Female" > Female</label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check form-check-info">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="Others"> Others </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="card-description" align="center"> Address </p>
                  <div class="row">
                  <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Country</label>
                        <div class="col-sm-9">
                         <input type="text" name="country" class="form-control" placeholder="Enter Country"  required/> 
                        </div>
                      </div>
                    </div>
                  <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">State</label>
                        <div class="col-sm-9">
                          <input type="text" name="state" class="form-control" placeholder="Enter State"  required/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                          <input type="text" name="city" class="form-control" placeholder="Enter City" required/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Postcode</label>
                        <div class="col-sm-9">
                          <input type="text" name="zip" class="form-control" placeholder="Enter Postal Code"  required/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address 1</label>
                        <div class="col-sm-9">
                          <input type="text" name="add1" class="form-control" placeholder="Enter Address" required/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address 2</label>
                        <div class="col-sm-9">
                          <input type="text" name="add2" class="form-control" placeholder="Enter Address" required/>
                        </div>
                      </div>
                    </div>
                  </div>
                   <p class="card-description" align="center"> Job Status </p>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Designation</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="desg" placeholder="Enter Designation" required/>
                          </div>
                        </div>
                      </div>
                  </div>
                    <center>
                      <input type="submit" name="submit" class="btn btn-gradient-success btn-lg mr-2">
                      <button type="reset" class="btn btn-gradient-dark btn-lg mr-2" >Reset</button>
                    </center>
                </form>
              </div>
            </div>
          </div>