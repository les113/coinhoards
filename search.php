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
        <div class="row marginTop">	
            <div class="col-md-12">
                
                    <div id="tabs" class="tabs">
                      <ul>
                        <li><a href="#tabs-1">Search</a></li>
                        <li><a href="#tabs-2">Map Results</a></li>
                        <li><a href="#tabs-3">List Results</a></li>
                      </ul>

                    <form class="form-horizontal">

                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group marginTop">
                                      <label class="col-sm-3 col-sm-offset-1 control-label" for="date">Date:</label>
                                    <div class="col-sm-8 controls">
                                      <input type="text" id="range" readonly style="border:0;">
                                      <div id="slider-range"></div>
                                    </div>
                                </div>
                                
                                  <div class="form-group">
                                    <label class="col-sm-3 col-sm-offset-1 control-label" for="text">Country:</label>
                                    <div class="col-sm-8 controls">
                                        <select class="form-control">
                                          <option>Select</option>
                                          <option>Italy</option>
                                          <option>UK</option>
                                        </select>
                                    </div>
                                  </div>  
                                  <div class="form-group">
                                    <label for="text" class="col-sm-3 col-sm-offset-1 control-label">Text</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="text" placeholder="text">
                                    </div>
                                  </div>                            
                            </div>
                            
                            <div class="col-md-6" style="margin-top:22px;">
                                  <div class="form-group">
                                    <label class="col-sm-3 col-sm-offset-1 control-label" for="text">Something else:</label>
                                    <div class="col-sm-8 controls">
                                        <select class="form-control">
                                          <option>Select</option>
                                          <option>Something</option>
                                          <option>Else</option>
                                        </select>
                                    </div>
                                  </div> 
                                  <div class="form-group">
                                    <label class="col-sm-3 col-sm-offset-1 control-label" for="text">Something else:</label>
                                    <div class="col-sm-8 controls">
                                        <select class="form-control">
                                          <option>Select</option>
                                          <option>Something</option>
                                          <option>Else</option>
                                        </select>
                                    </div>
                                  </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="control-group">
                                    <div class="col-sm-8 col-sm-offset-1">
                                      <button type="button" class="btn add"><i class="fa fa-plus-circle icon-large fa-3x"></i></button>      
                                    </div>
                                    <div class="col-sm-3">
                                      <button type="submit" class="btn search">Search</button>
                                      <button type="reset" class="btn clear">Clear all</button>
                                    </div>
                                  </div>                               
                            </div>
                        </div> 
                    </form>
                        
                      <div id="tabs-1"><!-- search -->
                      </div>
                      <div id="tabs-2"><!-- search results map view -->
                        <div class="row"> 
                            <div class="col-md-12">
                                <div class="map"><img src="img/map.png" alt=""/></div>         
                            </div>
                        </div>
                      </div>
                      <div id="tabs-3"><!-- search results list view -->
                        <div class="row"> 
                            <div class="col-md-12">
                                <div><p><span>Results: 235 Records</span>
                                    <span class="resultssort">Sort by Date<button type="button" class="btn sort"><i class="fa fa-caret-down"></i></button></span>
                                    <span class="resultssort">Sort by Size<button type="button" class="btn sort"><i class="fa fa-caret-down"></i></button></span></p></div>
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