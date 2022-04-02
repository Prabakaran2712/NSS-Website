<?php 
    require('./views/header.php');
    $session_data_path = './data/sessionDetails';
?>


<div id="root" class="container"></div>

<!-- react scripts -->
<script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>

<!-- Be sure to remove this babel transformer on production -->
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

<script type="text/javascript">
    const sessionsList = <?php json_encode(require('./data/sessions.json')); ?>["sessions"];
    const sessionData = {
            "Inagural functions": <?php json_encode(require $session_data_path.'/inagurals.json'); ?>,
            "Awareness sessions": <?php json_encode(require $session_data_path.'/awareness.json'); ?>,
            "NGO sessions": <?php json_encode(require $session_data_path.'/ngo.json'); ?>,
            "Competitions": <?php json_encode(require $session_data_path.'/competitions.json'); ?>,
            "Interactive sessions": <?php json_encode(require $session_data_path.'/interactive.json'); ?>,
            "Celebrations": <?php json_encode(require $session_data_path.'/celebrations.json'); ?>,
            "Cleaning sessions": <?php json_encode(require $session_data_path.'/cleaning.json'); ?>,
            "Other sessions": <?php json_encode(require $session_data_path.'/others.json'); ?>,
        };
</script>

<script type="text/jsx" src="./react-scripts/components/Title.js"></script>
<script type="text/jsx" src="./react-scripts/components/Sidebar.js"></script>
<script type="text/jsx" src="./react-scripts/components/AccordionList.js"></script>
<script type="text/jsx" src="./react-scripts/pages/sessions/App.js"></script>

<link rel="stylesheet" href="./react-scripts/global.css">
<style>
</style>

<?php require('./views/footer.php'); ?>