<?php
$json = $this->_Data->get_block_6();
?>
<section class="section section-xxl bg-default">
    <div class="container">
        <h2 class="title-style-3 wow fadeScale">Đội ngũ chuyên gia</h2>
        <!-- Owl Carousel-->
        <div class="owl-carousel" data-items="1" data-sm-items="2" data-lg-items="2" data-margin="30" data-dots="true"
            data-mouse-drag="false">
            <?php
            foreach($json as $row){
            ?>
            <article class="team-classic box-md wow slideInUp" data-wow-delay=".1s">
                <a class="team-classic-figure" href="<?php echo $row['link'] ?>">
                    <img src="<?php echo URL_IMAGE.'/block/'.$row['image'] ?>" 
                        alt="" 
                        width="370"
                        height="334" />
                </a>
                <h4 class="team-classic-name">
                    <a href="<?php echo $row['link'] ?>"><?php echo $row['title'] ?></a>
                </h4>
            </article>
            <?php
            }
            ?>
        </div>
    </div>
</section>