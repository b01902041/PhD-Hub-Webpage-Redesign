<?php
    require_once 'mock_database.php';

    include 'header.php';
    include 'navigation.php';

    $events = getEventsFromDatabase();
    $lastIndex = 0;
?> 
    <section class="breadcrumb-padding page-title-small">
        <div class="container">
            <div class="row equalize xs-equalize-auto">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 display-table xs-margin-15px-top">
                    <div class="display-table-cell vertical-align-middle breadcrumb alt-font">
                        <ul>
                            <li><a href="https://nyu.edu" class="text-dark-gray" target="_blank">NYU</a></li>
                            <li><a href="https://engineering.nyu.edu/" class="text-dark-gray" target="_blank">Tandon School</a></li>
                            <li><a href="/" class="text-dark-gray">Professional Development</a></li>
                            <li><a href="/tracks" class="text-dark-gray">Tracks</a></li>
                            <li><a href="javascript:void(0);" class="text-dark-gray">Leadership</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding-100px-bottom padding-10px-top">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <h4 class="alt-font text-extra-dark-gray track-title">Leadership</h4>
                    </div>
                </div>
            </div>
            
        <div class="container">
            <div class="card-events-all">
                <?php
                foreach ($events as $event) {
                    $lastIndex = $event['id'];
                    $isComingSoon = ($event['title'] === 'Coming Soon' || $event['description'] === 'Coming Soon');
                    $linkClass = $isComingSoon ? 'event-link disabled' : 'event-link';
                    $href = $isComingSoon ? 'javascript:void(0);' : $event['pdf_url'];
                    ?>
                    <div class="event-card-container scroll-fade" data-index="<?php echo $event['id']; ?>">
                        <div class="card-image">
                            <img src="<?php echo $event['image_url']; ?>" alt="<?php echo $event['image_alt']; ?>">
                            <?php if (!$isComingSoon): ?>
                                <a href="<?php echo $href; ?>" class="card-image-link" target="_blank"></a>
                            <?php endif; ?>
                        </div>
                        <div class="card-content">
                            <h1>
                            <a href="<?php echo $href; ?>" 
                                target="_blank" 
                                class="<?php echo $linkClass; ?>"
                                <?php echo $isComingSoon ? 'onclick="return false;"' : ''; ?>>
                                <?php echo $event['title']; ?>
                            </a>

                            </h1>
                            <h2 class="speaker-info">BY <?php echo $event['speaker']; ?></h2>
                            <h3 class="event-info">
                                <span class="info-item"><i class="fa fa-calendar"></i> <?php echo $event['date']; ?></span>
                                <span class="info-item"><i class="fa fa-clock"></i> <?php echo $event['time']; ?></span>
                                <span class="info-item"><i class="fa fa-map-marker-alt"></i> <?php echo $event['location']; ?></span>
                            </h3>
                            <p class="event-intro"><?php echo $event['description']; ?></p>
                        </div>
                    </div>
                    
                    <div class="horizontal-line scroll-fade" data-index="<?php echo $event['id'] + 1; ?>"></div>
                    <?php
                }
                ?>
            </div>
            <div class="container">
                <div class="reminder-container scroll-fade" data-index="<?php echo $lastIndex + 1; ?>">
                    <h1 class="reminder-title">Kindly note:</h1>
                    <ul class="reminder-ul">
                        <li>The students will need to attend all the workshops in the track they choose.</li>
                        <li>Registration limited to first 50 doctoral students.</li>
                    </ul>
                </div>
            </div>
            <div class="row margin-30px-top">
                <div align="center"><a href="https://forms.gle/eri3Wfz4xoHJ8Roj6" class="btn btn-deep-pink btn-rounded btn-extra-large align-top sm-no-margin-right" target="_blank">Register <i class="fas fa-arrow-right"></i></a></div>
            </div>
        </div>
    </section>
<?php
    include 'footer.php';
?>