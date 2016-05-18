<?php foreach ( get('site.maps') as $id => $map ): ?>
.google-map-<?php echo $id; ?> {
    height: <?php echo $map['style']['height']; ?>;
}
<?php endforeach; ?>
