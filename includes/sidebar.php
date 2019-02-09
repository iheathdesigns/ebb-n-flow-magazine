 <script src="js/jquery.flexslider-min.js"></script>
     
     <!-- Hook to the Flexslider -->
     <script type="text/javascript">
	 $(window).load(function(){
		 $('.flexslider').flexslider({
		 
		 animation:"slide",
		 slideDirection:"vertical",
	 });
		 
	 });
	 </script>

<div id="slider">
    	<div class="flexslider">
        	<ul class="slides">
        	<li><a href="index.php?section=culinary"><img src="images/culinary.jpg" width="110px" height="110px" />
            	<p class="flex-caption">Culinary Arts</p>
                </a></li>
            
            <li><a href="index.php?section=film"><img src="images/cinematografa.jpg" width="110px" height="110px"/>
            	<p class="flex-caption">Film</p>
                </a></li>
            
            <li><a href="index.php?section=photography"><img src="images/photo.jpg" width="110px" height="110px" />
            <p class="flex-caption">Photography</p>
            	</a></li>
                
                 <li><a href="index.php?section=web"><img src="images/web.jpg" width="110px" height="110px" />
            <p class="flex-caption">Web Design</p>
            	</a></li>
                
                 <li><a href="index.php?section=fashion"><img src="images/fashion.jpg" width="110px" height="110px" />
            <p class="flex-caption">Fashion Marketing</p>
            	</a></li>
                
                 <li><a href="index.php?section=graphic"><img src="images/graphic.jpg" width="110px" height="110px" />
            <p class="flex-caption">Graphic Design</p>
            	</a></li>
                
                 <li><a href="index.php?section=interior"><img src="images/interior.jpg" width="110px" height="110px" />
            <p class="flex-caption">Interior</p>
            	</a></li>
        
        </ul>
        
        
        </div>
    </div>