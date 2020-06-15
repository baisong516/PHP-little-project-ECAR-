<div class="container">
    <div class="row">
        <div class="col-md-2 text-center"></div>
        <div class="col-md-8 box text-center">View Collection: <?=count($records)?> results</div>
        <div class="col-md-2 text-center"></div>
    </div>
    <div class="row">
        <div class="col-md-2 text-center"></div>
        <div class="col-md-8 jumbotron text-center">
            <table class="table table-striped table-hover" >
                <tr class="info">
                    <td>Collection ID</td><td>Name</td><td>Period</td><td>Make</td><td>Model</td><td>Car Type</td><td>Origin</td> <td>User_ID</td><td>Manage</td>
                </tr>
               <?php foreach($records as $record):?>
                    <?php 
                    $index = $record[0];
                    ?>
                    <tr><td><?=$record[0]?></td><td><?=$record[1]?></td><td><?=$record[2]?></td><td><?=$record[3]?></td><td><?=$record[4]?></td><td><?=$record[5]?></td><td><?=$record[6]?></td><td><?=$record[7]?></td><td><a href="?action=editdata<?=$index?>">Edit </a><a href="?action=viewcars<?=$index?>">View-Cars</a></td></tr>
                    
                <?php endforeach; ?>
       
             </table>
        </div>
        <div class="col-md-1 text-center"></div>
    </div>
</div>