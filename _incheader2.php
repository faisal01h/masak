<?php
if($refer) {
    
} else {
    echo "ERROR: Inclusion failed. Unrefered inclusion.";
    die();
}

$assetsurl = "https://masak.faisalhanif.me/assets";
?>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="assets/favicon.ico"/>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $config;?>/css/all.css">
    <link rel="stylesheet" href="<?php echo $config;?>/vendor/css/typeset.css">
    <link rel="stylesheet" href="<?php echo $config;?>/vendor/css/blocks.css">
    <link rel="stylesheet" href="<?php echo $config;?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo $config;?>/css/aos.css">
    <?php if(isset($dark) && $dark) {
        echo '<link rel="stylesheet" href="'.$assetsurl.'/css/masak@1.21.dark.css">';
    } else {
        echo '<link rel="stylesheet" href="'.$assetsurl.'/css/masak@1.21.css">';
    }
    ?>