<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculties Online</title>
    <link rel="stylesheet" href="<?= base_url('public/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/main.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('public/img/logo.jpeg') ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <nav>
        <div class="flex justify-between items-center py-4 px-[50px] bg-slate-200">
            <div>
                <a href="<?= base_url() ?>"> <img src="<?= base_url('public/img/logo.jpeg') ?>" class="w-[60px]" /></a>
            </div>
            <div class="pl-[15rem] hidden xl:flex">
                <ul class="flex gap-4">
                    <li class="px-2 border-r-2 border-[#535353]">FIND TUTOR PROFILE</li>
                    <li class="px-2 border-r-2 border-[#535353] cursor-pointer" onclick="showPopup()">REQUEST A TUTOR</li>
                    <li class="px-2 border-r-2 border-[#535353]">FIND TUTOR JOB</li>
                    <li class="px-2">RESOURCES</li>
                </ul>
            </div>
            <div class="flex gap-4">
                <button class="bg-primary py-2 px-4 rounded-md text-white text-base font-semibold">SINGUP AS TEACHER</button>
                <button class="border-2 border-primary text-primary py-2 px-4 rounded-md text-base font-semibold">LOGIN</button>
            </div>
        </div>
    </nav>

    <!-- Popup Form -->
    <div id="popup" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white w-full max-w-lg rounded-lg shadow-lg p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold">Request a Tutor <span class="text-sm text-gray-500">(Post Account/Login)</span></h2>
                <button class="text-gray-400 hover:text-gray-600 focus:outline-none" onclick="closePopup()">&times;</button>
            </div>

            <form class="mt-4 grid grid-cols-2 gap-4">
                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category*</label>
                    <input type="text" id="category" name="category" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter category" required>
                </div>

                <!-- Sub-Category -->
                <div>
                    <label for="subcategory" class="block text-sm font-medium text-gray-700">Sub-Category*</label>
                    <input type="text" id="subcategory" name="subcategory" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter sub-category" required>
                </div>

                <!-- Full Name -->
                <div>
                    <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name*</label>
                    <input type="text" id="fullname" name="fullname" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter full name" required>
                </div>

                <!-- Mode -->
                <div>
                    <label for="mode" class="block text-sm font-medium text-gray-700">Mode*</label>
                    <input type="text" id="mode" name="mode" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter mode" required>
                </div>

                <!-- Schedule Date -->
                <div>
                    <label for="schedule-date" class="block text-sm font-medium text-gray-700">Schedule Date*</label>
                    <input type="date" id="schedule-date" name="schedule-date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Mobile Number -->
                <div class="flex flex-col">
                    <label for="mobile-number" class="block text-sm font-medium text-gray-700">Mobile Number*</label>
                    <div class="flex items-center gap-2">
                        <input type="tel" id="mobile-number" name="mobile-number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter mobile number" required>
                        <button type="button" class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md shadow-sm hover:bg-blue-600 focus:outline-none">Verify</button>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-span-2">
                    <label for="description" class="block text-sm font-medium text-gray-700">Describe*</label>
                    <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Provide details" required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="col-span-2">
                    <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-md shadow-sm hover:bg-blue-600 focus:outline-none">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

    <header>
        <div
            class="h-[80vh] bg-cover bg-center bg-no-repeat relative flex items-center justify-center"
            style="background-image: url('<?= base_url('public/img/header_image.webp') ?>');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/50"></div>

            <!-- Content Wrapper -->
            <div class="relative z-10 flex flex-col items-center gap-6 text-center px-4">
                <!-- Text Content -->
                <div class="max-w-6xl">
                    <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-4">
                        Upgrade Your Skills with Faculties Online
                    </h1>

                </div>

                <!-- Search Bar -->
                <div
                    class="flex items-center gap-4 bg-white rounded-full py-2 px-4 shadow-lg">
                    <!-- Search Input -->
                    <div class="flex items-center gap-2 border-r border-gray-300 pr-4">
                        <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                        <input
                            type="text"
                            placeholder="Search course here..........."
                            class="focus:outline-none text-gray-600 placeholder-gray-400" />
                    </div>

                    <!-- Select Category -->
                    <div class="flex items-center gap-2 border-r border-gray-300 pr-4">
                        <i class="fa-solid fa-border-all text-gray-400"></i>
                        <select
                            class="focus:outline-none text-gray-600 placeholder-gray-400 bg-transparent">
                            <option value="">Select Category......</option>
                            <option value="online">Online</option>
                            <option value="offline">Offline</option>
                        </select>
                    </div>

                    <!-- Button -->
                    <button
                        class="bg-primary text-white font-semibold px-4 py-2 rounded-full hover:bg-blue-600 transition-all">
                        Find Course
                    </button>
                </div>





            </div>


            <div class="bg-[#0077FE8C] grid grid-cols-5 w-full h-[150px] absolute bottom-0 left-0 right-0 z-10">
                <div class="border-r-2 border-white"></div>
                <div class="border-r-2 border-white"></div>
                <div class="border-r-2 border-white"></div>
                <div class="border-r-2 border-white"></div>
                <div></div>
            </div>

        </div>
    </header>

    <!-- Explore Categories start -->

    <section class="bg-white p-basepading pt-[10px] w-full relative">
        <h1 class="text-base4x text-black font-semibold w-fit m-auto">Top Subject & Skills</h1>
        <div class="grid grid-cols-5 my-4">
            <div class="m-auto">
                <ul class="flex flex-col justify-center items-center gap-2">
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Academic Writing</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Commerce</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">French Language</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Academic Writing</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">.net</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Jquery & Javascript </li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">C#</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">iOS App </li>
                </ul>
            </div>
            <div class="m-auto">
                <ul class="flex flex-col justify-center items-center gap-2">
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Academic Writing</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Commerce</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">French Language</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Academic Writing</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">.net</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Jquery & Javascript </li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">C#</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">iOS App </li>
                </ul>
            </div>
            <div class="m-auto">
                <ul class="flex flex-col justify-center items-center gap-2">
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Academic Writing</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Commerce</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">French Language</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Academic Writing</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">.net</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Jquery & Javascript </li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">C#</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">iOS App </li>
                </ul>
            </div>
            <div class="m-auto">
                <ul class="flex flex-col justify-center items-center gap-2">
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Academic Writing</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Commerce</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">French Language</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Academic Writing</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">.net</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Jquery & Javascript </li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">C#</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">iOS App </li>
                </ul>
            </div>
            <div class="m-auto">
                <ul class="flex flex-col justify-center items-center gap-2">
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Academic Writing</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Commerce</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">French Language</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Academic Writing</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">.net</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">Jquery & Javascript </li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">C#</li>
                    <li class="text-base text-gray-600 font-semibold hover:text-[#0077FE] cursor-pointer w-fit">iOS App </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Explore Categories end -->

    <!-- How it Works! start -->

    <!-- <section class="bg-[#EFF6FF;] p-basepading">

        <div class="flex gap-[150px] justify-center items-center">
            <div class="flex flex-col gap-4 justify-start">
                <h1 class="text-base4x text-black font-semibold">How it Works!</h1>
                <p class="text-base font-medium text-gray-400">Step by Step Mentorship Guidanace</p>
                <button class="bg-primary text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 transition-all w-fit">Find The Mentors</button>
            </div>
            <div>
                <img src="<?= base_url('public/img/how_it_works_banner.png') ?>" class="rounded-md w-[70vw]" />
            </div>
        </div>

        <div class="grid grid-cols-4 gap-4 pt-[70px]">
            <div class='border-2 bg-white rounded-md flex flex-col justify-center items-center px-6 py-4'>
                <div class="w-[60px] h-[60px] bg-[#E5F5E6] rounded-full flex justify-center items-center"><i class="fa-solid fa-user-plus text-[#31e93c] text-base2x"></i></div>
                <p class="text-base2x font-semibold">Sing in</p>
                <p class="text-base text-gray-400">Contrary to popular belief, Lorem Ipsum is not
                    simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, </p>
            </div>

            <div class='border-2 bg-white rounded-md flex flex-col justify-center items-center px-6 py-4'>
                <div class="w-[80px] h-[80px] bg-[#F1E6FD] rounded-full flex justify-center items-center"><i class="fa-solid fa-user text-[#984cea] text-base2x"></i></div>
                <p class="text-base2x font-semibold">Profile</p>
                <p class="text-base text-gray-400">Contrary to popular belief, Lorem Ipsum is not
                    simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, </p>
            </div>

            <div class='border-2 bg-white rounded-md flex flex-col justify-center items-center px-6 py-4'>
                <div class="w-[80px] h-[80px] bg-[#E5F7FD] rounded-full flex justify-center items-center"><i class="fa-solid fa-credit-card text-[#3ebce6] text-base2x"></i></div>
                <p class="text-base2x font-semibold">Buy Credit</p>
                <p class="text-base text-gray-400">Contrary to popular belief, Lorem Ipsum is not
                    simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, </p>
            </div>

            <div class='border-2 bg-white rounded-md flex flex-col justify-center items-center px-6 py-4'>
                <div class="w-[80px] h-[80px] bg-[#FFF4E7] rounded-full flex justify-center items-center"><i class="fa-solid fa-user-tie text-[#e99329] text-base2x"></i></div>
                <p class="text-base2x font-semibold">Find Mentor</p>
                <p class="text-base text-gray-400">Contrary to popular belief, Lorem Ipsum is not
                    simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, </p>
            </div>
        </div>

    </section> -->

    <!-- How it Works! end -->

    <!-- What we do start -->

    <section class="p-basepading">

        <!-- <div class="flex justify-around m-auto gap-4 bg-[#FFD400] rounded-full mb-[4rem] py-6 w-[70%]">
            <div class="flex items-center gap-2">
                <div class="w-[50px] h-[50px] rounded-full bg-white"></div>
                <div>
                    <p class="text-base4x text-black font-semibold">3K</p>
                    <p class="text-base text-black font-semibold">Successfully Trained</p>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <div class="w-[50px] h-[50px] rounded-full bg-white"></div>
                <div>
                    <p class="text-base4x text-black font-semibold">15K</p>
                    <p class="text-base text-black font-semibold">Classes Completed</p>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <div class="w-[50px] h-[50px] rounded-full bg-white"></div>
                <div>
                    <p class="text-base4x text-black font-semibold">97K</p>
                    <p class="text-base text-black font-semibold">Satisfaction Rate</p>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <div class="w-[50px] h-[50px] rounded-full bg-white"></div>
                <div>
                    <p class="text-base4x text-black font-semibold">105K</p>
                    <p class="text-base text-black font-semibold">Students Commnity</p>
                </div>
            </div>

        </div> -->

        <div class="grid grid-cols-2 justify-around">
            <div class="w-[60%] flex flex-col justify-center m-auto">
                <h1 class="text-base4x font-semibold text-black">What we do ?</h1>
                <p class="text-base text-gray-500 font-medium">It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout. The
                    point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content
                    here', making it look like readable English. Many desktop publishing
                    packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search for 'lorem ipsum' will uncover
                    many web sites still in their infancy.</p>
                <div class="flex gap-4 mt-2">
                    <button class="bg-primary text-white font-semibold px-6 py-1 rounded-md hover:bg-blue-600 transition-all flex justify-center items-center w-fit">REQUEST A TUTOR</button>
                    <button class="border-2 border-primary text-primary py-2 px-4 rounded-md text-base font-semibold w-fit">LOGIN</button>
                </div>
            </div>
            <div class="m-auto">
                <img src="<?= base_url('public/img/what_we_do.webp') ?>" />
            </div>
        </div>

    </section>

    <!-- What we do end -->


    <!-- contact us banner start  -->

    <section class="relative w-full h-auto mb-[100px]">
        <!-- Background Image -->
        <div class="relative">
            <img
                class="w-full h-[300px] object-cover"
                src="<?= base_url('public/img/contact_us_banner.png') ?>"
                alt="Contact Us Banner" />
        </div>

        <!-- Content Section -->
        <div class="absolute inset-0 flex justify-between items-center px-8 py-16">
            <!-- Left Text Content -->
            <div class="max-w-2xl">
                <h1 class="text-base text-white font-semibold leading-tight">
                    Faculties Online-
                </h1>
                <p class="text-base2x text-white font-medium my-4">
                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old.
                </p>

                <button class="bg-primary text-white font-semibold px-6 py-1 rounded-md hover:bg-blue-600 transition-all flex justify-center items-center w-fit">Contact us</button>
            </div>

            <!-- Right Image -->
            <div class="absolute top-[0px] right-0">
                <img
                    class="w-[660px] h-auto"
                    src="<?= base_url('public/img/contact_us_banner_inner_img.webp') ?>"
                    alt="Inner Banner Image" />
            </div>
        </div>
    </section>


    <!-- contact us banner end  -->

    <!-- Footer start  -->

    <footer class="bg-[#0077FE] p-basepading grid xl:grid-cols-5 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
        <div class="flex flex-col gap-3">
            <h1 class="text-base2x text-white font-semibold">Faculties Online </h1>
            <p class="text-base font-medium text-white max-w-xs">Let’s Show You Various Class Promos
                and Various Intersting Program for you</p>

            <div class="bg-white flex justify-between py-1 px-2 w-full rounded-md">
                <input class="w-[60%] focus:outline-none placeholder:text-gray-400 text-gray-600 placeholder-gray-400" placeholder="Email Address.............." />
                <button class="bg-primary text-white font-semibold px-6 py-1 rounded-md hover:bg-blue-600 transition-all flex justify-center m-auto">Submit</button>
            </div>
        </div>


        <div>
            <h1 class="text-base2x font-semibold text-white">Company</h1>
            <ul class="list-none flex flex-col gap-2">
                <li class="text-base font-medium text-white">Home</li>
                <li class="text-base font-medium text-white">About Us</li>
                <li class="text-base font-medium text-white">Tutor’s</li>
                <li class="text-base font-medium text-white">Category</li>
                <li class="text-base font-medium text-white">Contact Us</li>
            </ul>
        </div>
        <div>
            <h1 class="text-base2x font-semibold text-white">Company</h1>
            <ul class="list-none flex flex-col gap-2">
                <li class="text-base font-medium text-white">Home</li>
                <li class="text-base font-medium text-white">About Us</li>
                <li class="text-base font-medium text-white">Tutor’s</li>
                <li class="text-base font-medium text-white">Category</li>
                <li class="text-base font-medium text-white">Contact Us</li>
            </ul>
        </div>
        <div>
            <h1 class="text-base2x font-semibold text-white">Company</h1>
            <ul class="list-none flex flex-col gap-2">
                <li class="text-base font-medium text-white">Home</li>
                <li class="text-base font-medium text-white">About Us</li>
                <li class="text-base font-medium text-white">Tutor’s</li>
                <li class="text-base font-medium text-white">Category</li>
                <li class="text-base font-medium text-white">Contact Us</li>
            </ul>
        </div>
        <div>
            <h1 class="text-base2x font-semibold text-white">Company</h1>
            <ul class="list-none flex flex-col gap-2">
                <li class="text-base font-medium text-white">Home</li>
                <li class="text-base font-medium text-white">About Us</li>
                <li class="text-base font-medium text-white">Tutor’s</li>
                <li class="text-base font-medium text-white">Category</li>
                <li class="text-base font-medium text-white">Contact Us</li>
            </ul>
        </div>

    </footer>

    <!-- Footer end -->


    <script>
        function showPopup() {
            document.getElementById('popup').style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }
    </script>

</body>

</html>