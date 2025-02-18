          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form class="form-sample">
                  <center>
                    <img src="includes/blank1.png" alt="blank profile image" style="height: 35vh;width: 17vw;">
                  </center>
                  <br>
                   <div class="row">
                    <div class="col-md-12 ">
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input form-control" id="customFile" name="filename" required>
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
                          <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control"  placeholder="Enter Last Name" name="lname" required/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Mobile No.</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No."  required/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email Id</label>
                        <div class="col-sm-9">
                          <input type="Email" class="form-control" name="email" placeholder="Enter Email Id" required/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                          <input  type="date" class="form-control" name="dob" required/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Aadhar No.</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="aadhar" placeholder="Enter twelve Digit Aadhar No."/>
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
                              <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="Female" required> Female</label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check form-check-info">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="Others" required> Others </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">PanCard No.</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="pan" placeholder="Enter PanCard No."/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Upload Pan</label>
                        <div class="col-sm-9">
                        <input type="file" class="custom-file-input form-control" id="customFile" name="filename">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">PassportNo.</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="passport" placeholder="Enter PassPort No."/>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Upload Passport</label>
                        <div class="col-sm-9">
                        <input type="file" class="custom-file-input form-control" id="customFile" name="filename"/>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Exp.date</label>
                        <div class="col-sm-9">
                          <input type="date" name="exp" placeholder="DD/MM/YYYY" class="form-control" required/>
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
                         <input type="text" class="form-control" name="country" placeholder="Enter Country"/> 
                        </div>
                      </div>
                    </div>
                  <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">State</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="state" placeholder="Enter State"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="city" placeholder="Enter City"/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Postcode</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="zip" placeholder="Enter Postal Code"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address 1</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="add1" placeholder="Enter Address"/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address 2</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="add2" placeholder="Enter Address"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <input type="submit" id="sub" name="submit" class="btn btn-gradient-success btn-lg mr-2">
                    <button type="reset" class="btn btn-gradient-dark btn-lg mr-2" >Reset</button>
                  </center>
                </form>
              </div>
            </div>
          </div>