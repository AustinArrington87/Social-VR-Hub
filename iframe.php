<html>
<body>
<div align="center">
    
<section>
    <div align="center">
        <h1 class="text-muted">Submit Your Hub </h1>
        <p>Enter your information for distribution in our VR content syndication network.</p>
        
        
         <form action="mail-handler.php" method="post">  
    
<div class="form-group" name="name">
   Name: <input type="text" name="name"><br>
</div> 
    

<div class="form-group" name="hub_name">
   Hub Name: <input type="text" name="hub_name"><br>
</div>


<div class="form-group" name="iframe">
   Iframe: <input type="text" name="iframe"><br>
</div>

<div class="form-group">
    Email: <input type="text" name="email"><br><br>
</div>
                               <button type="submit" class="btn btn-danger btn-lg" name="submit" value="Submit">Submit</button>
</form>
        
        
        <?php
        echo $_POST["link"]
        ?>
     
        
    </div>
    
    </section>


</div>
</body>
</html>