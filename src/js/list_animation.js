document.querySelectorAll('.task-header').forEach(header => {
    header.addEventListener('click', () => {

        const contentList = header.parentElement.querySelector('.task-content');
        const headerList = header.parentElement.querySelector('.task-header');
        const arrow = header.querySelector('.arrow');

        //BUKA
        if (contentList.classList.contains('max-h-0')) {
            contentList.classList.remove('max-h-0', 'opacity-0');
            contentList.style.maxHeight = contentList.scrollHeight + "px";
            arrow.classList.add('rotate-180');
            
            headerList.classList.add('border-b', 'border-gray-300', 'dark:border-gray-800');

        } else {
            //TUTUP
            contentList.style.maxHeight = "0px";
            arrow.classList.remove('rotate-180');

            setTimeout(() => {
                contentList.classList.add('max-h-0', 'opacity-0');
                
                headerList.classList.remove('border-b', 'border-gray-300', 'dark:border-gray-800');
            }, 500); 
        }
    });
});