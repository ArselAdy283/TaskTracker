<?php if (empty($tasks)): ?>
<div
    class="p-8 text-center text-gray-500 dark:text-gray-400">
    Tidak ada tugas yang tersedia.
</div>
<?php else: ?>
<div class="w-full max-w-3xl ml-0 space-y-3">
    <?php foreach ($tasks as $task): ?>
    <div class="border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden bg-white dark:bg-gray-900">

        <!-- HEADER -->
        <div
            class="flex items-center justify-between p-2 cursor-pointer task-header bg-gray-50 dark:bg-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">

            <div class="flex items-center gap-3">
                <form action="../actions/toggle_status.php" method="POST">
                    <input type="hidden" name="id" value="<?= $task['id'] ?>">
                    <input type="checkbox" onclick="event.stopPropagation()" onchange="this.form.submit()" class="w-5 h-5 rounded accent-blue-600 dark:accent-blue-500 cursor-pointer" <?= $task['status'] ? 'checked' : '' ?>>
                </form>
                <div class="flex flex-col">
                    <!-- Judul coret otomatis jika status selesai -->
                    <h3
                        class="font-medium text-lg text-gray-800 dark:text-gray-100 <?= $task['status'] == 1 ? 'line-through opacity-50' : '' ?>">
                        <?= htmlspecialchars($task['task_name']) ?>
                    </h3>
                    <p class="text-[12px] text-gray-400 dark:text-gray-600">
                        <?= htmlspecialchars($task['timestamp']) ?>
                    </p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <!-- EDIT -->
                <a href="edit-task.php?id=<?= $task['id'] ?>" onclick="event.stopPropagation()"
                    class="text-blue-300 dark:text-gray-600 hover:scale-110 transition">
                    <i class="ph-bold ph-pencil-simple text-xl"></i>
                </a>

                <!-- ARROW -->
                <i
                    class="ph-bold ph-caret-down text-blue-300 dark:text-gray-600 text-lg arrow transition-transform duration-300"></i>
            </div>
        </div>

        <!-- DETAILS -->
        <div class="task-content max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out">
            <div class="text-gray-600 dark:text-gray-300">
                <div class="ql-editor"><?= $task['task_details'] ?></div>
            </div>
        </div>

    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>