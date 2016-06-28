@extends('master')
@section('content')


    <body>
       <div class="jumbotron">
       		<form class="form-horizontal" action="manufact_action.php" method="post" enctype="multipart/form-data"> 
                
                <ul class="nav nav-pills">
                  <li class="active"><a data-toggle="pill" href="#productsByproducts">Products Byproducts</a></li>
                  <li><a data-toggle="pill" href="#rawMeterials">Raw Meterials</a></li>
                  <li><a data-toggle="pill" href="#chemicals">Chemicals</a></li>
                  <li><a data-toggle="pill" href="#security">Security</a></li>
                </ul>
                
                <div class="tab-content">
                 <!-- first tab start -->
                 <!-- Products and Byproducts -->
                  <div id="productsByproducts" class="tab-pane fade in active">
                    <h2 style="color:green;">List of Products and Byproduct </h2>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Products Byproducts Name</th>
                            <th>Quantity</th>
                            <th>Product Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>3/4 metals</td>
                            <td>5 kiubs</td>
                            <td>.....</td>
                          </tr>
                          <tr>
                            <td>Dust</td>
                            <td>...</td>
                            <td>.....</td>
                          </tr>
                          <tr>
                            <td>....</td>
                            <td>....</td>
                            <td>.....</td>
                          </tr>
                        </tbody>
                      </table>
                          
                       <div>
                        <center>
                            <input type="button" value="New"  class="btn btn-success" />
                            <input type="button" value="Edit" class="btn btn-warning"/>
                        </center>
                      </div>
                    <br/>
                
                    <fieldset>
                        <legend style="color:green;text-align:left;">Details of Products and Byproducts</legend>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="prdByprod">Products Byproducts Name :</label>
                              <div class="col-sm-9">          
                                <input type="Text" class="form-control" id="prdByprod" placeholder="Enter Products Byproducts Name" name="prodname">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="qty">Quantity :</label>
                              <div class="col-sm-9">          
                                <input type="Text" class="form-control" id="qty" placeholder="Enter Products Byproducts Quantity" name="prodqty">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="prdStatus">Product Status :</label>
                              <div class="col-sm-9">          
                                <input type="Text" class="form-control" id="prdStatus" placeholder="Enter Product Status" name="prodstatus">
                              </div>
                            </div>
                            <br/>
                            <div>
                                <center>
                                    <input type="submit" value="Save"  class="btn btn-success" />
                                    <input type="button" value="Cancel" class="btn btn-danger"/>
                               </center>
                            </div>
                        </form>
                    </fieldset>
                    <br/><br/>
                    
                    
                  </div>
                  <!-- first tab end -->
                  
                  <!--  second tab start -->
                  <div id="rawMeterials" class="tab-pane fade">
                    <!-- Raw Meterials -->
                      <h2 style="color:green;">List of Raw Meterials </h2>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Raw Meterials Name</th>
                            <th>Quantity</th>
                         </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>3/4 metals</td>
                            <td>5 kiubs</td>
                         </tr>
                          <tr>
                            <td>Dust</td>
                            <td>...</td>
                          </tr>
                          <tr>
                            <td>....</td>
                            <td>....</td>
                          </tr>
                        </tbody>
                      </table>
                    
                    <div>
                        <center>
                            <input type="button" value="New"  class="btn btn-success" />
                            <input type="button" value="View" class="btn btn-warning"/>
                        </center>
                    </div>
                    <br/>
                    
                    <fieldset>
                        <legend style="color:green;text-align:left;">Details of Raw Meterials</legend>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="rawName">Raw Meterials Name :</label>
                              <div class="col-sm-10">          
                                <input type="Text" class="form-control" id="rawName" placeholder="Enter Raw Meterials Name ">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="qty">Quantity :</label>
                              <div class="col-sm-10">          
                                <input type="Text" class="form-control" id="qty" placeholder="Enter Raw Meterials Quantity">
                              </div>
                            </div>
                            <br/>
                            <div>
                                 <center>
                                    <input type="submit" value="Save"  class="btn btn-success" />
                                    <input type="button" value="Cancel" class="btn btn-danger"/>
                                </center>
                       		</div>
                        </form>
                    </fieldset>
                    <br/><br/>
                  </div>
                  <!-- Second tab end -->
                  
               	  <!-- Third tab start -->
                  
                  <div id="chemicals" class="tab-pane fade">
                    <!--Chemicals -->
                      <h2 style="color:green;">List of Chemicals</h2>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Chemical Name</th>
                            <th>Trade Name</th>
                            <th>Quantity</th>
                            <th>Purpose</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>aaaa</td>
                            <td>aaaaa</td>
                            <td>10L</td>
                            <td>aaaaa</td>
                          </tr>
                          <tr>
                            <td>sssLs</td>
                            <td>ssss</td>
                            <td>225L</td>
                            <td>ssss</td>
                          </tr>
                          <tr>
                            <td>....</td>
                            <td>....</td>
                            <td>.....</td>
                            <td>.....</td>
                          </tr>
                        </tbody>
                      </table>
                      <div>
                            <center>
                                <input type="button" value="New"  class="btn btn-success" />
                                <input type="button" value="View" class="btn btn-warning"/>
                            </center>
                        </div>
                    <br/>
                    
                    <fieldset>
                        <legend style="color:green;text-align:left;">Details of Chemicals</legend>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="chemicalName">Chemical Name :</label>
                              <div class="col-sm-10">          
                                <input type="Text" class="form-control" id="chemicalName" placeholder="Enter Chemical Name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="brandName">Brand Name :</label>
                              <div class="col-sm-10">          
                                <input type="Text" class="form-control" id="brandName" placeholder="Enter Brand Name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="qty">Quantity :</label>
                              <div class="col-sm-10">          
                                <input type="Text" class="form-control" id="qty" placeholder="Enter Products Byproducts Quantity">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="purpose">Purpose :</label>
                              <div class="col-sm-10">          
                                <input type="Text" class="form-control" id="purpose" placeholder="Enter Purpose">
                              </div>
                            </div>
                            <br/>
                            <div>
                                 <center>
                                    <input type="submit" value="Save"  class="btn btn-success" />
                                    <input type="button" value="Cancel" class="btn btn-danger"/>
                                </center>
                            </div>
                        </form>
                    </fieldset>
                    <br/><br/>
                  </div>
                  <!-- Third tab end -->
                
                  <!-- forth tab start -->
                  <div id="security" class="tab-pane fade">
                  	<!-- Security -->
                    <fieldset>
                        <legend style="color:green;text-align:left;">Details of Security</legend>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                              <label class="control-label col-sm-5" for="Precautionarymeasures">Precautionary measures adopted in the transport and handling of any hazardous/toxic/flammable/explosive material :</label>
                              <div class="col-sm-7">
                                <textarea class="form-control" rows="5" id="Precautionarymeasures"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-5" for="Storagefacilities">Storage facilities for hazardous/toxic/flammable/explosive meterials :</label>
                              <div class="col-sm-7">
                                <textarea class="form-control" rows="5" id="Storagefacilities"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-5" for="firefighting" >Do you have adequate fire fighting equipment :</label>
                              <div class="col-sm-7">
                                <label class="radio-inline"><input type="radio" name="firefighting">Yes</label>
                                <label class="radio-inline"><input type="radio" name="firefighting">No</label>
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <label class="control-label col-sm-5" for="fireEquipments">If so, details of such equipment :</label>
                              <div class="col-sm-7">
                                <textarea class="form-control" rows="5" id="fireEquipments"></textarea>
                              </div>
                            </div>
                            </br/>
                            <div>
                                 <center>
                                    <input type="submit" value="Save"  class="btn btn-success" />
                                    <input type="button" value="Cancel" class="btn btn-danger"/>
                                </center>
                            </div>
                        </form>
                    </fieldset>
                    <br/><br/>
                  </div>
              
                <!-- forth tab end -->
                  
 			 </div>
        <br/>
      </div>
    </body>
@endsection
