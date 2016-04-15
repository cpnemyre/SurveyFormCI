<?php

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <fieldset>
     <title>Survey Form View Page</title>
   </head>
   <body>
     <form>
       <label>Your Name: <input type='text' name='full_name'><br></br></label>
       <label>Dojo Location:
         <select name="Location">
           <option value="Seattle, WA">Seattle, WA</option>
           <option value="Dallas, TX">Dallas, TX</option>
           <option value="Los Angeles, CA">Los Angeles, CA</option>
         </select><br></br>
       <label>Favorite Language:
         <select name="Language">
           <option value="Javascript">Javascript</option>
           <option value="PHP">PHP</option>
           <option value="Mean">Mean</option>
           <option value="IOS">IOS</option>
           <option value="Lamp">Lamp</option>
           <option value="Ruby">Ruby</option>
         </select><br></br>
       Comment <span>(optional)</span>:</span> <br></br><textarea name="comments" rows="10" cols="40"></textarea>
       <br><input class = "button" type='submit' value='Submit!'/>
   </form>

     </form>

   </body>
 </html>
