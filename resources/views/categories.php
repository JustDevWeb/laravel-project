<h1>All categories:</h1>

<ol>
    <?php foreach ($categories as $category ):?>
    <li><h4><a href="<?= route( 'category.current' , ['category' => $category]) ?>"><?=$category?></a></h4></li>
    <?php endforeach;?>
</ol>


