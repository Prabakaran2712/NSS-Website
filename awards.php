<?php require('./views/header.php'); ?>


<div id="root" class="container"></div>

<script type="text/javascript">
    const awards = <?php json_encode(require('./data/awards.json')); ?>["awards"];
</script>

<script type="text/jsx" src="./react-scripts/components/Title.js"></script>
<script type="text/jsx" src="./react-scripts/components/Sidebar.js"></script>
<script type="text/jsx" src="./react-scripts/pages/awards/AwardContent.js"></script>
<script type="text/jsx" src="./react-scripts/pages/awards/App.js"></script>

<link rel="stylesheet" href="./react-scripts/global.css">
<style>    
    .Award-img{
        max-width: 500px;
        display: block;
        border-radius: 10px;
        margin: 20px auto;
    }
</style>

<?php require('./views/footer.php'); ?>