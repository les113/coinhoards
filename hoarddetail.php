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

                            <div class="col-md-6 marginTop">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Hoard Summary tabs -->
                                        <div id="tabs" class="tabs">
                                          <ul>
                                            <li><a href="#tab-1">Name of Hoard</a></li>
                                          </ul>
                                          <div id="tab-1">
                                            <div class="hoardlistview-6col">
                                                <div class="datalabel">Date: </div><div class="data">14/05/2006</div>
                                                <div class="datalabel">Size: </div><div class="data">20,000</div>
                                                <div class="datalabel">Country: </div><div class="data">UK</div>
                                                <div class="datalabel">Summary: </div><div class="data">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet lacus quis enim ultricies congue ac ac massa. Duis tincidunt finibus turpis, varius sagittis mi fringilla quis.</div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 marginTop">
                                        <!-- Location tabs -->
                                        <div id="tabs" class="tabs">
                                          <ul>
                                            <li><a href="#tab-1">Location</a></li>
                                          </ul>
                                          <div id="tab-1">
                                            <div class="hoardlistview-6col">
                                                <div class="datalabel">City: </div><div class="data">Oxford</div>
                                                <div class="datalabel">Region: </div><div class="data">Oxfordshire</div>
                                                <div class="datalabel">Nation: </div><div class="data">UK</div>
                                                <div class="datalabel">Lat/Long/Alt: </div><div class="data">51.75 -1.26 72 <a href="">view</a></div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 marginTop">
                                
                            <!-- coin summary tabs -->
                                <div id="tabs2" class="tabs">
                                  <ul>
                                    <li><a href="#tabs2-1">Summary</a></li>
                                    <li><a href="#tabs2-2">Coins</a></li>
                                    <li><a href="#tabs2-3">Stats</a></li>
                                  </ul>

                                  <div id="tabs2-1">  
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>Period</th>
                                                <th>Authority</th>
                                                <th>Denomination</th>
                                                <th>Nb</th>
                                                <th>Link</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Imperial</td>
                                                <td>Antonius Plus</td>
                                                <td>Sesterius</td>
                                                <td>2</td>
                                                <td><a href="coindetail.php">view</a></td>
                                            </tr>
                                            <tr>
                                                <td>Imperial</td>
                                                <td>Elagabalus</td>
                                                <td>Sesterius</td>
                                                <td>1</td>
                                                <td><a href="coindetail.php">view</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                  </div>   
                                  <div id="tabs2-2"> 
                                      <p>Coins</p>
                                  </div>   
                                  <div id="tabs2-3"> 
                                      <p>Stats</p>
                                  </div>   
                                </div>
                            </div>
                        </div>    
                                
                        <!-- hoard detail tabs -->
                        <div class="row"> 
                            <div class="col-md-12 marginTop">
                                <div id="tabs3" class="tabs">
                                  <ul>
                                    <li><a href="#tabs3-1">Details</a></li>
                                    <li><a href="#tabs3-2">Rating</a></li>
                                    <li><a href="#tabs3-3">Archaeology</a></li>
                                    <li><a href="#tabs3-4">Containers</a></li>
                                    <li><a href="#tabs3-5">Objects</a></li>
                                    <li><a href="#tabs3-6">Publications</a></li>
                                    <li><a href="#tabs3-7">Reports</a></li>
                                    <li><a href="#tabs3-8">Images</a></li>
                                  </ul>

                                  <div id="tabs3-1">  
                                        <div class="hoardlistview-12col">
                                            <div class="datalabel">Discovery Method: </div><div class="data">Agricultural or drainage work</div>
                                            <div class="datalabel">Discovery Depth: </div><div class="data">3m</div>
                                            <div class="datalabel">Land Use: </div><div class="data">Other: Built over</div>
                                            <div class="datalabel">Owner(s): </div><div class="data">Name</div>
                                            <div class="datalabel">Finder(s): </div><div class="data">Someone else</div>
                                        </div>
                                  </div>   
                                  <div id="tabs3-2"> 
                                      <p>Rating</p>
                                  </div>   
                                  <div id="tabs3-3"> 
                                      <p>Archaeology</p>
                                  </div>   
                                  <div id="tabs3-4"> 
                                      <p>Containers</p>
                                  </div>   
                                  <div id="tabs3-5"> 
                                      <p>Objects</p>
                                  </div>   
                                  <div id="tabs3-6"> 
                                      <p>Publications</p>
                                  </div>   
                                  <div id="tabs3-7"> 
                                      <p>Reports</p>
                                  </div>   
                                  <div id="tabs3-8"> 
                                      <p>Images</p>
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