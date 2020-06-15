<div class="container">
    
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 box text-center">
            Edit Collection
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
                    <input class="form-control" type="text" name="name" value="<?= $record[0]['name'] ?>"/>
                    
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Period  <span class='error'> <?=isset ($errors["period"])? $errors["period"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="Text" name="period" value="<?= $record[0]['period'] ?>"/>
                    
                </div>    
                 <div class="form-group">
                    <label class="control-label">
                        Make  <span class='error'> <?=isset ($errors["make"])? $errors["make"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="Text" name="make" value="<?= $record[0]['make'] ?>"/>
                    
                </div>  
                
                  <div class="form-group">
                    <label class="control-label">
                        Model  <span class='error'> <?=isset ($errors["model"])? $errors["model"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="text" name="model" value="<?= $record[0]['model'] ?>"/>
                  </div>
                  
                <div class="form-group">
                    <label class="control-label">
                        Car Type  <span class='error'> <?=isset ($errors["type"])? $errors["type"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="text" name="type"  value="<?= $record[0]['car_type'] ?>"/>
                  </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Origin  <span class='error'> <?=isset ($errors["origin"])? $errors["origin"]:""; ?> </span>
                    </label>
                    <input class="form-control" type="text" name="origin"  value="<?= $record[0]['origin'] ?>"/>
                  </div>


                
                <br/>
                  <div class="form-group">
                   
                    <input class="btn btn-primary btn-block" type="submit" name="submit" value="SAVE"/>
                    
                </div>  
                
            </form>
    
        </div>
        <div class="col-sm-3"></div>
    </div>

</div>

