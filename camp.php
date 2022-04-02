<?php 
$data_path = null;
if (isset($_GET['year'])) {
    $year = $_GET['year'];
    if($year==2019){
        $data_path = './data/camps/2019/camp.json';
    } else if($year == 2022){
        $data_path = './data/camps/2022/camp.json';
    }
}
if(is_null($data_path)){
    header("location: 404.php");
}
?>
<?php require('./views/header.php');?>


<div id="root" class="container">
    <div class="my-5 text-center">
        <div class="display-3" id="loading">Fetching camp details ...</div>
    </div>
</div>

<!-- react scripts -->
<script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>

<!-- Be sure to remove this babel transformer on production -->
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

<script type="text/javascript">
    const campData = <?php json_encode(require($data_path)); ?>;
</script>

<script type="text/jsx" src="./react-scripts/components/Title.js"></script>
<script type="text/jsx" src="./react-scripts/components/Sidebar.js"></script>
<script type="text/jsx" src="./react-scripts/components/AccordionList.js"></script>
<script type="text/jsx" src="./react-scripts/pages/camps/App.js"></script>

<link rel="stylesheet" href="./react-scripts/global.css">
<style>
    #loading{
        padding-bottom: 100px;
    }
</style>

<?php require('./views/footer.php'); ?>