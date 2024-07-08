<!DOCTYPE html>
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
    <nav class="bg-gradient-to-r from-teal-800 via-blue-800 to-cyan-500 text-white flex justify-between items-center shadow-lg py-4 px-6" data-aos="fade-down">
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
    <div id="mobile-menu" class="md:hidden flex flex-col space-y-4 bg-gradient-to-r from-teal-800 via-blue-800 to-cyan-500 text-white p-4" data-aos="fade-in">
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

    <figure class="mr-2 ml-2 mt-4 md:flex bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800" data-aos="fade-right">
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
    <section id="about" class="flex flex-col items-center mt-12 px-4 md:px-0" data-aos="fade-up">
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
        <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 md:p-12 max-w-4xl">
            <div class="mb-4">
                <h3 class="text-2xl font-semibold text-gray-800">PT. Smart Computerindo</h3>
                <p class="text-gray-600">IT Staff - Full Time (2019-2020)</p>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Managing IT infrastructure and resolving technical issues.</li>
                    <li>Installing and configuring software and hardware.</li>
                    <li>Providing technical support to employees.</li>
                </ul>
            </div>
            <div class="mb-4">
                <h3 class="text-2xl font-semibold text-gray-800">Universitas Brawijaya</h3>
                <p class="text-gray-600">Laboratory Staff - Contract (2021-2022)</p>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Assisting in laboratory experiments and research.</li>
                    <li>Maintaining laboratory equipment and supplies.</li>
                    <li>Ensuring safety protocols are followed in the laboratory.</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Research Section -->
    <section id="research" class="flex flex-col items-center mt-12 px-4 md:px-0" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-teal-800 mb-6">Research</h2>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 md:p-12 max-w-4xl">
            <div class="mb-4">
                <h3 class="text-2xl font-semibold text-gray-800">Research on Data Mining Techniques</h3>
                <p class="text-gray-600">University Project - 2022</p>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Investigating various data mining techniques to extract meaningful patterns from large datasets.</li>
                    <li>Developing algorithms for data preprocessing and analysis.</li>
                    <li>Presenting research findings at academic conferences.</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Projects Section -->
    <section id="project" class="flex flex-col items-center mt-12 px-4 md:px-0" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-teal-800 mb-6">Projects</h2>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6 md:p-12 max-w-4xl">
            <div class="mb-4">
                <h3 class="text-2xl font-semibold text-gray-800">Web Development Project</h3>
                <p class="text-gray-600">Personal Project - 2023</p>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Developed a responsive website using HTML, CSS, and JavaScript.</li>
                    <li>Implemented user authentication and data management features.</li>
                    <li>Deployed the website on a cloud server for public access.</li>
                </ul>
            </div>
            <div class="mb-4">
                <h3 class="text-2xl font-semibold text-gray-800">Data Analysis Project</h3>
                <p class="text-gray-600">Freelance Project - 2023</p>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Conducted data analysis using Python and Pandas.</li>
                    <li>Visualized data trends using Matplotlib and Seaborn.</li>
                    <li>Provided actionable insights to clients based on data findings.</li>
                </ul>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
        document.getElementById('menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>