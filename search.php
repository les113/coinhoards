<!DOCTYPE html>
<html>
	<head>  
		<title></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />	
		<?php include('inc/headcommon.php') ?>		
    </head>
  <body>

    <!-- menu -->   
    <?php include('inc/menu.php') ?>

    <!-- header -->
    <?php include('inc/header-subpage.php') ?>


    <!-- content -->
    <div class="marginTop clearfix"></div>

    <div id="content" class="container"> <!-- page content -->
        <div class="row">	
            <div class="col-md-12">
                
                    <div id="tabs">
                      <ul>
                        <li><a href="#tabs-1">Search</a></li>
                        <li><a href="#tabs-2">Map Results</a></li>
                        <li><a href="#tabs-3">List Results</a></li>
                      </ul>

                    <form class="form-horizontal">
                        
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <div id="slider" class="marginTop"></div>           
                                    <p class="">
                                      <label for="year">Start Date:</label>
                                      <input type="text" id="year" readonly style="border:0; color:#D69E40; font-weight:bold;">
                                    </p>
                                </div>
                                <div class="form-group">         
                                    <label for="country" class="col-sm-2">Country:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control">
                                          <option>Italy</option>
                                          <option>UK</option>
                                        </select>
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label for="something" class="col-sm-2 control-label">Something</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="something" placeholder="something">
                                    </div>
                                  </div>

                            </div>

                        
                            <div class="col-md-6">

                                <div class="form-group">
                                    <div id="slider" class="marginTop"></div>           
                                    <p class="">
                                      <label for="year">End Date:</label>
                                      <input type="text" id="year" readonly style="border:0; color:#D69E40; font-weight:bold;">
                                    </p>
                                </div>
                                <div class="form-group">         
                                    <label for="country" class="col-sm-2">Country:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control">
                                          <option>Italy</option>
                                          <option>UK</option>
                                        </select>
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label for="something" class="col-sm-2 control-label">Something</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="something" placeholder="something">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-offset-8 col-sm-10">
                                      <button type="submit" class="btn btn-default">Search</button>
                                      <button type="reset" class="btn btn-default">Clear all</button>
                                    </div>
                                  </div>

                            </div>
                        </div>       
                    </form>
                        
                      <div id="tabs-1">
                      </div>
                      <div id="tabs-2">
                        <div class="row"> 
                            <div class="col-md-12">
                                <div class="map"><img src="img/map.png" alt=""/></div>
                                <div id="slider" class="marginTop"></div>           
                            </div>
                        </div>
                      </div>
                      <div id="tabs-3">
                        <div class="row"> 
                            <div class="col-md-12">
                                <div class="hoardlistview">
                                    <h2>Name of Hoard</h2>
                                    <div class="datalabel">Date: </div><div class="data">14/05/2006</div>
                                    <div class="datalabel">Size: </div><div class="data">20,000</div>
                                    <div class="datalabel">Country: </div><div class="data">UK</div>
                                    <div class="datalabel">Summary: </div><div class="data">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet lacus quis enim ultricies congue ac ac massa. Duis tincidunt finibus turpis, varius sagittis mi fringilla quis.</div>
                                    <hr/>
                                </div>
                                <div class="hoardlistview">
                                    <h2>Name of Hoard</h2>
                                    <div class="datalabel">Date: </div><div class="data">14/05/2006</div>
                                    <div class="datalabel">Size: </div><div class="data">20,000</div>
                                    <div class="datalabel">Country: </div><div class="data">UK</div>
                                    <div class="datalabel">Summary: </div><div class="data">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet lacus quis enim ultricies congue ac ac massa. Duis tincidunt finibus turpis, varius sagittis mi fringilla quis.</div>
                                    <hr/>
                                </div>
                                <div class="hoardlistview">
                                    <h2>Name of Hoard</h2>
                                    <div class="datalabel">Date: </div><div class="data">14/05/2006</div>
                                    <div class="datalabel">Size: </div><div class="data">20,000</div>
                                    <div class="datalabel">Country: </div><div class="data">UK</div>
                                    <div class="datalabel">Summary: </div><div class="data">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet lacus quis enim ultricies congue ac ac massa. Duis tincidunt finibus turpis, varius sagittis mi fringilla quis.</div>
                              </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>	
        </div>           
    </div><!-- end page container -->   

    <!-- footer -->
    <div class="marginTop clearfix"></div>
    <?php include('inc/footer.php') ?>	
        
  </body>
</html>