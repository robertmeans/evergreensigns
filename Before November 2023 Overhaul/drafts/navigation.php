<div id="draft_navigation">
<form name="form">
<div>
    <div class="draft_nav_option">
    	<label><input type="radio" name="loc"  onClick="go('log.php');"<?php if ($thisPage=="log") echo "checked"; else { echo ""; }?>><br>Log</label>
    </div>
        
<!-------------------------------------------------------------------------------------------------------------------------------- Begin navigation -->
    
    <div class="draft_nav_option">
    	<label><input type="radio" name="loc" onClick="go('index.php');" <?php if ($thisPage=="index01") echo "checked"; else { echo ""; }?>><br>01</label>
    </div>
    
    <div class="draft_nav_option">
    	<label><input type="radio" name="loc" onClick="go('index02.php');" <?php if ($thisPage=="index02") echo "checked"; else { echo ""; }?>><br>02</label>
    </div>

    <div class="draft_nav_option">
        <label><input type="radio" name="loc" onClick="go('index03.php');" <?php if ($thisPage=="index03") echo "checked"; else { echo ""; }?>><br>03</label>
    </div>    

    <div class="draft_nav_option">
        <label><input type="radio" name="loc" onClick="go('index04.php');" <?php if ($thisPage=="index04") echo "checked"; else { echo ""; }?>><br>04</label>
    </div>

    <div class="draft_nav_option">
        <label><input type="radio" name="loc" onClick="go('index05.php');" <?php if ($thisPage=="index05") echo "checked"; else { echo ""; }?>><br>05</label>
    </div> 

    <div class="draft_nav_option">
        <label><input type="radio" name="loc" onClick="go('index06.php');" <?php if ($thisPage=="index06") echo "checked"; else { echo ""; }?>><br>06</label>
    </div>

    <div class="draft_nav_option">
        <label><input type="radio" name="loc" onClick="go('index07.php');" <?php if ($thisPage=="index07") echo "checked"; else { echo ""; }?>><br>07</label>
    </div>

    <div class="draft_nav_option">
        <label><input type="radio" name="loc" onClick="go('index08.php');" <?php if ($thisPage=="index08") echo "checked"; else { echo ""; }?>><br>08</label>
    </div>  

    <div class="draft_nav_option">
        <label><input type="radio" name="loc" onClick="go('index09.php');" <?php if ($thisPage=="index09") echo "checked"; else { echo ""; }?>><br>09</label>
    </div>

    <div class="draft_nav_option">
        <label><input type="radio" name="loc" onClick="go('index10.php');" <?php if ($thisPage=="index10") echo "checked"; else { echo ""; }?>><br>10</label>
    </div>                       
    
<!--        
*** remember to un-comment .draft_nav_option:last-child in css when you're ready to post the beta site ***
-->
<div class="draft_nav_option cf">
    <a class="beta-link" href="../beta" target="_blank"><img src="_images/beta-radio.jpg" border="0" width="12" height="13"><br>Beta</a>
</div>

	
</div> 
</form>       
</div><!-- #draft_navigation -->








