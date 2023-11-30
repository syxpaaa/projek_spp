@extends('layotsiswa')
@section('conten')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Dashboard <small>Summary of your App</small>
                  </h1>              
    </div>
      <div id="page-inner">
          <div class="row">
              <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="panel panel-primary text-center no-boder blue" style="background-color:#8EACCD ">
                      <div class="panel-left pull-left " style="background-color:#8EACCD ">
                          <i class="fa fa-eye fa-5x"></i>
                      </div>
                      <div class="panel-right" style="background-color:#8EACCD ">
                          <h3>10,253</h3>
                         <strong> Daily Visits</strong>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="panel panel-primary text-center no-boder blue" style="background-color:#8EACCD ">
                        <div class="panel-left pull-left blue" style="background-color:#8EACCD ">
                          <i class="fa fa-shopping-cart fa-5x"></i>
                          </div>
                      <div class="panel-right" style="background-color:#8EACCD ">
                      <h3>33,180 </h3>
                         <strong> Sales</strong>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="panel panel-primary text-center no-boder blue" style="background-color:#8EACCD">
                      <div class="panel-left pull-left blue" style="background-color:#8EACCD ">
                          <i class="fa fa fa-comments fa-5x"></i>
                      </div>
                      <div class="panel-right" style="background-color:#8EACCD ">
                       <h3>16,022 </h3>
                         <strong> Comments </strong>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="panel panel-primary text-center no-boder blue" style="background-color:#8EACCD ">
                      <div class="panel-left pull-left blue" style="background-color:#8EACCD ">
                          <i class="fa fa-users fa-5x"></i>
                      </div>
                      <div class="panel-right" style="background-color:#8EACCD ">
                      <h3>36,752 </h3>
                       <strong>No. of Visits</strong>
                      </div>
                  </div>
              </div>
          </div>
  <div class="row">
      <div class="col-xs-6 col-md-3">
  </div><!--/.row-->
          <div class="row">
          </div>
          <div class="row">
          <div class="col-md-12">
              </div>		
          </div> 	
          <!-- /. ROW  -->
          <div class="row">
              <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="panel panel-default">
                      <div class="panel-heading" style="background-color:#8EACCD ">
                          Tasks Panel
                      </div>
                      <div class="panel-body">
                          <div class="list-group">
                              <a href="#" class="list-group-item">
                                  <span class="badge">7 minutes ago</span>
                                  <i class="fa fa-fw fa-comment"></i> Commented on a post
                              </a>
                              <a href="#" class="list-group-item">
                                  <span class="badge">16 minutes ago</span>
                                  <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                              </a>
                              <a href="#" class="list-group-item">
                                  <span class="badge">36 minutes ago</span>
                                  <i class="fa fa-fw fa-globe"></i> Invoice 653 has paid
                              </a>
                              <a href="#" class="list-group-item">
                                  <span class="badge">1 hour ago</span>
                                  <i class="fa fa-fw fa-user"></i> A new user has been added
                              </a>
                              <a href="#" class="list-group-item">
                                  <span class="badge">1.23 hour ago</span>
                                  <i class="fa fa-fw fa-user"></i> A new user has added
                              </a>
                              <a href="#" class="list-group-item">
                                  <span class="badge">yesterday</span>
                                  <i class="fa fa-fw fa-globe"></i> Saved the world
                              </a>
                          </div>
                          <div class="text-right">
                              <a href="#">More Tasks <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                  </div>

              </div>
              <div class="col-md-8 col-sm-12 col-xs-12">
                  <div class="panel panel-default">
                      <div class="panel-heading" style="background-color:#8EACCD ">
                          Responsive Table Example
                      </div> 
                      <div class="panel-body">
                          <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>First Name</th>
                                          <th>Last Name</th>
                                          <th>User Name</th>
                                          <th>Email ID.</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>John</td>
                                          <td>Doe</td>
                                          <td>John15482</td>
                                          <td>name@site.com</td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Kimsila</td>
                                          <td>Marriye</td>
                                          <td>Kim1425</td>
                                          <td>name@site.com</td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>Rossye</td>
                                          <td>Nermal</td>
                                          <td>Rossy1245</td>
                                          <td>name@site.com</td>
                                      </tr>
                                      <tr>
                                          <td>4</td>
                                          <td>Richard</td>
                                          <td>Orieal</td>
                                          <td>Rich5685</td>
                                          <td>name@site.com</td>
                                      </tr>
                                      <tr>
                                          <td>5</td>
                                          <td>Jacob</td>
                                          <td>Hielsar</td>
                                          <td>Jac4587</td>
                                          <td>name@site.com</td>
                                      </tr>
                                      <tr>
                                          <td>6</td>
                                          <td>Wrapel</td>
                                          <td>Dere</td>
                                          <td>Wrap4585</td>
                                          <td>name@site.com</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
          <!-- /. ROW  -->
          <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p>
          </footer>
      </div>
  </div>
</div>
@endsection