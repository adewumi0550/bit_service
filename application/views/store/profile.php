    <section class="features-boxed" style="color: #464a6c;background-color: white;">
            <div class="container-fluid">
                <div class="card border rounded shadow-lg" style="transform: translate(0px,14px);background-color: #fffefe;">
                    <div class="card-body">
                        <header class="bg-light border rounded-0 shadow-sm" style="margin-bottom: 1rem;padding: 10px;background-color: #ffffff;">
                            <h2>My Profile</h2>
                        </header>
                        <section>
                            <div class="row is-flex" style="background-color: #ffffff;">
                                <p> Welcome Back, <?php echo  ucfirst($user_info['fname'].' '.$user_info['lname']); ?></p>
                            </div>
                        </section>
                        <div class="w-100">
                            <form>
                               <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>First Name </label>
                                    <input type="text" name="fname" value="<?php echo $user_info['fname']; ?>" class="form-control">
                                </div>
                               </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Last Name </label>
                                    <input type="text" name="lname" value="<?php echo $user_info['lname']; ?>" class="form-control">
                                </div>
                               </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Email Address </label>
                                    <input type="text" name="email" value="<?php echo $user_info['email']; ?>" class="form-control">
                                </div>
                               </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Mobile Number </label>
                                    <input type="text" name="phone" value="<?php echo $user_info['phone']; ?>" class="form-control">
                                </div>
                               </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Resident Address  </label>
                                    <input type="text" name="fname" class="form-control">
                                </div>
                               </div>

                               <div class="form-group">
                         <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Profile</button>
                                </div>
                               </div>   
                            </form>
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