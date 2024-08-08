
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View All Booking</h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Event</a></li>
                <li class="breadcrumb-item active">All Event Booking</li>
             </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-sm-12">
            <div class="card card-default">
              <div class="card-header">
               <h3 class="card-title">View All Event Booking</h3>
              </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>id</th>
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Addon</th>
                      <th>Ticket</th>
                      <th>Event Name</th>
                      <th>Booking Price</th>
                      <th>Payment ID</th>
                      <th>Booking Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; foreach ($all_booking as $key => $booking):?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $booking->booking_name ?></td>
                      <td>
                        <span class="badge badge-warning"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $booking->booking_email_id ?></span>
                        <br/>
                        <span class="badge badge-success"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $booking->booking_phone_no ?></span>
                      </td>
                      <td>
                        <ul class="list-unstyled">
                        <?php 
                        $a = 1;
                        foreach (json_decode($booking->booking_addon) as $key => $value) 
                        {?>
                          <li><b><?php echo $a; ?>.</b> <?php echo json_decode($booking->addon_name)[$value]?> &nbsp;</li>
                          <hr/>
                        <?php $a++; }?>
                        </ul>
                      </td>
                      <td>
                        <?php if($booking->booking_ticket == 1): ?>
                          Indian Student
                        <?php else: ?>
                          Foreigner Student
                        <?php endif; ?>
                      </td>
                      <td>
                        <?php echo $booking->title; ?> (<?php echo $booking->category; ?>)
                      </td>
                      <td>
                         &#x20B9;<?php echo $booking->booking_price; ?>
                      </td>
                      <td><?php echo $booking->booking_pay_id; ?></td>
                      <td>
                        <?php echo date('d-m-Y', strtotime($booking->booking_date)) ; ?>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
