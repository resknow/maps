<?php foreach ( get('site.maps') as $id => $map ): ?>
.google-map-<?php echo $id; ?> {
    <?php foreach ( $map['style'] as $selector => $value ) {
        printf( '%s: %s;', $selector, $value ) . PHP_EOL;
    } ?>
}
<?php endforeach; ?>
