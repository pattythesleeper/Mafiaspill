<?php
  include("core.php");
  startpage("Nyheter");
?>
<h1>Nyheter</h1>
<div class="nyheter">
  <table class="ny1">
    <tr>
      <td>
      <?php
        if($obj->status == 1 || $obj->status == 2){
          echo '<p class="button2"><a href="publiser.php">Skriv en ny nyhet!</a></p>';
        }
        $sql = $db->query("SELECT * FROM `news` WHERE `vis` = '1' AND `userlevel` >= '".$obj->status."' ORDER BY `id` DESC LIMIT 0,5");
        if($db->num_rows() == 0){
          echo '<p class="feil">Ingen nyheter er publisert!</p>';
        }
        else if($db->num_rows() >= 1){
          while($r = mysqli_fetch_object($sql)){
            $statuss = NULL;
            print '
            <table class="';
            if($r->id % 2) {
              print 'news1">';
            }
            else {
              print 'news2">';
            }
            if($r->userlevel == 1){
              $statuss = ' style="background:#800;"';
            }
            else if($r->userlevel == 2){
              $statuss = ' style="background:#0052A5"';
            }

            $newres = bbcodes($r->text,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0);
            $q = $db->query("SELECT * FROM `users` WHERE `user` = '$r->author'");
            $f = $db->fetch_object($q);
            print '
            <tr>
            <td class="linkstyle"'.$statuss.'><b>'.htmlentities($r->title, ENT_NOQUOTES | ENT_HTML401, 'ISO-8859-1').'</b> skrevet av <a href="profil.php?id='.$f->id.'" style="font-weight:bold;">'.$r->author.'</a><div class="innlegsdato">'.date("H:i:s | d.m.Y",$r->time).'</div></td>
            </tr>
            <tr>
            <td colspan="2">
            '.$newres.'
            </td>
            </tr>
            </table>
            ';
          }
        }
      ?>
      </td>
    </tr>
  </table>
</div>
<?php
endpage();
?>


