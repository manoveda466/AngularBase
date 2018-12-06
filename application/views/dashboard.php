<?php
  if($this->session->userdata('from_date'))
  {
    $from_date              = $this->session->userdata('from_date');
    $to_date                = $this->session->userdata('to_date'); 

    $fromDate               = $this->session->userdata('from_date');
    $toDate                 = $this->session->userdata('to_date');    
  }else
  {
    $from_date              = '';
    $to_date                = '';
    $fromDate               = date('Y-m-d', strtotime('today - 10 days'));
    $toDate                 = date('Y-m-d');
  } 
?>
<!-- Main content -->
<div class="main-content" ng-app="myapp" ng-controller="myCtrl">
  <!-- Top navbar -->
  <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
      <!-- Brand -->
      <!--<a class="h4 mb-0 text-uppercase d-none d-lg-inline-block"><?php echo $this->lang->line('label_dashboard');?></a>-->
      <form class="form-inline mr-3 d-none d-md-flex ml-lg-auto" action="<?php echo base_url('dashboard');?>" method="post" autocomplete="off">
        <div class="form-group mb-0">
          <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
            </div>
            <input class="single-daterange-from form-control halfwidth" type="text" name="from_date" value="<?php echo $from_date;?>">
          </div>&nbsp;
          <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-calendar-check"></i></span>
            </div>
            <input class="single-daterange-to form-control halfwidth" type="text" name="to_date" value="<?php echo $to_date;?>" cannot-input>
          </div>&nbsp;
          <button class="btn btn-info"><i class="fas fa-search"></i></button>&nbsp;
          <a href="<?php echo base_url();?>" class="btn btn-danger">X</i></a>
        </div>
      </form>
    </div>
  </nav>
  <!-- Header -->
  <div class="header pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
      <div class="header-body">
        <!-- Card stats -->
        <!--!st Row Waiting vendors and New deals and transactions-->
        <div class="row">
          <!--Waiting For Approval - Seller-->
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo $this->lang->line('label_count');?></h5>
                    <span class="h2 font-weight-bold mb-0"><?php echo $sellerwfa;?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                      <i class="fas fa-clock"></i>
                    </div>
                  </div>
                </div>
                <!--<p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>-->
              </div>
            </div>
          </div>
          <!--Waiting For Approval - Buyer-->
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo $this->lang->line('label_count');?></h5>
                    <span class="h2 font-weight-bold mb-0"><?php echo $buyerwfa;?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                      <i class="fas fa-clock"></i>
                    </div>
                  </div>
                </div>
                <!--<p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                  <span class="text-nowrap">Since last week</span>
                </p>-->
              </div>
            </div>
          </div>
          <!--New Deals-->
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo $this->lang->line('label_count');?></h5>
                    <span class="h2 font-weight-bold mb-0"><?php echo $newdeals;?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                      <i class="fas fa-cart-plus"></i>
                    </div>
                  </div>
                </div>
                <!--<p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>-->
              </div>
            </div>
          </div>
          <!--New Transaction-->
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo $this->lang->line('label_count');?></h5>
                    <span class="h2 font-weight-bold mb-0"><?php echo $newtransaction;?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                      <i class="fas fa-credit-card"></i>
                    </div>
                  </div>
                </div>
                <!--<p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                  <span class="text-nowrap">Since yesterday</span>
                </p>-->
              </div>
            </div>
          </div>
        </div><br>
        <!-- Card ends -->
      </div>
    </div>
  </div>
 