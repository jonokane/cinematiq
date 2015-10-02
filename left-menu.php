<ul class="nav">
          <li class="<?php echo ($page == "media" ? "active" : "")?>"><a href="pg-media_bucket.php"><span class="ss-icon label-ico">filmroll</span>Media</a></li>
          <li class="<?php echo ($page == "venue" ? "active dropdown" : "")?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="ss-icon label-ico">theatre</span>Venues <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="chinese-theater.php">Chinese Theater (2 playlits)</a></li>
                <li><a href="#">Bravo Theater (6 playlists)</a></li>
                <li><a href="#">Century 21 (11 playlists)</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Admin</li>
                <li><a href="#">Create new venue...</a></li>
              </ul>
            </li>
        </ul>