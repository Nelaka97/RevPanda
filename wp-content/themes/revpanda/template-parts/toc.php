<?php
/**
 * Table of contents toggle (functioning with dummy data)
 */
?>

<div class="max-w-[358px] sm:max-w-[1120px] mx-auto border main-border rounded-sm overflow-hidden mb-8 sm:mb-10">
    <!--toggle header-->
    <button id="tocToggle"
        class="w-full h-[48px] flex items-center justify-between sm:justify-center gap-2 relative bg-main pink-text py-3 px-4 font-bold focus:outline-none">
        <!--table of content icon -->
        <svg class="h-5 w-5 pink-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <g stroke-width="2" stroke-linecap="square">
                <path d="M4 6h14" />
                <circle cx="22" cy="6" r="0.3" />
                <path d="M4 12h14" />
                <circle cx="22" cy="12" r="0.3" />
                <path d="M4 18h14" />
                <circle cx="22" cy="18" r="0.3" />
            </g>
        </svg>

        <span class="text-base font-bold ml-0.5">Table of Content</span>

        <!--arrow icon-->
        <svg id="arrowIcon" xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 font-extrabold pink-text transform transition-transform duration-300" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <!--toc content list-->
    <ul id="tocContent" class="px-4 max-h-0 overflow-hidden divide-y divide-[#EDD0E8] text-left sm:text-center text-sm text-black">
        <li class="py-3">• <span class="ml-2">Best Brands of 2024</span></li>
        <li class="py-3">• <span class="ml-2">Best Brands of 2024</span></li>
        <li class="py-3">• <span class="ml-2">Best Brands of 2024</span></li>
        <li class="py-3">• <span class="ml-2">Best Brands of 2024</span></li>
        <li class="py-3">• <span class="ml-2">Best Brands of 2024</span></li>
        <li class="py-3">• <span class="ml-2">Best Brands of 2024</span></li>
        <li class="py-3">• <span class="ml-2">Best Brands of 2024</span></li>
    </ul>
</div>

<script>
    const toggleBtn = document.getElementById("tocToggle");
    const tocContent = document.getElementById("tocContent");
    const arrowIcon = document.getElementById("arrowIcon");

    let isOpen = false;

    toggleBtn.addEventListener("click", () => {
        isOpen = !isOpen;

        if (isOpen) {
            tocContent.style.maxHeight = tocContent.scrollHeight + "px";
            arrowIcon.classList.add("rotate-180");
            toggleBtn.classList.add("border-b", "border-[#990085]");
        } else {
            tocContent.style.maxHeight = "0";
            arrowIcon.classList.remove("rotate-180");
            toggleBtn.classList.remove("border-b", "border-[#990085]");
        }
    });
</script>