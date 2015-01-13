<?php
$userID = get_the_author_meta( 'ID' );
$first_name = get_the_author_meta( 'first_name', $userID );
$last_name = get_the_author_meta( 'last_name', $userID );
$full_name = "${first_name} ${last_name}";
?>
<?php echo get_avatar( $userID, 70, '', $full_name ); ?>
<h4><?php echo $full_name; ?></h4>
<p><?php echo the_author_meta( 'description' ); ?></p>
<div class="text-left">
	<?php echo social_author( $userID ); ?>
</div>