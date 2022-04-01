<?php require('./views/header.php'); ?>


<div id="root" class="container"></div>

<!-- react scripts -->
<script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>

<!-- Be sure to remove this babel transformer on production -->
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

<script type="text/javascript">
    const recentSessions = <?php json_encode(require('./data/recentSessions.json')); ?>["sessions"];
</script>

<script type="text/jsx" src="./react-scripts/components/Title.js"></script>
<script type="text/jsx" src="./react-scripts/components/Sidebar.js"></script>
<script type="text/jsx" src="./react-scripts/pages/recent-sessions/RecentSessionContent.js"></script>
<script type="text/jsx" src="./react-scripts/pages/recent-sessions/App.js"></script>

<link rel="stylesheet" href="./react-scripts/global.css">
<style>
</style>

<?php require('./views/footer.php'); ?>