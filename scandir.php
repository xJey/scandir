<!-- PHP -->
    <?php 
        $works = scandir('img/work/');
        $works = array_splice($works,2);
        $works = json_encode($works);
    ?>
<!-- JavaScript -->
    <script>var_works = '<?php echo $works ?>'</script>
    <script>
        var works = eval(var_works);
    </script>
