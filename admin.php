<?php
    session_start();
    require('./views/config.php');
    if (!isset($_SESSION['user']))
    {
        header("location: 403.php");
    }
    else
    {
        // check if user is admin
        $user = $_SESSION['user'];
        $is_admin_sql = "SELECT isAdmin FROM users WHERE username='$user'";
        $is_admin_result = mysqli_query($con, $is_admin_sql);
        $is_admin_val = mysqli_fetch_row($is_admin_result)[0];
        if ($is_admin_val == 0)
        {
            header("location: 403.php");
        }
    }

    // select messages
    $messages_sql = "SELECT * FROM messages ORDER BY timestamp DESC";
    $messages_result = mysqli_query($con, $messages_sql);
    $messages = json_encode(mysqli_fetch_all($messages_result, MYSQLI_ASSOC));

    // select analytics
    $analytics_sql = "SELECT * FROM analytics ORDER BY loggedAt DESC";
    $analytics_res = mysqli_query($con, $analytics_sql);
    $analytics = json_encode(mysqli_fetch_all($analytics_res, MYSQLI_ASSOC));

    require('./views/header.php');

?>

<div id="root" class="container"></div>

<script type="text/javascript">
    const initMessages = <?php echo $messages; ?>;
    const analytics = <?php echo $analytics; ?>;
</script>

<script type="text/jsx" src="./react-scripts/components/Title.js"></script>
<script type="text/jsx" src="./react-scripts/components/Sidebar.js"></script>
<script type="text/jsx" src="./react-scripts/pages/admin/messages/MessageBody.js"></script>
<script type="text/jsx" src="./react-scripts/pages/admin/messages/MessageList.js"></script>
<script type="text/jsx" src="./react-scripts/pages/admin/messages/MessageCard.js"></script>
<script type="text/jsx" src="./react-scripts/pages/admin/messages/NoMessages.js"></script>
<script type="text/jsx" src="./react-scripts/pages/admin/messages/ReadCheckBox.js"></script>
<script type="text/jsx" src="./react-scripts/pages/admin/analytics/AnalyticsBody.js"></script>
<script type="text/jsx" src="./react-scripts/pages/admin/analytics/VisitCount.js"></script>
<script type="text/jsx" src="./react-scripts/pages/admin/analytics/AnalyticsTable.js"></script>
<script type="text/jsx" src="./react-scripts/pages/admin/analytics/RowCount.js"></script>
<script type="text/jsx" src="./react-scripts/pages/admin/analytics/Pagination.js"></script>
<script type="text/jsx" src="./react-scripts/pages/admin/App.js"></script>

<link rel="stylesheet" href="./react-scripts/global.css">

   
<?php

//footer file
require('./views/footer.php');

?>