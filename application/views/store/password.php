
    <section class="features-boxed" style="color: #464a6c;background-color: white;">
            <div class="container-fluid">
                <div class="card border rounded shadow-lg" style="transform: translate(0px,14px);background-color: #fffefe;">
                    <div class="card-body">
                        <header class="bg-light border rounded-0 shadow-sm" style="margin-bottom: 1rem;padding: 10px;background-color: #ffffff;">
                            <h2>Change Password</h2>
                        </header>
                        <section>
                            <div class="row is-flex" style="background-color: #ffffff;">
                               <p> Welcome Adewumi Saheed</p>
                            </div>
                        </section>
                        <div class="w-100">
                                              <?php if (isset($_SESSION['success_post'])) {?>


              <div class="alert alert-success"><?php echo $_SESSION['success_post']; ?></div>
              <?php
              } ?>

                  <?php echo  form_open_multipart('password'); ?>
                               <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>New Password </label>
                                      <span style="font-size: 9px;" class="text-danger"><?php echo form_error('newpassword'); ?></span> 
                                    <input type="password" name="newpassword" class="form-control">
                                </div>
                               </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Confirm New Password </label>
                                     <span style="font-size: 9px;" class="text-danger"><?php echo form_error('conpassword'); ?></span> 
                                    <input type="password" name="conpassword" class="form-control">
                                </div>
                               </div>

                               	<div class="form-group">
                         <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> Change Password</button>
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