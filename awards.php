<?php require('./views/header.php'); ?>


<div id="root" class="container"></div>

<!-- react scripts -->
<script src="https://unpkg.com/react@17/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js" crossorigin></script>

<!-- Be sure to remove this babel transformer on production -->
<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

<script type="text/javascript">
    const awards = <?php json_encode(require('./data/awards.json')); ?>["awards"];
</script>

<script type="text/jsx" src="./react-scripts/awards/components/Title.js"></script>
<script type="text/jsx" src="./react-scripts/awards/components/Sidebar.js"></script>
<script type="text/jsx" src="./react-scripts/awards/components/Content.js"></script>
<script type="text/jsx" src="./react-scripts/awards/App.js"></script>

<style>
    .activeAward{
        color: grey;
        cursor: text !important;
    }
    .activeAward:hover{
        color: grey;
    }
    .inactiveAward{
        color: #303983;
    }
    .inactiveAward:hover {
        font-size: 17px;
    }
    .Award-img{
        max-width: 500px;
        display: block;
        border-radius: 10px;
        margin: 20px auto;
    }
    .awards-list{
        text-align: left;
        list-style-type: none;
    }
    .awards-list li{
        margin: 20px auto;
        cursor: pointer;
    }
</style>

<?php require('./views/footer.php'); ?>