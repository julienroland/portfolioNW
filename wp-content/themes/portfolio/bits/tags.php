<footer>
  <p>Tags:
      <?php
      $posttags = get_the_tags();
      if ($posttags) {
        foreach($posttags as $tag) { 
           echo '<a class="radius label" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a> ';
        }
      }
      ?>
  </p>
</footer>