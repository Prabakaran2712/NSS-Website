<?php require('./views/header.php'); ?>
<?php
    $expandWeb = false;
    if(isset($_GET['expand-web'])){
        $expandWeb = true;
    }
?>


<div id="root" class="container"></div>


<script type="text/javascript">
    const incharges = <?php json_encode(require('./data/incharges.json')); ?>;
    const designTeam = <?php json_encode(require('./data/designTeam.json')); ?>;
    const expandWeb = <?php echo $expandWeb ? "true" : "false" ?>;
</script>

<script type="text/jsx" src="./react-scripts/components/Title.js"></script>
<script type="text/jsx" src="./react-scripts/components/Sidebar.js"></script>
<script type="text/jsx" src="./react-scripts/pages/incharges/Accordion.js"></script>
<script type="text/jsx" src="./react-scripts/pages/incharges/App.js"></script>

<link rel="stylesheet" href="./react-scripts/global.css">
<style>
</style>

<?php require('./views/footer.php'); ?>