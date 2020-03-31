<?php require './includes/header.php' ?>

  <main id="about">
    <h1 class="lg-heading">
      About
      <span class="text-secondary">Me</span>
    </h1>
    <h2 class="sm-heading">
      Let me tell you a few things...
    </h2>
    <div class="about-info">
      <img src="img/olubisi_david.jpg" style="width:300px;height:300px;"  alt="Olubisi David" class="bio-image">

      <div class="bio">
        <h3 class="text-secondary">BIO</h3>
        <p>I'm a tech enthusiast. A tech Evangelist... </p>
      </div>

      <div class="job job-1">
        <h2>Full Stack Developer</h2>        
        <p>I utilize both frontend and backend technologies.</p>
      </div>

      <div class="job job-2">
        <h2>Skill Set</h2>
        <!-- <h6>Front End Developer</h6> -->
        <?php include('./includes/skills.php'); ?>
      </div>

      <div class="job job-3">
        <h2>Education</h2>
        <!-- <h6>Graphic Designer</h6> -->
        <div style="display:grid;grid-template-rows:40px 40px 40px; margin-top:10px">
        <h4>Obafemi Awolowo University</h4>
        <h5>Electronics & Electrical Engineering </h5>
        <h5>B.Sc</h5>
        </div>  
      </div>
    </div>
  </main>

<?php require('./includes/footer.php'); ?>