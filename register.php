<?php
include 'connection.php';
include 'insert.php';
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jossy Global Properties</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="newstyle.css">

</head>


<body>
  <div class="container">
    <section class="bg-light p-3 p-md-4 p-xl-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xxl-11">
            <div class="card border-light-subtle shadow-sm">
              <div class="row g-0">
                <div class="col-12 col-md-6">
                  <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy" src="man-holding-book-with-both-hands-mockup-006.jpg" alt="Welcome back you've been missed!">
                </div>



                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center bg-primary">
                  <div class="col-12 col-lg-11 col-xl-10">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                      <div class="row">
                        <div class="col-12">
                          <div class="mb-3">
                            <div class="text-center mb-4">
                              <a href="#!">
                                <img src="logo2.png" alt="Logo" width="60" height="45">
                              </a>
                            </div>
                            <p class="text-center fw-bold">To download our Real Estate E-book, please fill the form</p>
                            
                          </div>
                        </div>
                      </div>
                      <form method="POST" action=""> 
                        <div class="row  overflow-hidden bg-secondary secondary">
                          <div class="col-12">
                            <div class=" ">
                              <label for="email" class="form-label mt-3" style="font-size: 15px;">Email</label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                            </div>
                            <div class=" mb-1">
                              
                              <label for="number" class="form-label mt-3" style="font-size: 15px;">Phone Number</label>
                              <input type="number" class="form-control" name="contact" id="number" placeholder="" required>
                            </div>
                          </div>
                          <div class="col-12 mt-3">
                          <input type="submit" value="Submit" name="submit">
                            <!-- <div class="submit">
                             <a href="download.html">Submit</a>
                            </div> -->
                          </div>
                        </div>
                      </form>                   
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>