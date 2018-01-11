<?php
  include("functions.php");
  include("editfish-process.php");
      if (!isset ($_GET["id"])){
          header("Location:fish.php");
      }

      $fish = get_fish($_GET['id']);
      $assoc = mysqli_fetch_assoc($fish);

      if ($assoc == NULL) {
          die('This fish does not exist!');
      }

      include("header.php");
?>
  <h2 class="titletext"><Strong>Edit Fish Species</strong></h2>
 </div>




   <div id="page-content-wrapper">
     <div class="container-fluid">

         <form enctype="multipart/form-data" action="editfish.php?id=<?=$_GET['id']?>" method="post">

           <div class="row">
             <a href="fish.php"class="btn btn-default" id="posterbackbtn"><strong>Go Back</strong></a>
           </div>
           <div class="form-group">
               <label for="fishname">Name:</label>
                <input type="text" class="form-control" name="fishname" value="<?=$assoc["fsh_FishName"]?>">
            </div>
            <div class="form-group">
              <label for="fishsname">Scientific Name:</label>
                <input type="text"  class="form-control" name="fishsname" value="<?=$assoc["fsh_ScientificName"]?>" placeholder="Scientific Name">
            </div>
            <div class="form-group">
              <label for="forigin">Origin Of Fish:</label>
                <input type="text" class="form-control" name="forigin" value="<?=$assoc["fsh_Origin"]?>" placeholder="Origin of fish">
              </div>


             <!--this is for the image input-->
              <h5><strong>Change Image:</strong></h5>
              <input type="file" name="image"class="form-control-file"id="FormControlFileImages"/>

              <div class="row">
                <div class="container-fluid">
                  <div class="checkboxspacing">
                    <div class="form-check">
                      <h5><strong>Danger of Fish</strong></h5>
                      <div>
                        <input type="checkbox" name="fvenomous" value="1">Venomous
                      </div>
                      <div >
                        <input type="checkbox" name="ftoxic" value="1">Posinous
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                 <label for="comment">Desciption:</label>
                 <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>

              <input type="hidden" name="fishid" value="<?=$assoc['id']?>">
              <button type="submit" id="fishimageeditbtn"class="btn btn-primary btn-lg"><strong>Edit Fish</strong></button>

    </form>

    </div>
  </div>


<?php
  include("footer.php");
?>
