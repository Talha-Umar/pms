<!-- <%@ page language+"java" content type="text.html"; charset=ISO.8859-1
    pageEncoding= "ISO-8859-1"%> -->
    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <title>TESTING!</title>
      </head>
      <body>
        
        <form>
            <section class="content">

                <!-- Default box -->
                <div class="card card-outline card-primary rounded-0 shadow">
                  <div class="card-header">
                    <h3 class="card-title">Add New Prescription</h3>
        
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- best practices-->
                    <form method="post">
                      <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <label>Patient Name</label>
                <input id="bp" class="form-control form-control-sm rounded-0" name="p_name" required="required" />
              </div>
        
        
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10">
                        <div class="form-group">
                          <label>Visit Date</label>
                          <div class="input-group date" 
                          id="visit_date" 
                          data-target-input="nearest">
                          <input type="text" class="form-control form-control-sm rounded-0 datetimepicker-input" data-target="#visit_date" name="visit_date" required="required" data-toggle="datetimepicker" autocomplete="off"/>
                          <div class="input-group-append" 
                          data-target="#visit_date" 
                          data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
        
        
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-10">
                    <div class="form-group">
                      <label>Next Visit Date</label>
                      <div class="input-group date" 
                      id="next_visit_date" 
                      data-target-input="nearest">
                      <input type="text" class="form-control form-control-sm rounded-0 datetimepicker-input" data-target="#next_visit_date" name="next_visit_date" data-toggle="datetimepicker" autocomplete="off"/>
                      <div class="input-group-append" 
                      data-target="#next_visit_date" 
                      data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>
        
              <div class="clearfix">&nbsp;</div>
        
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label>BP</label>
                <input id="bp" class="form-control form-control-sm rounded-0" name="bp" />
              </div>
              
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <label>Weight</label>
                <input id="weight" name="weight" class="form-control form-control-sm rounded-0" required="required" />
              </div>
        
              <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <label>Disease</label>
                <input id="disease" required="required" name="disease" class="form-control form-control-sm rounded-0" />
              </div>
        
        
            </div>
        
            <div class="col-md-12"><hr /></div>
            <div class="clearfix">&nbsp;</div>
            <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <label>Medicine</label>
                <input id="bp" class="form-control form-control-sm rounded-0" name="medicine" required="required" />
              </div>
            <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <label>Packing</label>
                <input id="bp" class="form-control form-control-sm rounded-0" name="medicine" required="required" />
              </div>
        
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label>Quantity</label>
              <input id="quantity" class="form-control form-control-sm rounded-0" />
            </div>
        
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <label>Dosage</label>
              <input id="dosage" class="form-control form-control-sm rounded-0" />
            </div>



        </form>
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
    </html>