<?php

 function delete_domain_from_attachment_url( $url ) {
 
 if ( preg_match( '/^http(s)?:\/\/[^\/\s]+(.*)$/', $url, $match ) ) {
 $url = $match[2];
 }
 return $url;
}
 
add_filter( 'wp_get_attachment_url', 'delete_domain_from_attachment_url' );

?>