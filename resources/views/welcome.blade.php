
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Portfolio</title>
    <script src="https://kit.fontawesome.com/29d3459c7a.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-tr from-cyan-400 via-violet-100 to-cyan-300 min-h-screen">
    <nav class="bg-gradient-to-r from-teal-800 via-blue-800 to-cyan-500 text-white flex justify-between items-center shadow-lg py-4 px-6">
        <div class="flex items-center">
            <i class="fa-solid fa-house fa-xl h-1 w-8 mr-3 text-white"></i>
            <a href="#" class="text-xl font-bold">My Portfolio</a>
        </div>
        <div class="md:hidden">
            <button id="menu-btn" class="text-white focus:outline-none">
                <i class="fa-solid fa-bars fa-xl"></i>
            </button>
        </div>
        <ul id="menu" class="hidden md:flex space-x-6">
            <li><a href="#about" class="text-lg hover:text-yellow-400 transition duration-300">About</a></li>
            <li><a href="#education" class="text-lg hover:text-yellow-400 transition duration-300">Education</a></li>
            <li><a href="#work" class="text-lg hover:text-yellow-400 transition duration-300">Work</a></li>
            <li><a href="#research" class="text-lg hover:text-yellow-400 transition duration-300">Research</a></li>
            <li><a href="#project" class="text-lg hover:text-yellow-400 transition duration-300">Project</a></li>
        </ul>
        <div class="hidden md:flex space-x-4">
            <a href="https://github.com/mhadi28" class="text-2xl text-gray-700 hover:text-yellow-400 transition duration-300"><i class="fab fa-github"></i></a>
            <a href="https://linkedin.com/in/muhammadabdlhadi/" class="text-2xl text-gray-700 hover:text-yellow-400 transition duration-300"><i class="fab fa-linkedin"></i></a>
            <a href="https://twitter.com/yourprofile" class="text-2xl text-gray-700 hover:text-yellow-400 transition duration-300"><i class="fab fa-twitter"></i></a>
        </div>
    </nav>
    <!-- Mobile Menu -->
    <!-- Mobile Menu -->
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden flex flex-col space-y-4 bg-gradient-to-r from-teal-800 via-blue-800 to-cyan-500 text-white p-4 hidden">
        <a href="#about" class="text-lg hover:text-yellow-400 transition duration-300">About</a>
        <a href="#education" class="text-lg hover:text-yellow-400 transition duration-300">Education</a>
        <a href="#work" class="text-lg hover:text-yellow-400 transition duration-300">Work</a>
        <a href="#research" class="text-lg hover:text-yellow-400 transition duration-300">Research</a>
        <a href="#project" class="text-lg hover:text-yellow-400 transition duration-300">Project</a>
        <div class="flex space-x-4">
          <a href="https://github.com/yourprofile" class="text-2xl text-gray-700 hover:text-yellow-400 transition duration-300"><i class="fab fa-github"></i></a>
          <a href="https://linkedin.com/in/yourprofile" class="text-2xl text-gray-700 hover:text-yellow-400 transition duration-300"><i class="fab fa-linkedin"></i></a>
          <a href="https://twitter.com/yourprofile" class="text-2xl text-gray-700 hover:text-yellow-400 transition duration-300"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    <!-- End Mobile Menu -->

    <figure class="mr-2 ml-2 mt-4 md:flex bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800">
        <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-lg rounded-full mx-auto" src="{{ asset ('images/file2.png')}}" alt="profile">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
          <blockquote>
            <p class="text-lg font-medium">
              “Becoming a full-stack developer is indeed not easy. It requires a high level of dedication and perseverance to master the various skills needed. However, for those who are determined, the process of learning and delving into this field offers a very satisfying and compelling experience.”
            </p>
          </blockquote>
          <figcaption class="font-medium">
            <div class="text-sky-500 dark:text-sky-400">
              Muhammad Abdullah Hadi
            </div>
            <div class="text-slate-700 dark:text-slate-500">
              Full-Stack Developer
            </div>
          </figcaption>
        </div>
      </figure>
    <!-- About Me Section -->
    <section id="about" class="flex flex-col items-center mt-12 px-4 md:px-0">
        <h2 class="text-4xl font-bold text-teal-800 mb-6">About Me</h2>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 md:p-12 max-w-4xl">
            <p class="text-gray-700 text-lg mb-4">
                Hello! I'm Muhammad Abdullah Hadi, a passionate software developer with a knack for creating elegant solutions to complex problems. With a strong background in Computer Science, I enjoy working on innovative projects that make a real impact.
            </p>
            <p class="text-gray-700 text-lg mb-4">
                I specialize in Web development and Data Analytics, and I'm always eager to learn new technologies and improve my skills. Outside of work, I stay creative and energized through exercise and social activities.
            <p class="text-gray-700 text-lg">
                Let's connect and create something amazing together!
            </p>
        </div>
    </section>
    <!-- Education Section -->
    <section id="education" class="flex flex-col items-center mt-12 px-4 md:px-0" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-teal-800 mb-6">Education</h2>
        <div class="flex flex-col md:flex-row justify-between space-y-6 md:space-y-0 md:space-x-6 max-w-4xl">
            <!-- Left Column -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 md:w-1/2" data-aos="fade-right">
                <div class="mb-4 flex items-center">
                    <img src="{{asset ('images/ub120.png')}}" alt="University Logo" class="h-12 w-12 mr-4">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-800">Brawijaya University</h3>
                        <p class="text-gray-600">Bachelor Degree - Major in Fisheries Utilization Resources</p>
                        <p class="text-gray-600">2012-2017 Graduated with GPA of 3.00/4.00</p>
                    </div>
                </div>
            </div>
            <!-- Right Column -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 md:w-1/2" data-aos="fade-left">
                <div class="mb-4 flex items-center">
                    <img src="{{asset ('images/ueu120.webp')}}" alt="University Logo" class="h-12 w-12 mr-4">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-800">Esa Unggul University</h3>
                        <p class="text-gray-600">Master Degree - Major in Artificial Intelligence</p>
                        <p class="text-gray-600">2021-2023 Graduated with GPA of 3.66/4.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Experience Section -->
    <section id="work" class="flex flex-col items-center mt-12 px-4 md:px-0" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-teal-800 mb-6">Work Experience</h2>
        <div class="max-w-4xl w-full">
            <!-- Work Item 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6" data-aos="fade-up-right">
                <h3 class="text-xl font-semibold text-gray-800">Full-Stack Developer</h3>
                <p class="text-gray-600">PT. Velo Lapan Cahaya (January 2024 - April 2024)</p>
                <ul class="list-disc list-inside text-gray-700 mt-2">
                    <li>Build, test, deploy, and update web applications using agile methodologies to ensure quick development cycles and adaptability to changing requirements</li>
                    <li>Design responsive and intuitive user interfaces (UI) and user experiences (UX) for various devices, ensuring the best user experience</li>
                    <li>Implement and manage CMS to facilitate easy content management, ensuring flexibility and ease of updates by non-technical users</li>
                </ul>
            </div>
            <!-- Work Item 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6" data-aos="fade-up-left">
                <h3 class="text-xl font-semibold text-gray-800">IT Consultant</h3>
                <p class="text-gray-600">PPN BAPPENAS (September 2022 - January 2023)</p>
                <ul class="list-disc list-inside text-gray-700 mt-2">
                    <li>Develop a Business Process Model and Notation (BPMN) for the E-Monev Gen 3.0 application to standardize its use across various stakeholders, ensuring compliance with Presidential Regulation No. 95 of 2018. This BPMN will serve as a blueprint to streamline operations, improve efficiency, and ensure uniformity in monitoring and evaluation processes.</li>
                </ul>
            </div>
            <!-- Work Item 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6" data-aos="fade-up-right">
                <h3 class="text-xl font-semibold text-gray-800">GIS Operator</h3>
                <p class="text-gray-600">PT. Eidara Matadata Presisi (July 2020 - December 2021)</p>
                <ul class="list-disc list-inside text-gray-700 mt-2">
                    <li>Responsible for digitizing maps, processing satellite and aerial images, 
                        developing flight plans for aerial surveys, Applied deep learning to monitor KCIC construction progress, and conducting land suitability analysis for a food estate project in North Sumatra.</li>
                </ul>
            </div>
            <!-- Work Item 4 -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6" data-aos="fade-up-left">
                <h3 class="text-xl font-semibold text-gray-800">GIS Staff</h3>
                <p class="text-gray-600">PT.Surya Sawit Sejati (September 2018 - June 2019)</p>
                <ul class="list-disc list-inside text-gray-700 mt-2">
                    <li>Managed diverse field databases, conducted drone-based data acquisition, utilized open-source software for species analysis and reporting, 
                        created thematic maps, and supported research and analysis using GIS techniques.</li>
                </ul>
            </div>
            <!-- Work Item 5 -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6" data-aos="fade-up-right">
                <h3 class="text-xl font-semibold text-gray-800">GIS Analyst</h3>
                <p class="text-gray-600">PT.Eidara Matadata Presisi (February 2018 - June 2018)</p>
                <ul class="list-disc list-inside text-gray-700 mt-2">
                    <li>Performed spatial data analysis for topographical and aerial surveys, 
                        created 3D models, coordinated field surveys and data analysis, and prepared daily progress reports.</li>
                </ul>
            </div>
        <!-- Research Section -->
        <section id="research" class="flex flex-col items-center mt-12 px-4 md:px-0" data-aos="zoom-in">
            <h2 class="text-4xl font-bold text-teal-800 mb-6">Research</h2>
            <div class="max-w-4xl w-full">
                <!-- Research Item 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-6" data-aos="zoom-in-up">
                    <h3 class="text-xl font-semibold text-gray-800">Delay Optimization in NB-IoT</h3>
                    <p class="text-gray-600">Esa Unggul University (2023)</p>
                    <p class="text-gray-700 mt-2">
                        This project aims to optimize delay in NB-IoT networks using a metaheuristic algorithm known as the Killer Whale Algorithm (KWA). By applying KWA, it is expected to find a more efficient network configuration that can significantly reduce latency.
                    </p>
                </div>
                <!-- Research Item 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-6" data-aos="zoom-in-down">
                    <h3 class="text-xl font-semibold text-gray-800">Mapping Mangrove Vegetation Index Using Satellite Remote Sensing Technology</h3>
                    <p class="text-gray-600">Brawijaya University (2017)</p>
                    <p class="text-gray-700 mt-2">
                        Indonesia's coastal and marine regions boast some of the world's highest biodiversity, including mangrove forests, coral reefs, seagrass beds, and various fish species. Mangroves, which exist between high and low tide marks, are crucial ecosystems that support biodiversity and maintain ecological balance. This study aims to map the distribution and extent of mangrove ecosystems, classify land cover, and compare the effectiveness of two vegetation index algorithms, NDVI and SAVI, in mapping mangroves. Using spatial analysis and satellite imagery, the study finds that NDVI is more effective than SAVI in identifying mangrove density. In 2016, the largest mangrove area was in Sumberasih District (87.520 Ha), and the smallest in Paiton District (5.279 Ha).
                    </p>
                </div>
                <!-- Add more research items as needed -->
            </div>
        </section>
        </div>
    </section>

    <!-- Project Section -->
    <section id="project" class="flex flex-col items-center mt-12 px-4 md:px-0" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-teal-800 mb-6">Projects</h2>
        <div class="max-w-4xl w-full">  
            <!-- Project Item 4 -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6" data-aos="zoom-out">
                <h3 class="text-xl font-semibold text-gray-800">Website Desa</h3>
                <p class="text-gray-600">Coming Soon</p>
                <ul class="list-disc list-inside text-gray-700 mt-2">
                    <li>Tools: Laravel, MySQL, Tailwind CSS, Bootstrap, JavaScript</li>
                </ul>
            </div>
            <!-- Project Item 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6" data-aos="zoom-out">
                <h3 class="text-xl font-semibold text-gray-800">Portofolio Website</h3>
                <p class="text-gray-600">The goal of this project is to develop a professional portfolio website that effectively showcases the skills, experience, and projects of an individual. This website will serve as a dynamic and interactive platform for potential employers, clients, and collaborators to learn more about the individual's capabilities and accomplishments.</p>
                <ul class="list-disc list-inside text-gray-700 mt-2">
                    <li>Tools: Laravel, Tailwind CSS, JavaScript</li>
                </ul>
            </div>
            <!-- Project Item 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6" data-aos="zoom-out">
                <h3 class="text-xl font-semibold text-gray-800">Live Leaderboard</h3>
                <p class="text-gray-600">The Live Leaderboard project is designed to develop a real-time competitive platform that tracks and displays live scores, rankings, and statistics of participants engaged in various activities or games. This web application will serve a broad range of applications, from gaming tournaments to fitness challenges, providing participants and organizers with instant feedback and visual data representation.</p>
                <ul class="list-disc list-inside text-gray-700 mt-2">
                    <li>Tools: Laravel, MySQL, CSS, Bootstrap, JavaScript</li>
                </ul>
            </div>
            <!--project item 3-->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6" data-aos="zoom-out">
                <h3 class="text-xl font-semibold text-gray-800">KCIC Contstruction Monitoring</h3>
                <p class="text-gray-600">Utilizing deep learning and object detection algorithms to monitor the progress of the Jakarta-Bandung high-speed rail construction, leveraging drone-captured aerial imagery to streamline and expedite the reporting process.</p>
                <ul class="list-disc list-inside text-gray-700 mt-2">
                    <li>Tools: Python, YOLOv5, OpenCV, ArcGIS, Agisoft Metashape</li>
                </ul>
            </div>
            <!-- Add more project items as needed -->
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-12" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-8">Skills</h2>
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-4">
            <!-- Web Development -->
            <div class="bg-white shadow-lg rounded-lg p-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <i class="fab fa-html5 text-orange-500 text-4xl mb-4"></i>
                <h3 class="text-lg font-bold mb-4">Web Development</h3>
                <ul class="text-gray-700">
                    <li class="mb-2">HTML5, Laravel, Livewire, MySQL</li>
                    <li class="mb-2">CSS3, Tailwind CSS</li>
                    <li class="mb-2">JavaScript</li>
                    <li class="mb-2">React.js</li>
                    <li class="mb-2">Windows OS, Cent OS 7</li>
                    <!-- Add more web development skills as needed -->
                </ul>
            </div>
            <!-- Analytics -->
            <div class="bg-white shadow-lg rounded-lg p-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <i class="fas fa-chart-line text-blue-500 text-4xl mb-4"></i>
                <h3 class="text-lg font-bold mb-4">Analytics</h3>
                <ul class="text-gray-700">
                    <li class="mb-2">Data Analysis</li>
                    <li class="mb-2">Data Visualization</li>
                    <li class="mb-2">Statistical Analysis</li>
                    <li class="mb-2">Machine Learning</li>
                    <!-- Add more analytics skills as needed -->
                </ul>
            </div>
            <!-- GIS -->
            <div class="bg-white shadow-lg rounded-lg p-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <i class="fas fa-globe-americas text-green-500 text-4xl mb-4"></i>
                <h3 class="text-lg font-bold mb-4">GIS</h3>
                <ul class="text-gray-700">
                    <li class="mb-2">Geospatial Analysis</li>
                    <li class="mb-2">GIS Software (e.g., ArcGIS, ENVI, Global Mapper, Agisoft Metashape)</li>
                    <li class="mb-2">Remote Sensing</li>
                    <li class="mb-2">Spatial Data Visualization</li>
                    <!-- Add more GIS skills as needed -->
                </ul>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- End Skills Section -->
    <script>
        AOS.init();
    </script>
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
      
        menuBtn.addEventListener('click', function() {
          mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>