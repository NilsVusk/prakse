<?php

$newsSql = "SELECT news_id, name,  main_image, context FROM news ORDER BY news_id DESC";


$newsResults = $conn->query($newsSql);


$news_id = $_GET['news_id'];


?>

<div class="content row">
    <div class="col-md-8">
        <section class="row">
            <article>
                <!-- <h1>Heading 1</h1>
                <div class="d-flex flex-wrap">
                    <div class="col-md-6">
                        <img src="https://picsum.photos/200/300">
                    </div> 

                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida metus semper leo imperdiet, at maximus sem blandit. Donec varius neque sem, vel elementum lorem condimentum eget. Aenean id nisi non elit rhoncus tincidunt. Suspendisse ac euismod mi. Sed consectetur turpis lectus, a lobortis enim ultrices quis. Proin tempor auctor venenatis. Aenean eu neque pellentesque, laoreet arcu eget, imperdiet ante.</p>
                    </div> 
                </div> -->

                <?php 
                    $count = 0;

                    foreach ($newsResults as $news){

                        if ($count == 0){
                        ?>
                        <h1> <?php echo $news['name']; ?></h1>
                        <div class="d-flex flex-wrap p-2">
                            <div class="col-md-6">
                                <img class="rounded border border-secondary w-75" src="images/<?php echo $news['main_image']; ?>">
                            </div>
                    
                            <div class="col-md-6 ">
                                <p><?php echo $news['context']; ?></p>
                            </div>
                        </div>
                        <?php
                        }
                    $count++;
                    }
                ?>
            </article>
        </section>

        <section class="row">
            <article>
                <!-- <h2>Heading 2</h2>
                <div class="d-flex flex-wrap">
                    <div class="col-md-6">
                        <p>Sed pulvinar felis et pulvinar auctor. Suspendisse a pellentesque nibh. Phasellus mattis facilisis elit, eu eleifend lorem maximus id. Sed nec commodo nisi, quis mollis lorem. Proin porta erat a dui scelerisque mollis. In hac habitasse platea dictumst. Morbi nec massa eget erat dapibus mattis.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Aenean ut dignissim turpis. Morbi malesuada imperdiet est sed laoreet. Suspendisse feugiat auctor erat in vestibulum. Suspendisse molestie posuere erat eget posuere. </p>
                    </div>
                    <div class="">
                        <img src="https://picsum.photos/400/100">
                    </div>
                </div> -->
                <?php 
                    $count = 0;

                    foreach ($newsResults as $news){

                        if ($count == 1){
                        ?>
                        <h2><?php echo $news['name']; ?></h2>
                        <div class="d-flex flex-wrap">
                            <?php
                                $text_length = strlen($news['context']);
                                $half_text = $text_length / 2;

                                $col_limit = 200;

                                $class = 12;
                                if ($half_text >=  $col_limit){
                                    ?>
                                        <div class="col-md-6 ">
                                        <p><?php echo substr($news['context'], $half_text); ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo substr($result['context'], -$half_text); ?></p>
                                        </div>
                                    <?php
                                }else{
                                    ?>
                                        <div class="col-md-12 ">
                                        <p><?php echo $news['context']; ?></p>
                                        </div>
                                    <?php
                                }
                                
                                
                                ?>
                            <div class="col-md-6 h-25">
                                <img class="rounded border border-secondary img-fluid w-100" src="images/<?php echo $news['main_image']; ?>">                              
                            </div>
                        </div>
                            
                        <?php
                        }
                    $count++;
                    }
                ?>
            </article>
        </section>
    </div>

    <div class="col-md-4">
        <aside>
            <div class="container bg-dark-subtle">
                <div class="row">
                    <?php 
                        $count = 0;

                        foreach ($newsResults as $news){

                            if ($count >= 2){
                            ?>
                            <div class="d-flex align-items-center m-2">
                                <div class="col-md-4">
                                    <a href="?news_id&news_id=<?php echo $news["news_id"]; ?>">
                                        <img class="rounded border border-secondary w-75" src="<?php echo $news['main_image']; ?>">
                                        
                                            <p><?php echo $news['name']; ?></p>
                                        
                                    </a>
                                </div>
                        
                                <div class="p-3 col-md-8 ">
                                    <p><?php echo $news['context']; ?></p>
                                </div>
                            </div>
                            <?php
                         }
                        $count++;
                        }
                    ?>
                </div>       
            </div>
        </aside>
    </div>
</div>