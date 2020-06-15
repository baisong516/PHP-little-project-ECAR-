<div class="container">
    <div class="row">
        <div class="col-md-2 text-center"></div>
        <div class="col-md-8 box text-center">Cars for this Collection ID: <?=$id?></div>
        <div class="col-md-2 text-center"></div>
    </div>
        <div class="row">
        <div class="col-md-2 text-center"></div>
        <div class="col-md-8 jumbotron text-center">
            <table class="table table-striped table-hover" >
                <tr>
                    <th>Car ID</th>
                    <th>Image</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Collection ID</th>
                    
                    </td>
                </tr>
               <?php foreach($records as $record):?>
                    <?php 
                    $index = $record[0];
                    ?>
                    <tr>
                        <td align="left"><?=$record[0] ?></td>
                        <td align="left">
                        <img src="../photos/<?=$record[1] ?>" width="50" height="50"/>
                        </td>
                        <td align="left"><?=$record[2] ?></td>
                        <td align="left"><?=$record[3] ?></td>
                        <td align="left"><?=$record[4] ?></td>
                        
                    </tr>
                <?php endforeach; ?>
       <tr align="middle">
                        <a href="?action=addCars<?=$id?>" >
                            <button>ADD A CAR</button></a>
       </tr>
             </table>
            
        </div>
        <div class="col-md-1 text-center"></div>
    </div>
</div>

