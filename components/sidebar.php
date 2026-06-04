<?php

$page = $_GET['page'] ?? 'today';

function navClass(string $currentPage, string $page): string
{
    $base = 'block px-4 py-3 rounded-lg transition';
    $active = 'bg-blue-300 dark:bg-blue-950 hover:bg-blue-300 dark:hover:bg-blue-950';
    $inactive = 'hover:bg-blue-100 dark:hover:bg-gray-950';

    return $base . ' ' . ($currentPage === $page ? $active : $inactive);
}

?>

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white dark:bg-gray-900 text-black dark:text-white p-5 border-r border-gray-300 dark:border-gray-800">
        <h1 class="text-2xl font-bold mb-8">My App</h1>

        <nav>
            <ul class="space-y-2">
                <li>
                    <a href="index.php?page=today" class="<?= navClass($page, 'today') ?>">
                        Today
                    </a>
                </li>

                <li>
                    <a href="index.php?page=all" class="<?= navClass($page, 'all') ?>">
                        All Tasks
                    </a>
                </li>

                <li>
                    <a href="index.php?page=done" class="<?= navClass($page, 'done') ?>">
                        Done
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
</div>