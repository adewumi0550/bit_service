    <section class="features-boxed" style="color: #464a6c;background-color: white;">
            <div class="container-fluid">
                <div class="card border rounded shadow-lg" style="transform: translate(0px,14px);background-color: #fffefe;">
                    <div class="card-body">
                        <header class="bg-light border rounded-0 shadow-sm" style="margin-bottom: 1rem;padding: 10px;background-color: #ffffff;">
                            <h2>Contact Us</h2>
                        </header>
                        <section>
                            <div class="row is-flex" style="background-color: #ffffff;">
                               <p> </p>
                            </div>
                        </section>
                        <div class="row " style="margin-bottom: 30px;">
                            <div class="col-lg-4">
                                <i class="fa fa-envelope"> Email Address:</i>
                                info@bitomserivce.com
                            </div>

                             <div class="col-lg-4">
                                <i class="fa fa-envelope"> Mobile Number:</i>
                                info@bitomserivce.com
                            </div>


                             <div class="col-lg-4">
                                <i class="fa fa-envelope"> Location Address:</i>
                                HQ
                            </div>
                        </div>
                        <div class="w-100">
                            <?php if (isset($_SESSION['success_contact_save'])) {?>
              <div class="alert alert-success"><?php echo $_SESSION['success_contact_save']; ?></div>
              <?php
              } ?>
                    <?php echo form_open('contact', 'class="form"'); ?>
                               <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Full Name* </label>
                                <span style="font-size: 9px;color: red;"><?php echo form_error('name'); ?></span>
                                    <input type="text" required="required" name="name"  class="form-control">
                                </div>
                               </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Email Address* </label>
                                     <span style="font-size: 9px;color: red;"><?php echo form_error('email'); ?></span>
                                    <input type="email" name="email"  class="form-control">
                                </div>
                               </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Phone Number </label>
                                                      <span style="font-size: 9px;color: red;"><?php echo form_error('phone'); ?></span>

                                    <input type="text" name="phone" required="required" class="form-control">
                                </div>
                               </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Subject</label>
                                     <span style="font-size: 9px;color: red;"><?php echo form_error('subject'); ?></span>
                                    <input type="text" name="subject" required="required" class="form-control">
                                </div>
                               </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Message </label>
                                    <textarea class="form-control" name="message" rows="7"></textarea>
                                </div>
                               </div>


                              <div class="form-group">
                         <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-comment"></i> Send Message</button>
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