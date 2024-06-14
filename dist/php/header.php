<header class="w-full z-10 relative opacity-0 transition duration-1000 ease-in-out">
    <div class="container">
        <div class="flex w-full">
            <div
                class="h-[40px] w-[100vw] p-8 pt-12 lg:pt-8 lg:bg-primary fixed flex justify-between items-center mx-0 lg:mx-auto lg:opacity-75 lg:border-b-2 lg:border-black">
                <!-- humburger menu start -->
                <button id="humburger-menu" name="humburger-menu"
                    class="flex flex-wrap justify-between items-center h-5 w-[30px] z-10 drop-shadow-md gap-2 lg:hidden -translate-x-[1000px] transition ease-in-out duration-500">
                    <span class="w-[30px] h-[2px] bg-[#fff] transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="w-[30px] h-[2px] transition duration-300 ease-in-out bg-[#fff]"></span>
                    <span
                        class="w-[30px] h-[2px] bg-[#fff] transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
                <!-- humburger menu end -->

                <!-- navbar menu start -->
                <div id="navbar-menu"
                    class="w-full font-Macondo absolute lg:static -top-[1000px] lg:top-0 left-0 right-0 pt-20 lg:pt-4 pb-2 bg-primary lg:bg-transparent opacity-75 flex gap-2 flex-wrap lg:flex-nowrap lg:w-1/3 mx-0 border-b-2 border-black lg:border-b-0 lg:border-transparent -translate-x-[1000px] transition-all duration-1000 ease-in-out">
                    <div class="group w-full flex justify-center hover:cursor-pointer">
                        <a href="#"
                            class="block text-center relative after:content-[''] after:block after:w-full after:h-[0.1rem] after:bg-[#fff] after:scale-x-0 after:transition-transform after:origin-center group-hover:after:scale-x-50 group-hover:text-[#fff]">
                            HOME
                        </a>
                    </div>
                    <div class="group w-full flex justify-center hover:cursor-pointer">
                        <a href="#about"
                            class="block text-center relative after:content-[''] after:block after:w-full after:h-[0.1rem] after:bg-[#fff] after:scale-x-0 after:transition-transform after:origin-center group-hover:after:scale-x-50 group-hover:text-[#fff]">
                            ABOUT
                        </a>
                    </div>
                    <div class="group w-full flex justify-center hover:cursor-pointer">
                        <a href="#education"
                            class="block text-center relative after:content-[''] after:block after:w-full after:h-[0.1rem] after:bg-[#fff] after:scale-x-0 after:transition-transform after:origin-center group-hover:after:scale-x-50 group-hover:text-[#fff]">
                            EDUCATION
                        </a>
                    </div>
                    <div class="group w-full flex justify-center hover:cursor-pointer">
                        <a href="#gallery"
                            class="block text-center relative after:content-[''] after:block after:w-full after:h-[0.1rem] after:bg-[#fff] after:scale-x-0 after:transition-transform after:origin-center group-hover:after:scale-x-50 group-hover:text-[#fff]">
                            GALLERY
                        </a>
                    </div>
                </div>
                <!-- navbar menu end -->

                <!-- profile start -->
                <div id="profile-hero"
                    class="flex justify-center items-center gap-1 z-10 translate-x-[1000px] transition ease-in-out duration-500">
                    <div id="profile-content"
                        class="flex-col opacity-0 lg:opacity-100 text-[90%] translate-x-12 lg:translate-x-0 transition duration-1000 ease-in">
                        <p class="font-Montserrat-Alternates text-black drop-shadow-sm">
                            MY BIODATA
                        </p>
                        <p class="font-Lobster-Two">Rafid Hilmi</p>
                    </div>
                    <div class="overflow-hidden rounded-full w-10 border-4 border-white shadow-md z-10">
                        <img src="src/img/brand.jpg" alt="profile-img" />
                    </div>
                </div>
                <!-- profile end -->
            </div>
        </div>
    </div>
</header>