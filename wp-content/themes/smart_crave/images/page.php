<?php get_header(); ?>

  <div class="row">
    <div class="col-sm-2 col-xs-12 pad">
      <div class="row">

        <?php
            wp_nav_menu(array('menu_id' => 'main-nav', 'before' => '<div class="col-sm-12 col-xs-3"><div class="cat"><h4>', 'after' => '</h4></div></div>'));
          ?>

      </div>
    </div>
    
    <div class="col-sm-8 col-xs-12 scroll"> <!-- SCROLL SPEC -->
      <div class="row center">
  <?php
$startdate=strtotime("Monday");
$enddate=strtotime("+2 weeks",$startdate);
$date_array = array();
while ($startdate <  $enddate) {
   $var = date("M d", $startdate);
   array_push($date_array, $var);
   $startdate = strtotime("+1 week", $startdate);
}
?>
    <table class="container-fluid table1">
     <tbody class="row">
       <tr class="row">
          <td class="col-xs-offset-2 bt btl"></td>
          <td class="col-xs-2">Monday</td>
          <td class="col-xs-2">Thuesday</td>
          <td class="col-xs-2">Wenesday</td>
          <td class="col-xs-2">Thursday</td>
          <td class="col-xs-2">Friday</td>
       </tr>
       <tr class="row">
          <td class="col-xs-offset-2 bt btl"></td>
          <td class="col-xs-2"><?php print_r($date_array[0]); ?></td>
          <td class="col-xs-2"><?php
                $date=date_create($date_array[0]);
                date_add($date,date_interval_create_from_date_string("1 day"));
                echo date_format($date,"M d");
                ?></td>
          <td class="col-xs-2"><?php
                $date=date_create($date_array[0]);
                date_add($date,date_interval_create_from_date_string("2 days"));
                echo date_format($date,"M d");
                ?></td>
          <td class="col-xs-2"><?php
                $date=date_create($date_array[0]);
                date_add($date,date_interval_create_from_date_string("3 days"));
                echo date_format($date,"M d");
                ?></td>
          <td class="col-xs-2"><?php
                $date=date_create($date_array[0]);
                date_add($date,date_interval_create_from_date_string("4 days"));
                echo date_format($date,"M d");
                ?>
          </td>
       </tr>
       <tr class="row">
          <td class="col-xs-2">Heure Paris</td>
          <td class="col-xs-2">9:00 AM - 10:00 AM</td>
          <td class="col-xs-2">9:00 AM - 10:00 AM</td>
          <td class="col-xs-2">9:00 AM - 10:00 AM</td>
          <td class="col-xs-2">9:00 AM - 10:00 AM</td>
          <td class="col-xs-2">9:00 AM - 10:00 AM</td>
       </tr>
       <tr class="row">
          <td class="col-xs-2">Book this time</td>
          <td class="col-xs-2"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6CQMJ4NFB3VSL">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</td>
          <td class="col-xs-2">Book time-slot</td>
          <td class="col-xs-2">Book time-slot</td>
          <td class="col-xs-2">Book time-slot</td>
          <td class="col-xs-2">Book time-slot</td>
       </tr>
     </tbody>
    </table>
      
    <table class="container-fluid table1">
     <tbody class="row">
       <tr class="row">
          <td class="col-xs-offset-2 bt btl"></td>
          <td class="col-xs-2">Monday</td>
          <td class="col-xs-2">Thuesday</td>
          <td class="col-xs-2">Wenesday</td>
          <td class="col-xs-2">Thursday</td>
          <td class="col-xs-2">Friday</td>
       </tr>
       <tr class="row">
          <td class="col-xs-offset-2 bt btl"></td>
          <td class="col-xs-2"><?php print_r($date_array[1]); ?></td>
          <td class="col-xs-2"><?php
                $date=date_create($date_array[1]);
                date_add($date,date_interval_create_from_date_string("1 day"));
                echo date_format($date,"M d");
                ?></td>
          <td class="col-xs-2"><?php
                $date=date_create($date_array[1]);
                date_add($date,date_interval_create_from_date_string("2 days"));
                echo date_format($date,"M d");
                ?></td>
          <td class="col-xs-2"><?php
                $date=date_create($date_array[1]);
                date_add($date,date_interval_create_from_date_string("3 days"));
                echo date_format($date,"M d");
                ?></td>
          <td class="col-xs-2"><?php
                $date=date_create($date_array[1]);
                date_add($date,date_interval_create_from_date_string("4 days"));
                echo date_format($date,"M d");
                ?>
          </td>
       </tr>
       <tr class="row">
          <td class="col-xs-2">Heure Paris</td>
          <td class="col-xs-2">9:00 AM - 10:00 AM</td>
          <td class="col-xs-2">9:00 AM - 10:00 AM</td>
          <td class="col-xs-2">9:00 AM - 10:00 AM</td>
          <td class="col-xs-2">9:00 AM - 10:00 AM</td>
          <td class="col-xs-2">9:00 AM - 10:00 AM</td>
       </tr>
       <tr class="row">
          <td class="col-xs-2">Book this time</td>
          <td class="col-xs-2"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6CQMJ4NFB3VSL">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</td>
          <td class="col-xs-2">Book time-slot</td>
          <td class="col-xs-2">Book time-slot</td>
          <td class="col-xs-2">Book time-slot</td>
          <td class="col-xs-2">Book time-slot</td>
       </tr>
     </tbody>
    </table>

      </div>
    </div>
  
<?php get_footer(); ?>