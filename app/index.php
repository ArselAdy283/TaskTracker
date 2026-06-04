<?php

$page = $_GET['page'] ?? 'today';

?>

<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker</title>
    <link rel="stylesheet" href="../src/css/output.css">
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/bold/style.css" />
</head>

<body class="bg-white dark:bg-gray-950">

    <?php include '../components/appbar.php'; ?>

    <div class="flex min-h-screen">

        <?php include '../components/sidebar.php'; ?>

        <!-- CONTENT -->
        <main class="flex p-8 pt-23 w-300">
            <?php

            switch ($page) {
                case 'today':
                    include '../components/read_today.php'; 
                    break;

                case 'all':
                    include '../components/read_all.php';
                    break;

                case 'done':
                    include '../components/read_done.php';
                    break;

                default:
                    include '../components/read_all.php';
                    break;
            }

            ?>
            <button
                onclick="window.location.href = 'create-task.php'"
                class="fixed bottom-10 right-10 w-20 h-20 rounded-2xl bg-blue-300 dark:bg-blue-950 text-black dark:text-white border border-gray-300 dark:border-gray-800 hover:scale-110 transition cursor-pointer">
                <i class="ph-bold ph-plus text-2xl"></i>
            </button>
        </main>
    </div>
    <script type="module" src="http://localhost:5173/src/js/app.js"></script>
    <script src="../src/js/theme_toggle.js"></script>
    <script src="../src/js/list_animation.js"></script>

</body>

</html>