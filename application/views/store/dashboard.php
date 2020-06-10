    <section class="features-boxed" style="color: #464a6c;background-color: white;">
            <div class="container-fluid">
                <div class="card border rounded shadow-lg" style="transform: translate(0px,14px);background-color: #fffefe;">
                    <div class="card-body">
                        <header class="bg-light border rounded-0 shadow-sm" style="margin-bottom: 1rem;padding: 10px;background-color: #ffffff;">
                            <h2><i class="fa fa-dashboard"></i> My Dashboard</h2>
                        </header>
                        <section>
                            <div class="row is-flex" style="background-color: #ffffff;">
                               <p> Welcome, <?php echo  ucfirst($user_info['fname'].' '.$user_info['lname']); ?></p>
                            </div>
                        </section>
                        <div class="row">
                           
                           <div class="col-lg-4 mt-2">
                                <div class="card" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title">My Account <i class="fa fa-dashboard"></i></h5>
                            <a href="<?php echo base_url(); ?>profile" class="btn btn-primary">View Profile</a>
                          </div>
                        </div>
                           </div>


                        <div class="col-lg-4">
                             <div class="card" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title">My Services <i class="fa fa-cog"></i></h5>
                            <a href="<?php echo base_url(); ?>request" class="card-link">Request Services</a>
                          </div>
                        </div>
                        </div>
                          <div class="col-lg-4">
                             <div class="card" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title">Our Support <i class="fa fa-comment"></i></h5>
                            <a href="<?php echo base_url(); ?>contact" class="card-link">Contact Us</a>
                          </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start: Footer -->
        <div class="border-success footer-clean py-4 pl-4" style="margin-top: 10px;">
            <div class="col">
                <div class="form-group shadow-lg">
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <div class="input-group-append"></div>
                    </div>
                </div>
            </div>