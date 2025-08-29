<x-guest-layout>
    <nav id="navbar">
        <div>
            <img class="logo" src="{{ asset('external/Web Solutions.jpg') }}" alt="Web Solutions">
        </div>
        <ul>
            <li><a href="#welcome-section">Home</a></li>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#projects">Our Services</a></li>
            <li><a href="#plan-pricing">Plan and Pricing</a></li>
            <li><a href="#contact" >Contact</a></li>
        </ul>
    </nav>

    <!-- Welcome Section -->
    <section id="welcome-section">
        <h1>Welcome to Infinity Web Solutions</h1>
        <p>Where Ideas Go Limitless</p>
    </section>

    <section id="about-us" class="bg-gray-50 py-16 px-6 md:px-12 lg:px-24">
        <div class="max-w-5xl mx-auto text-center">
            <!-- Heading -->
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Infinity Web Solutions
            </h2>
            <p class="text-lg font-semibold text-indigo-600 uppercase tracking-wide mb-8">
                A Team of Experienced Filipino Virtual Assistants
            </p>

            <!-- Description -->
            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                Infinity Web Solutions is a full-service digital marketing agency based in Batangas, Philippines.
                We are a team that works with companies and brands of all sizes, both locally and internationally.
                Our mission is to provide the most comprehensive business offering and experience,
                coupled with the highest level of customer service in the digital marketing industry.
            </p>

            <p class="text-gray-700 text-lg leading-relaxed">
                From strategizing to execution and down to maintenance, our versatile virtual assistants
                guarantee to deliver exceptional results in the least measure of time,
                with the most cost-effective solutions.
            </p>
        </div>
    </section>


    <!-- Projects Section -->
    <section id="projects">
        <h2>Our Services</h2>
        <div class="project-container">
            <div class="project-tile">
                <a href="https://yourproject1.com" target="_blank">
                    <h3>Search Engine Optimization</h3>
                </a>
            </div>
            <div class="project-tile">
                <a href="https://yourproject2.com" target="_blank">
                    <h3>Search Engine Marketing</h3>
                </a>
            </div>
            <div class="project-tile">
                <a href="https://yourproject3.com" target="_blank">
                    <h3>Social Media Marketing</h3>
                </a>
            </div>
            <div class="project-tile">
                <a href="https://yourproject3.com" target="_blank">
                    <h3>Email Marketing</h3>
                </a>
            </div>
            <div class="project-tile">
                <a href="https://yourproject3.com" target="_blank">
                    <h3>Content Writing</h3>
                </a>
            </div>
            <div class="project-tile">
                <a href="https://yourproject3.com" target="_blank">
                    <h3>Video Creation and Marketing</h3>
                </a>
            </div>
        </div>
    </section>

    <section id="plan-pricing" class="bg-gray-50 py-16 px-6 md:px-12 lg:px-24">
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900">Our Plans & Pricing</h2>
        <p class="mt-4 text-lg text-gray-600">
            Choose the plan that best fits your needs and budget.
        </p>
    </div>

    <!-- FLEX CONTAINER -->
    <div class="flex flex-col md:flex-row md:flex-wrap gap-8 justify-center">
        
        <!-- Starter -->
        <div class="flex-1 min-w-[250px] max-w-sm bg-white rounded-2xl shadow-lg p-6 flex flex-col justify-between hover:shadow-2xl transition">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Starter</h3>
            <p class="text-gray-600 mb-2">$60 <span class="text-sm text-gray-500">/ week</span></p>
            <p class="text-gray-600 mb-4">$228 <span class="text-sm text-gray-500">/ month</span></p>
            <ul class="text-gray-700 mb-6 space-y-2 text-sm">
                <li>10 Hours Per Week</li>
                <li>Highly Skilled & Experienced VA</li>
                <li>With Time Tracker</li>
                <li>Daily Report</li>
            </ul>
            <a href="#"
               class="mt-auto inline-block w-full text-center bg-indigo-600 text-white font-medium py-2 rounded-lg hover:bg-indigo-700 transition">
                Get Started
            </a>
        </div>

        <!-- Basic -->
        <div class="flex-1 min-w-[250px] max-w-sm bg-white rounded-2xl shadow-lg p-6 flex flex-col justify-between hover:shadow-2xl transition">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Basic</h3>
            <p class="text-gray-600 mb-2">$100 <span class="text-sm text-gray-500">/ week</span></p>
            <p class="text-gray-600 mb-4">$388 <span class="text-sm text-gray-500">/ month</span></p>
            <ul class="text-gray-700 mb-6 space-y-2 text-sm">
                <li>20 Hours Per Week</li>
                <li>Highly Skilled & Experienced VA</li>
                <li>With Time Tracker</li>
                <li>Daily Report</li>
            </ul>
            <a href="#"
               class="mt-auto inline-block w-full text-center bg-indigo-600 text-white font-medium py-2 rounded-lg hover:bg-indigo-700 transition">
                Get Started
            </a>
        </div>

        <!-- Standard -->
        <div class="flex-1 min-w-[250px] max-w-sm bg-white rounded-2xl shadow-lg p-6 flex flex-col justify-between hover:shadow-2xl transition">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Standard</h3>
            <p class="text-gray-600 mb-2">$135 <span class="text-sm text-gray-500">/ week</span></p>
            <p class="text-gray-600 mb-4">$528 <span class="text-sm text-gray-500">/ month</span></p>
            <ul class="text-gray-700 mb-6 space-y-2 text-sm">
                <li>30 Hours Per Week</li>
                <li>Highly Skilled & Experienced VA</li>
                <li>With Time Tracker</li>
                <li>Daily Report</li>
            </ul>
            <a href="#"
               class="mt-auto inline-block w-full text-center bg-indigo-600 text-white font-medium py-2 rounded-lg hover:bg-indigo-700 transition">
                Get Started
            </a>
        </div>

        <!-- Business -->
        <div class="flex-1 min-w-[250px] max-w-sm bg-white rounded-2xl shadow-lg p-6 flex flex-col justify-between hover:shadow-2xl transition">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Business</h3>
            <p class="text-gray-600 mb-2">$160 <span class="text-sm text-gray-500">/ week</span></p>
            <p class="text-gray-600 mb-4">$628 <span class="text-sm text-gray-500">/ month</span></p>
            <ul class="text-gray-700 mb-6 space-y-2 text-sm">
                <li>40 Hours Per Week</li>
                <li>Highly Skilled & Experienced VA</li>
                <li>With Time Tracker</li>
                <li>Daily Report</li>
            </ul>
            <a href="#"
               class="mt-auto inline-block w-full text-center bg-indigo-600 text-white font-medium py-2 rounded-lg hover:bg-indigo-700 transition">
                Get Started
            </a>
        </div>
    </div>
</section>



    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Me</h2>
        <p>Email: info@infinity-web-solutions.com</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 infinitywensolutions</p>
    </footer>
</x-guest-layout>
