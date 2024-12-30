<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Tutor</title>
    <link rel="stylesheet" href="<?= base_url('public/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/main.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('public/img/logo.jpeg') ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <nav class="relative">

        <div class="bg-[#0077FE] py-4 text-white text-center">
            <p>FACULTIES ONLINE</p>
        </div>
        <div class="absolute top-5 left-6 ">
            <a href="<?= base_url() ?>"> <img src="<?= base_url('public/img/logo.jpeg') ?>" class="w-[60px]" /></a>
        </div>
        <div class="flex justify-between items-center py-4 px-[50px] bg-slate-200">
            <div></div>
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
                <button class="text-gray-400 hover:text-gray-600 focus:outline-none text-[25px]" onclick="closePopup()">&times;</button>
            </div>

            <form class="mt-4 grid grid-cols-2 gap-4">
                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category*</label>
                    <input type="text" id="category" name="category" class="mt-1 py-2 px-4 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter category" required>
                </div>

                <!-- Sub-Category -->
                <div>
                    <label for="subcategory" class="block text-sm font-medium text-gray-700">Sub-Category*</label>
                    <input type="text" id="subcategory" name="subcategory" class="mt-1 py-2 px-4 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter sub-category" required>
                </div>

                <!-- Full Name -->
                <div>
                    <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name*</label>
                    <input type="text" id="fullname" name="fullname" class="mt-1 py-2 px-4 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter full name" required>
                </div>

                <!-- Mode -->
                <div>
                    <label for="mode" class="block text-sm font-medium text-gray-700">Mode*</label>
                    <input type="text" id="mode" name="mode" class="mt-1 py-2 px-4 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter mode" required>
                </div>

                <!-- Schedule Date -->
                <div>
                    <label for="schedule-date" class="block text-sm font-medium text-gray-700">Schedule Date*</label>
                    <input type="date" id="schedule-date" name="schedule-date" class="mt-1 py-2 px-4 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <!-- Mobile Number -->
                <div class="flex flex-col">
                    <label for="mobile-number" class="block text-sm font-medium text-gray-700">Mobile Number*</label>
                    <div class="flex items-center gap-2">
                        <input type="tel" id="mobile-number" name="mobile-number" class="mt-1 py-2 px-4 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter mobile number" required>
                        <button type="button" class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md shadow-sm hover:bg-blue-600 focus:outline-none">Verify</button>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-span-2">
                    <label for="description" class="block text-sm font-medium text-gray-700">Describe*</label>
                    <textarea id="description" name="description" rows="4" class="mt-1 py-2 px-4 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Provide details" required></textarea>
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
            class="h-auto bg-cover bg-center bg-no-repeat relative flex items-center justify-center"
            style="background-image: url('<?= base_url('public/img/tutor_header_image.webp') ?>');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/50"></div>

            <!-- Content Wrapper -->
            <div class="relative z-10 flex flex-col items-center gap-6 text-center px-4 my-10">
                <!-- Text Content -->
                <div class="max-w-6xl">
                    <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-4">
                        Search Tutor Here
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
        </div>
    </header>


    <section class="flex gap-12 p-basepading">
        <!-- Mentors List Section -->
        <div>
            <!-- Filter Section -->
            <div class="flex items-center gap-4 my-4">
                <h1 class="text-base4x text-black font-semibold"><?= $totalResults ?> Mentor<?= $totalResults > 1 ? 's' : '' ?> Available - </h1>
                <div>
                    <form method="get" class="flex gap-4">
                        <!-- Preserve existing query parameters except for 'sort' and 'orderBy' -->
                        <?php foreach ($queryParams as $key => $value): ?>
                            <?php if (!in_array($key, ['sort', 'orderBy'])): ?>
                                <input type="hidden" name="<?= esc($key) ?>" value="<?= esc($value) ?>">
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <!-- Sort dropdown -->
                        <select
                            name="sort"
                            class="p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                            onchange="this.form.submit()"
                            aria-label="Sort mentors by">
                            <option value="popular" <?= $currentSort === 'popular' ? 'selected' : '' ?>>Popular</option>
                            <option value="price" <?= $currentSort === 'price' ? 'selected' : '' ?>>Price</option>
                            <option value="rating" <?= $currentSort === 'rating' ? 'selected' : '' ?>>Rating</option>
                        </select>

                        <!-- Order dropdown -->
                        <select
                            name="orderBy"
                            class="p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                            onchange="this.form.submit()"
                            aria-label="Order by ascending or descending">
                            <option value="ASC" <?= $currentOrderBy === 'ASC' ? 'selected' : '' ?>>Ascending</option>
                            <option value="DESC" <?= $currentOrderBy === 'DESC' ? 'selected' : '' ?>>Descending</option>
                        </select>
                    </form>
                </div>
            </div>


            <!-- Mentor Cards -->
            <div class="flex flex-col w-[65vw] gap-6">
                <?php if (!empty($mentors)): ?>
                    <?php foreach ($mentors as $mentor): ?>
                        <article class="bg-gray-100 hover:bg-[#0077FE] hover:text-white hover:cursor-pointer shadow-md rounded-lg p-6 flex flex-col group">
                            <div class="flex items-center gap-4">
                                <img
                                    src="<?= base_url('public/img/' . esc($mentor['image'])) ?>"
                                    alt="<?= esc($mentor['name']) ?>'s profile image"
                                    class="w-24 h-24 rounded-md object-cover" />
                                <div class="flex flex-col">
                                    <h2 class="text-xl font-semibold text-gray-800 group-hover:text-white"><?= esc($mentor['name']) ?></h2>
                                    <h2 class="text-lg text-gray-800 group-hover:text-white"><?= esc($mentor['subjects']) ?></h2>
                                    <p class="text-sm text-gray-600 mt-1 group-hover:text-white"><?= esc($mentor['description']) ?></p>
                                </div>
                            </div>

                            <div class="mt-3 flex gap-3 items-center text-gray-600 text-sm">
                                <!-- Location -->
                                <div class="flex items-center space-x-1 group-hover:text-white">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span><?= esc($mentor['location']) ?></span>
                                </div>
                                <!-- Rating -->
                                <div class="flex items-center gap-1 group-hover:text-white">
                                    <i class="fa-solid fa-star text-yellow-500"></i>
                                    <span><?= esc($mentor['rating']) ?> ★</span>
                                </div>
                                <!-- Tags Section -->
                                <div class="flex flex-wrap items-center space-x-4">
                                    <span class="px-3 py-1 bg-gray-200 text-gray-600 text-xs font-medium rounded-full group-hover:bg-gray-800 group-hover:text-white">
                                        <i class="fa-solid fa-briefcase"></i> <span><?= esc($mentor['experience']) ?></span> Yr
                                    </span>
                                    <span class="px-3 py-1 flex items-center gap-1 bg-gray-200 text-gray-600 text-xs font-medium rounded-full group-hover:bg-gray-800 group-hover:text-white">
                                        <i class="fa-solid fa-indian-rupee-sign"></i> <?= esc($mentor['price']) ?>/hr
                                    </span>

                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-gray-600 text-center">No mentors found.</p>
                <?php endif; ?>
            </div>

            <!-- Pagination Links -->
            <div class="flex justify-center mt-6">
                <!-- Previous Page Button -->
                <a href="?page=<?= max(1, $currentPage - 1) ?>&<?= http_build_query($queryParams) ?>"
                    class="px-4 py-2 mx-1 border rounded-lg <?= ($currentPage == 1) ? 'bg-gray-300 text-gray-500 cursor-not-allowed opacity-50' : 'bg-blue-500 text-white hover:bg-blue-700' ?>"
                    <?= ($currentPage == 1) ? 'disabled' : '' ?>>
                    Prev
                </a>

                <!-- Page Numbers -->
                <?php for ($page = 1; $page <= $totalPages; $page++): ?>
                    <a href="?page=<?= $page ?>&<?= http_build_query($queryParams) ?>"
                        class="px-4 py-2 mx-1 border rounded-lg <?= ($page == $currentPage) ? 'bg-blue-500 text-white' : 'bg-white text-blue-500 hover:bg-blue-100' ?>">
                        <?= $page ?>
                    </a>
                <?php endfor; ?>

                <!-- Next Page Button -->
                <a href="?page=<?= min($totalPages, $currentPage + 1) ?>&<?= http_build_query($queryParams) ?>"
                    class="px-4 py-2 mx-1 border rounded-lg <?= ($currentPage == $totalPages) ? 'bg-gray-300 text-gray-500 cursor-not-allowed opacity-50' : 'bg-blue-500 text-white hover:bg-blue-700' ?>"
                    <?= ($currentPage == $totalPages) ? 'disabled' : '' ?>>
                    Next
                </a>
            </div>


        </div>

        <!-- Placeholder for Additional Section -->
        <div class="grid w-[35vw] grid-cols-1 gap-4">
            <img src="<?= base_url('public/img/Add Banner.png') ?>" />
            <img src="<?= base_url('public/img/Add Banner.png') ?>" />
            <img src="<?= base_url('public/img/Add Banner.png') ?>" />
            <img src="<?= base_url('public/img/Add Banner.png') ?>" />

        </div>
    </section>




    <!-- Footer start  -->

    <footer>
        <div class="bg-[#0077FE] p-basepading grid justify-items-center xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
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
                <h1 class="text-base2x font-semibold text-white">For Teacher’s</h1>
                <ul class="list-none flex flex-col gap-2">
                    <li class="text-base font-medium text-white">Get Paid</li>
                    <li class="text-base font-medium text-white">Premium Membership</li>
                    <li class="text-base font-medium text-white">How it Works</li>
                    <li class="text-base font-medium text-white">Request a Tutor</li>
                    <li class="text-base font-medium text-white">Find Job Tutor</li>
                </ul>
            </div>

            <div>
                <h1 class="text-base2x font-semibold text-white">Support</h1>
                <ul class="list-none flex flex-col gap-2">
                    <li class="text-base font-medium text-white">Feedback</li>
                    <li class="text-base font-medium text-white">Refund Policy</li>
                    <li class="text-base font-medium text-white">Privacy Policy</li>
                    <li class="text-base font-medium text-white">Term & Conditions</li>
                </ul>
            </div>
        </div>
        <div class="bg-white flex justify-between py-2 px-6">
            <div class="flex gap-4 ">
                <img src="<?= base_url('public/img/instagram_logo.png') ?>" />
                <img src="<?= base_url('public/img/linkedin_logo.png') ?>" />
                <img src="<?= base_url('public/img/twitter_logo.png') ?>" />
                <img src="<?= base_url('public/img/whatsapp_logo.png') ?>" />
            </div>
            <div class="text-black text-base font-semibold">
                Developed by - Techmaperz
            </div>
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