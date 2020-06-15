<div class="container">
    
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 box text-center">
            Add Collections
        </div>
        <div class="col-sm-3"></div>
        
    </div>
    
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 jumbotron">
            <form action="" method="post" enctype="multipart/form-data" novalidate="true">
                
                <div class="form-group">
                    <label class="control-label">
                        Car ID <span class='error'> <?=isset ($errors["car_id"])? $errors["car_id"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="text" name="car_id" />
                    
                </div>
                
            

                
                <div class="form-group">
                    <label class="control-label">
                        Details  <span class='error'> <?=isset ($errors["details"])? $errors["details"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="Text" name="details" />
                    
                </div>    
                 <div class="form-group">
                    <label class="control-label">
                       Price  <span class='error'> <?=isset ($errors["price"])? $errors["price"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="Text" name="price" />
                    
                </div>  
                   <div class="form-group">
                    <label for="image" class="control-label">
                        Image <span class='error'> <?=isset ($errors["image"])? $errors["image"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="file" name="image" />
                </div>
                
                <br/>
                  <div class="form-group">
                   
                    <input class="btn btn-primary btn-block" type="submit" name="submit" value="SUBMIT"/>
                    
                </div>  
                
            </form>
    
        </div>
        <div class="col-sm-3"></div>
    </div>

</div>