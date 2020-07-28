<script type="text/javascript">
    let view = '<?=$view?>';
    if (screen.width <= 699) {
        if(view !== 'mobile'){
            document.location = "mobileVersion.php";
        }
    } else {
        if(view !== 'desktop'){
            document.location = "index.php"
        }
    }
</script>