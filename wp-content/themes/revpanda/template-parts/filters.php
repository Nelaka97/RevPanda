<?php
/**
 * Filter buttons on top of listings section
 * This is not functioning as it was not asked in the task
 */
?>

<div class="mb-6">

    <!--large screens-->
    <div class="hidden md:flex justify-center font-poppins pink-text text-base font-medium gap-3">
        <button class="flex items-center border main-border px-8 py-[14px] rounded-sm transition">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/listings/top-rated.png" alt="top-rated"
                class="h-5 w-5">
            <span class="pl-2">Top Rated</span>
        </button>
        <button class="flex items-center border main-border px-8 py-[14px] rounded-sm transition">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/listings/recently-added.png"
                alt="recently-added" class="h-5 w-5">
            <span class="pl-2">Recently Added</span>
        </button>
        <button
            class="flex items-center bg-main-pink text-white border main-border px-8 py-[14px] rounded-sm transition">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/listings/free-spins-w.png" alt="free-spins"
                class="h-5 w-5">
            <span class="pl-2">Best Free Spins</span>
        </button>
        <button class="flex items-center border main-border px-8 py-[14px] rounded-sm transition">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/listings/best-bonus.png" alt="best-bonus"
                class="h-5 w-5">
            <span class="pl-2">Best Bonus</span>
        </button>
    </div>

    <!--mobile-->
    <div class="block md:hidden max-w-[358px] mx-auto border border-[#990085] rounded-sm overflow-hidden mb-8">
        <!--toggle header-->
        <button id="sortToggle"
            class="w-full relative bg-[#FEF7F9] text-[#990085] py-3 px-4 font-semibold focus:outline-none flex items-center">

            <span class="mx-auto text-base">Sort by</span>

            <!--arrow icon-->
            <svg id="toggleArrow" xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 text-[#990085] absolute right-4 top-1/2 transform -translate-y-1/2 transition-transform duration-300"
                viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!--toc content list-->
        <ul id="sortContent"
            class="px-4 max-h-0 overflow-hidden divide-y divide-[#EDD0E8] text-center text-[#990085] font-medium text-base">
            <li class="py-3 flex justify-center"><img
                    src="<?php echo get_template_directory_uri(); ?>/src/images/listings/top-rated.png" alt="top-rated"
                    class="h-5 w-5 mr-2"> Top Rated</li>
            <li class="py-3 flex justify-center"><img
                    src="<?php echo get_template_directory_uri(); ?>/src/images/listings/recently-added.png"
                    alt="recently-added" class="h-5 w-5 mr-2"> Recently Added</li>
            <li class="py-3 flex justify-center"><img
                    src="<?php echo get_template_directory_uri(); ?>/src/images/listings/free-spins.png"
                    alt="free-spins" class="h-5 w-5 mr-2"> Best Free Spins</li>
            <li class="py-3 flex justify-center"><img
                    src="<?php echo get_template_directory_uri(); ?>/src/images/listings/best-bonus.png"
                    alt="best-bonus" class="h-5 w-5 mr-2"> Best Bonus</li>
        </ul>
    </div>

</div>

<script>
    const sortToggle = document.getElementById("sortToggle");
    const sortContent = document.getElementById("sortContent");
    const toggleArrow = document.getElementById("toggleArrow");

    let sortIsOpen = false;

    sortToggle.addEventListener("click", () => {
        sortIsOpen = !sortIsOpen;

        if (sortIsOpen) {
            sortContent.style.maxHeight = tocContent.scrollHeight + "px";
            toggleArrow.classList.remove("rotate-180");
            sortToggle.classList.add("border-b", "border-[#990085]");
        } else {
            sortContent.style.maxHeight = "0";
            toggleArrow.classList.add("rotate-180");
            sortToggle.classList.remove("border-b", "border-[#990085]");
        }
    });
</script>