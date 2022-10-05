<?php 

$ownNo = 1;
$teamNo = 1;


// OWN Project
$own1 = ['Project' => 'Own Project', 'project' => 'project' . $ownNo++ . ' - Landing page Coffe', 'Img' => 'assets/img/portfolio/own-1.JPG', 'Github' => 'https://github.com/chikaaul/chikaaul.github.io'];
$own2 = ['Project' => 'Own Project', 'project' => 'project' . $ownNo++ . ' - Membuat Card', 'Img' => 'assets/img/portfolio/own-2.JPG', 'Github' => 'https://github.com/chikaaul/praktikum_09'];
$own3 = ['Project' => 'Own Project', 'project' => 'project' . $ownNo++ . ' - Kurs Mata Uang <br> Menggunakan JavaScript', 'Img' => 'assets/img/portfolio/own-3.JPG', 'Github' => 'https://github.com/chikaaul/web-praktikum-lima/tree/main/praktikum%205/kurs%20mata%20uang'];


//Team Project
$team1 = ['Project' => 'Team Project', 'project' => 'project' . $teamNo++ . ' -  Mental.in',  'Img' => 'assets/img/portfolio/portfolio-1.JPG', 'Github' => 'https://github.com/chikaauli/mental.in'];
$team2 = ['Project' => 'Team Project', 'project' => 'project' . $teamNo++ . ' - Tempat Wisata Depok <br> ( SIWIKODE )',  'Img' => 'assets/img/portfolio/portfolio-2.JPG', 'Github' => 'https://github.com/chikaauli/team_MSIB3/tree/project2_team_LayoutWeb'];
$team3 = ['Project' => 'Team Project', 'project' => 'project' . $teamNo++ . ' - Walking Library',  'Img' => 'assets/img/portfolio/portfolio-3.JPG', 'Github' => 'https://github.com/chikaauli/team_MSIB3/tree/project2_team_LayoutWeb'];

$own_ = [$own1, $own2, $own3];
$team_ = [$team1, $team2, $team3];

?>
  
  
  <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container d-flex justify-content-between">
    <h1><a href="index.own">Chika Aulia Zahwa</a></h1>
    <?php include_once 'navbar.php' ?>
  </div>

    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*"class="filter-active">All</li>
            <li data-filter=".filter-own">Own Project</li>
            <li data-filter=".filter-team">Team Project</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <!--- own --->
      <?php foreach ($own_ as $own) : ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-own">
          <div class="portfolio-wrap">
            <img src="<?= $own['Img'] ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= $own['Project'] ?></h4>
              <p><?= $own['project'] ?></p>
              <div class="portfolio-links">
                <a href="<?= $own['Img'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
               <a href="<?= $own['Github'] ?>" target="_blank" title="open in repository"><i class="bx bxl-github"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>


      <!--- team --->
      <?php foreach ($team_ as $team) : ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-team">
          <div class="portfolio-wrap">
            <img src="<?= $team['Img'] ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= $team['Project'] ?></h4>
              <p><?= $team['project'] ?></p>
              <div class="portfolio-links">
                <a href="<?= $team['Img'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
               <a href="<?= $team['Github'] ?>" target="_blank" title="open in repository"><i class="bx bxl-github"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
      </div>

    </div>
  </section><!-- End Portfolio Section -->