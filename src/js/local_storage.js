document.addEventListener("DOMContentLoaded", () => {

    const taskName = document.getElementById("task-name");
    const taskDetails = document.getElementById("task-details");
    const form = document.getElementById("task-form");
    const cancelBtn = document.getElementById("cancel-btn");

    // Restore Task Name
    const savedTaskName = localStorage.getItem("task_name");
    if (savedTaskName) {
        taskName.value = savedTaskName;
    }

    // Restore Quill Content
    const savedTaskDetails = localStorage.getItem("task_details");
    if (savedTaskDetails && window.quill) {
        quill.root.innerHTML = savedTaskDetails;
    }

    // Auto Save Task Name
    taskName.addEventListener("input", () => {
        localStorage.setItem(
            "task_name",
            taskName.value
        );
    });

    // Auto Save Quill Content
    quill.on("text-change", () => {
        localStorage.setItem(
            "task_details",
            quill.root.innerHTML
        );
    });

    // Submit Form
    form.addEventListener("submit", () => {

        taskDetails.value = quill.root.innerHTML;

        localStorage.removeItem("task_name");
        localStorage.removeItem("task_details");
    });

    // Cancel
    cancelBtn.addEventListener("click", () => {

        localStorage.removeItem("task_name");
        localStorage.removeItem("task_details");

        history.back();
    });

});