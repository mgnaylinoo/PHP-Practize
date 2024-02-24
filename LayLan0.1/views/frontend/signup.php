<?php include("./views/frontend/connectpayment.php"); ?>
<div class="container text-center mt-2">
  <div class="row justify-content-md-center">
    
    <div class="col-md-6">
      <p class="lead">
  Let us know more about you to get bidding process
</p>
      <div class="form-floating mb-3">
        <input type="text" class="form-control " id="floatingInput" placeholder="Username">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control " id="floatingEmail" placeholder="Email address">
        <label for="floatingEmail">Email address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control " id="floatingConfirm" placeholder="Confirm your password">
        <label for="floatingConfirm">Confirm your password</label>
      </div>
      <div class="form-floating mb-3">
        <input type="phone" class="form-control " id="floatingConfirm" placeholder="Phone number">
        <label for="floatingConfirm">Phone number</label>
      </div>
      <div class="form-floating mb-3">
        <input type="phone" class="form-control " id="floatingConfirm" placeholder="NRC">
        <label for="floatingConfirm">NRC</label>
      </div>
      <div class="form-floating">
        <textarea class="form-control" placeholder="Where you live exactly?" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Addresss</label>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-3 mt-2">
        <div class="col">
          <div class="card">
            <img src="./assets/images/kpayicon.png" class="img-fluid  thumbnail card-img-top">
            <div class="card-footer">
                <button class="btn btn-primary" type="button"  data-bs-toggle="modal" data-bs-target="#connectPayment" >Connect</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
             <img src="./assets/images/wavemoneyicon.jpg" class="img-fluid  thumbnail card-img-top">
            <div class="card-footer">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#connectPayment">Connect</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./assets/images/AYAicon.png" class="img-fluid  thumbnail card-img-top">
            <div class="card-footer">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#connectPayment">Connect</button>
            </div>
          </div>
        </div>
      </div>
            <div class="d-grid gap-2">
              <button class="btn btn-outline-primary mt-3" type="button">Sign up</button>
            </div>
          </div>
          
        </div>
    </div>