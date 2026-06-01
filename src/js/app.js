import Quill from 'quill';
import "quill/dist/quill.snow.css";

var toolbarOptions = [
    ["bold", "italic", "underline", "strike"], // toggled buttons
    ["blockquote", "code-block"],

    [{ header: 1 }, { header: 2 }], // custom button values
    [{ list: "ordered" }, { list: "bullet" }],
    [{ script: "sub" }, { script: "super" }], // superscript/subscript
    [{ indent: "-1" }, { indent: "+1" }], // outdent/indent
    [{ direction: "rtl" }], // text direction

    [{ size: ["small", false, "large", "huge"] }], // custom dropdown
    [{ header: [1, 2, 3, 4, 5, 6, false] }],

    [{ color: [] }, { background: [] }], // dropdown with defaults
    [{ font: [] }],
    [{ align: [] }],

    ["clean"], // remove formatting button
];

window.quill = new Quill("#editor", {
    modules: {
        toolbar: toolbarOptions,
    },
    theme: "snow",
    placeholder: "Enter Task Details..."
});

const form = document.getElementById("task-form");

form.addEventListener("submit", () => {
    document.getElementById("task-details").value =
        quill.root.innerHTML;
});