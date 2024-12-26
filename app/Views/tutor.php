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
    <nav>
        <!-- <div class="w-full py-4 bg-primary text-center text-white font-semibold">FACULTIES ONLINE</div> -->

        <div class="flex justify-between items-center py-4 px-[50px] bg-slate-200">
            <div>
                <a href="<?= base_url() ?>"> <img src="<?= base_url('public/img/logo.jpeg') ?>" class="w-[60px]" /></a>
            </div>
            <div class="pl-[15rem] hidden xl:flex">
                <ul class="flex gap-4">
                    <li class="px-2 border-r-2 border-[#535353]">FIND TUTOR PROFILE</li>
                    <li class="px-2 border-r-2 border-[#535353]">REQUEST A TUTOR</li>
                    <li class="px-2 border-r-2 border-[#535353]">FIND TUTOR JOB</li>
                    <li class="px-2 ">RESOURCES</li>
                </ul>
            </div>
            <div class="flex gap-4">
                <button class="bg-primary py-2 px-4 rounded-md text-white text-base font-semibold">SINGUP AS TECHER</button>
                <button class="border-2 border-primary text-primary py-2 px-4 rounded-md text-base font-semibold">LOGIN</button>
            </div>
        </div>
    </nav>

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
                <h1 class="text-base4x text-black font-semibold"><?= $totalResults ?> Mentor Available - </h1>
                <div>
                    <form method="get" class="flex gap-4">
                        <select
                            name="sort"
                            class="p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                            onchange="this.form.submit()"
                            aria-label="Sort mentors by">
                            <option value="popular" <?= $currentSort === 'popular' ? 'selected' : '' ?>>Most Popular</option>
                            <option value="price" <?= $currentSort === 'price' ? 'selected' : '' ?>>Lowest Price</option>
                            <option value="rating" <?= $currentSort === 'rating' ? 'selected' : '' ?>>Highest Rating</option>
                        </select>
                    </form>
                </div>
            </div>

            <!-- Mentor Cards -->
            <div class="flex flex-col w-[60vw] gap-6">
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
                                        <i class="fa-solid fa-graduation-cap"></i> Top Topper
                                    </span>
                                    <span class="px-3 py-1 flex gap-1 bg-gray-200 text-gray-600 text-xs font-medium rounded-full group-hover:bg-gray-800 group-hover:text-white">
                                        <img src="<?= base_url('public/img/Certified.png') ?>" alt="Certified Badge" /> Certified
                                    </span>
                                    <span class="px-3 py-1 flex gap-1 bg-gray-200 text-gray-600 text-xs font-medium rounded-full group-hover:bg-gray-800 group-hover:text-white">
                                        <img src="<?= base_url('public/img/graduation.png') ?>" alt="Graduation Badge" /> +<?= esc($mentor['popularity']) ?> Students
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
        <div class="w-[40vw] mt-[80px] bg-gray-100"></div>
    </section>




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

</body>

</html>