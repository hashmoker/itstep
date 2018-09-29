<!doctype html>

<body>


<ul class="nav">

    <?php
    $nav = 4;
    $cur_page = 1;
    while ($cur_page <= $nav){
        //первая итерация $cur_page = 1
        echo"<li class=\"nav-item\">
             <a class=\"nav-link active\" href=\"?page=$cur_page\">LINK</a>
             </li>";
        $cur_page++;
        
    }
    
    
    

    ?>

</ul>
</body>
</html>












