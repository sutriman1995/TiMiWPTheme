<?php
/**
 * @package WordPress
 * @subpackage zh2
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

		<script type="text/javascript">
			var domainroot="sutriman.com"
			function Gsitesearch(curobj){
				curobj.q.value="site:"+domainroot+" "+curobj.qfront.value
				}

		</script>
<br><br><br>
		
<script>
  (function() {
    var cx = '012929455727499598526:2yaeukdnjls';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>

		<table style="font-family:courier new;"  id=arc>
			<?php
			$query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) as `month`, DAYOFMONTH(post_date) as `dayofmonth`, ID, post_name, post_title FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_date DESC";
			$key = md5($query);
			$cache = wp_cache_get( 'mp_archives' , 'general');
			if ( !isset( $cache[ $key ] ) ) {
			  $arcresults = $wpdb->get_results($query);
			  $cache[ $key ] = $arcresults;
			  wp_cache_add( 'mp_archives', $cache, 'general' );
			} else {
			  $arcresults = $cache[ $key ];
			}
			if ($arcresults) {
			  $last_year = 0;
			  $last_month = 0;
			  foreach ( $arcresults as $arcresult ) {
			    $year = $arcresult->year;
			    $month = $arcresult->month;
			    if ($year != $last_year) {
			      $last_year = $year;
			      $last_month = 0;
			?>
			<tr class=year><th><br /><br /><u><?php echo $arcresult->year; ?></u></th></tr>
				<?php
				    }
				    if ($month != $last_month) {
				      $last_month = $month;
				?>
			<tr class=archive><th><?php echo $wp_locale->get_month($arcresult->month); ?></th><td></td></tr>
				<?php
				    }
				?>
			<tr class=archive>
				<th><?php echo $arcresult->dayofmonth; ?></th>
				<td id=p<?php echo $arcresult->ID; ?>>
					<a href="/<?php echo $arcresult->post_name; ?>">
					<?php echo strip_tags(apply_filters('the_title', $arcresult->post_title)); ?></a>
				</td>
			</tr>
			<?php
			  }
			}
			?>
		</table>



	</div>  <!-- /end .container -->

<?php get_footer(); ?>