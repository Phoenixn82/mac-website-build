<div class="dock">
  <ul class="dock-container">
    <li class="li-1 li" onclick="toggleDiv('div-1')">
      <div class="name">Contact</div>
      <img class="ico" src="images/png/dock/messages.png" alt="">
    </li>
    <li class="li-2 li" onclick="toggleDiv('div-2')">
      <div class="name">Resume</div>
      <img class="ico" src="images/png/dock/maps.png" alt="">
    </li>
    <li class="li-3 li" onclick="toggleDiv('div-3')">
      <div class="name">Music</div>
      <img class="ico" src="images/png/dock/music.png" alt="">
    </li>
    <li class="li-4 li" onclick="toggleDiv('div-4')">
      <div class="name">Settings</div>
      <img class="ico" src="images/png/dock/settings.png" alt="">
    </li>
    <li class="li-5 li" onclick="toggleDiv('div-5')">
      <div class="name">Portfolio</div>
      <img class="ico" src="images/png/dock/notes.png" alt="">
    </li>
    <li class="li-6 li" onclick="toggleDiv('div-6')">
      <div class="name">News</div>
      <img class="ico" src="images/png/dock/news.png" alt="">
    </li>
    <li class="li-bin li-11">
      <div class="name">Trash</div>
      <img class="ico ico-bin" src="images/png/dock/trash.png" alt="">
    </li>
  </ul>
</div>
  <div class="content hidden" id="div-1"><?php include("components/apps/contact.php"); ?></div>
  <div class="content hidden" id="div-2"><?php include("components/apps/resume.php"); ?></div>
  <div class="content hidden" id="div-3"><?php include("components/apps/music.php"); ?></div>
  <div class="content hidden" id="div-4"><?php include("components/apps/settings.php"); ?></div>
  <div class="content hidden" id="div-5"><?php include("components/apps/portfolio.php"); ?></div>
  <div class="content hidden" id="div-6"><?php include("components/apps/news.php"); ?></div>
  <div class="content hidden" id="div-bin"><?php include("components/apps/.php"); ?></div>
<script src="js/dock.js"></script>
