<!DOCTYPE html>
<html lang="en">
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
    <main class="flex flex-col items-center justify-center pt-20">
        <div class="flex flex-col items-center justify-center">
            <label for="task-name" class="text-black dark:text-white text-2xl font-bold m-5 w-200">Task Name</label>
            <input id="task-name" name="task-name" type="text" placeholder="Enter Task Name..." class="placeholder:italic placeholder:text-sm dark:placeholder:text-gray-500 text-black dark:text-white bg-white dark:bg-gray-900 h-10 w-200 p-5 border border-gray-300 dark:border-gray-800 rounded-2xl">
        </div>
        <div class="flex flex-col items-center justify-center">
            <label class="text-black dark:text-white text-left text-2xl font-bold m-5 w-200">Task Details</label>
            <div class="bg-white dark:bg-gray-900 w-200 h-70 rounded-2xl overflow-hidden flex flex-col">
                <div id="editor"></div>
            </div>
        </div>
        <div class="flex w-200 flex-row-reverse gap-5 m-10">
            <button class="bg-blue-300 dark:bg-blue-950 text-black dark:text-white p-2 w-30 rounded-2xl border border-gray-300 dark:border-gray-800 hover:scale-110 transition cursor-pointer">Save</button>
            <button class="bg-gray-200 dark:bg-gray-900 text-black dark:text-white p-2 w-30 rounded-2xl border border-gray-300 dark:border-gray-800 hover:scale-110 transition cursor-pointer">Cancel</button>
        </div>
    </main>

    <script type="module" src="http://localhost:5173/src/js/app.js"></script>
    <script src="../src/js/theme_toggle.js"></script>
</body>
</html>