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
                        Name <span class='error'> <?=isset ($errors["name"])? $errors["name"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="text" name="name" />
                    
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Period  <span class='error'> <?=isset ($errors["period"])? $errors["period"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="Text" name="period" />
                    
                </div>    
                 <div class="form-group">
                    <label class="control-label">
                        Make  <span class='error'> <?=isset ($errors["make"])? $errors["make"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="Text" name="make" />
                    
                </div>  
                
                  <div class="form-group">
                    <label class="control-label">
                        Model  <span class='error'> <?=isset ($errors["model"])? $errors["model"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="text" name="model" />
                  </div>
                  
                <div class="form-group">
                    <label class="control-label">
                        Car Type  <span class='error'> <?=isset ($errors["type"])? $errors["type"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="text" name="type" />
                  </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Origin  <span class='error'> <?=isset ($errors["origin"])? $errors["origin"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="text" name="origin" />
                  </div>
                
              <div class="form-group">
                    <label class="control-label">
                        Use_id 
                        <span class='error'style="color:red"> 
                            <?= isset($errors['user_id']) ? $errors['user_id'] : ""; ?> 
                        </span>
                    </label>
                    <input class="form-control" type="text" name="user_id" />
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

