<?php

include('components/property-item.php');
include('components/header.php');?>
    <link rel="stylesheet" href="../css/homepage.css">

</head>
<body>
   <?php
include('components/nav.php');?>
<section class="main-section">
   <div class="search">
         <div class="search-types">
            <div class="search-type search-current-selected">Buy</div>
            <div class="search-type">Sell</div>
            <div class="search-type">Rent</div>
         </div>
         <div class="search-options">
               <div class="search-option">
                  <label>City/Street</label>
                  <form>  
                     <select>  
                     <option value = "Kathmandu"> Kathmandu   
                     </option>  
                     <option value = "Bhaktapur"> Bhaktapur   
                     </option>  
                     <option value = "Lalitpur"> Lalitpur  
                     </option>  
                     <option value = "Nuwakot"> Nuwakot  
                     </option>  
                     </select>  
                  </form>
               </div>
               <div class="search-option">
                  <label>Property Type</label>
                  <form>  
                     <select>  
                     <option value = "com/res"> Commercial/Residential   
                     </option>  
                     <option value = "com"> Commercial   
                     </option>  
                     <option value = "res"> Residential  
                     </option>  
                     <option value = "rent"> Rent  
                     </option>  
                     </select>  
                  </form>
               </div>
               <div class="search-option">
                  <label>Price Rage</label>
                  <form>  
                     <select>  
                     <option value = "range1"> Rs 1Lakhs - Rs 10Lakhs   
                     </option>  
                     <option value = "range2">  Rs 10Lakhs - Rs 00Lakhs   
                     </option>  
                     <option value = "range3">  Rs 50Lakhs - Rs 1Crore
                     </option>  
                     <option value = "range4">  Rs 1Crore - Above
                     </option>  
                     </select>  
                  </form>
               </div>
               <div class="search-icon">
                  <i class="fas fa-search"></i>
               </div>
         </div>
   </div>
</section>
<section class="featured">
   <div class="title very-big-text bold-text">Featured Products</div>
   <div class="grid">
     <?php
         for($i=0;$i<8;$i++){
            echo $propertyItem;
         }
     ?>
            
  
   </div>
</section>
</body>
</html>