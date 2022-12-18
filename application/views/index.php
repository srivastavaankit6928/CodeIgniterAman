<?php include "header.php"; ?>
<section class="content ">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Login Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <?= form_open('Login-Action'); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    
                    <?php
                    $email = array(
                        'type'  => 'email',
                        'name'  => 'email',
                        'id'    => 'exampleInputEmail1',
                        'value'=>   set_value('email'),
                        'class' => 'form-control',
                        'placeholder' => 'Enter Email',
                        'autocomplete'=>"off"
                );
                
                echo form_input($email);
                    ?>
                    <?php echo form_error('email'); ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <?php echo form_error('password'); ?>
                    <?php
                    $password = array(
                        'type'  => 'password',
                        'name'  => 'password',
                        'id'    => 'exampleInputPassword1',
                        'class' => 'form-control',
                        'value'=>   set_value('password'),
                        'placeholder' => 'Enter Password',
                        'autocomplete'=>"off",
                        'required' =>'required'
                );                
                echo form_input($password);
                    ?>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-default">Reset</button>
                </div>
              <?= form_close()?>
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</section>

<?php include "footer.php";?>