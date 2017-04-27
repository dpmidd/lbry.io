<div class="bg-image-full" style="background-color: white" <?php //style="background-image: url(https://s3.amazonaws.com/files.lbry.io/cover-home2.jpg)" ?>></div>
<?php Response::setMetaTitle(__('title.home')) ?>
<?php Response::setMetaDescription(__('description.home')) ?>
<?php echo View::render('nav/_header', ['isDark' => false, 'isBordered' => false]) ?>
<main class="home">
  <div class="cover home__title cover-light">
    <h1 class="cover-title cover-title-flat text-center">Content Freedom</h1>
  </div>
  <div class="cover home__media">
    <img alt="Picture of LBRY Browser" src="/img/lbry-ui.png" />
  </div>
  <div class="cover cover-light content content-light content-wide home__copy">
    <div class="spacer2 home">
      <h2 class="cover-subtitle cover-title-flat">LBRY is a free, open, and community-run digital marketplace.</h2>
      <h3 class="cover-subtitle cover-title-flat">You own your data. You control the network. Indeed, you <em>are</em> the network.</h3>
      <h3 class="cover-subtitle cover-title-flat">Hollywood films, college lessons, amazing streamers and more are on the first media network ruled by <em>you</em>.</h3>
    </div>
    <div class="spacer2 text-center">
      <a href="/get" class="btn-primary btn-large">Early Access</a>
      <a href="/learn" class="btn-link btn-large">{{global.learn}}</a>
    </div>
  </div>
</main>
<?php echo View::render('nav/_footer', ['isDark' => false, 'isBordered' => false]) ?>
