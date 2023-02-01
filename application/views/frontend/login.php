<div class="main-content">
        <section class="section">
        <div class="row">
          <div class="mx-auto col-10 col-sm-8 col-md-6  col-lg-6  col-xl-4">
          

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
              <?php if(!empty($this->session->flashdata('pesan'))) { ; ?>
                        <div class="alert alert-success alert-dismissible show fade">
                          <div class="alert-body">
                              <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                              </button>
                              <?php echo $this -> session -> flashdata('pesan'); ?>
                          </div>
                        </div>
              <?php } ?>
                            
                <form method="POST" action="<?php echo site_url('member/act_login'); ?>">
                    
                    <div class="form-group">
                        <label for="email"> Username </label>
                        <input id="email" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                        <div class="invalid-feedback">
                        Please fill in your email
                        </div>
                    </div>

                  <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                            <div class="float-right">
                                <a href="auth-forgot-password.html" class="text-small">
                                Forgot Password?
                                </a>
                            </div>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                        <div class="invalid-feedback">
                        please fill in your password
                        </div>
                  </div>
                    
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div> 


                <div class="float-right">
                    <a href="<?php echo site_url('adminpanel') ?>" class="text-high" >
                        Login Sebagai Admin
                    </a>
                </div>
                  

                </form>
              </div>
            </div>

            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
        </section>
</div>