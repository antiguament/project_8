<section id="basic-information" class="bg-gradient-to-br from-[#e0f2fe] to-[#f0f4c3] py-16 md:py-24 lg:py-32 relative overflow-hidden">
    <div class="container mx-auto px-6 text-center">
        <div class="inline-block relative mb-12">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0a9396] mb-4 animate-float">
                Let's Talk About You!
            </h2>
            <div class="absolute -bottom-3 left-0 right-0 h-3 bg-[rgba(10,147,150,0.3)] rounded-full animate-wave"></div>
        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl p-8 md:p-12 lg:p-16 max-w-lg mx-auto animate-fadeInUp" style="animation-delay: 0.2s;">
            <h3 class="text-2xl font-semibold text-[#005f73] mb-6">Basic Personal Information</h3>

            <div class="space-y-6">
                <div class="bg-[#f1faee]/80 p-4 rounded-lg border border-[#a8dadc]/50">
                    <h4 class="font-semibold text-[#0a9396] mb-2">Countries and Nationalities</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div>
                            <p class="font-medium text-[#1d3557]">Spain</p>
                            <p class="text-[#005f73]"><span class="font-semibold">→</span> Spanish</p>
                        </div>
                        <div>
                            <p class="font-medium text-[#1d3557]">France</p>
                            <p class="text-[#005f73]"><span class="font-semibold">→</span> French</p>
                        </div>
                         <div>
                            <p class="font-medium text-[#1d3557]">Colombia</p>
                            <p class="text-[#005f73]"><span class="font-semibold">→</span> Colombian</p>
                        </div>
                        <div>
                            <p class="font-medium text-[#1d3557]">United States</p>
                            <p class="text-[#005f73]"><span class="font-semibold">→</span> American</p>
                        </div>
                        <div>
                            <p class="font-medium text-[#1d3557]">Japan</p>
                            <p class="text-[#005f73]"><span class="font-semibold">→</span> Japanese</p>
                        </div>
                        <div>
                            <p class="font-medium text-[#1d3557]">Germany</p>
                            <p class="text-[#005f73]"><span class="font-semibold">→</span> German</p>
                        </div>
                    </div>
                    <p class="text-sm text-[#005f73] mt-2">Learn more about world countries and their nationalities.</p>
                </div>

                <div class="bg-[#f1faee]/80 p-4 rounded-lg border border-[#a8dadc]/50">
                    <h4 class="font-semibold text-[#0a9396] mb-2">Jobs</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div><p class="text-[#005f73]">Teacher</p></div>
                        <div><p class="text-[#005f73]">Student</p></div>
                        <div><p class="text-[#005f73]">Doctor</p></div>
                        <div><p class="text-[#005f73]">Engineer</p></div>
                        <div><p class="text-[#005f73]">Nurse</p></div>
                        <div><p class="text-[#005f73]">Chef</p></div>
                        <div><p class="text-[#005f73]">Artist</p></div>
                        <div><p class="text-[#005f73]">Musician</p></div>
                        <div><p class="text-[#005f73]">Writer</p></div>
                    </div>
                     <p class="text-sm text-[#005f73] mt-2">Explore different occupations and professions.</p>
                </div>

                <div class="bg-[#f1faee]/80 p-4 rounded-lg border border-[#a8dadc]/50">
                    <h4 class="font-semibold text-[#0a9396] mb-2">Basic Personal Questions</h4>
                    <div class="space-y-2">
                        <p class="text-[#005f73]"><span class="font-semibold">Where are you from?</span></p>
                        <input type="text" id="fromInput" placeholder="Enter your country" class="w-full px-3 py-2 rounded-md border border-[#a8dadc] focus:outline-none focus:ring-2 focus:ring-[#005f73]/50">
                        <p id="fromDisplay" class="mt-2 font-semibold text-[#0a9396]"></p>

                        <p class="text-[#005f73]"><span class="font-semibold">What's your phone number?</span></p>
                        <input type="tel" id="phoneInput" placeholder="Enter your phone number" class="w-full px-3 py-2 rounded-md border border-[#a8dadc] focus:outline-none focus:ring-2 focus:ring-[#005f73]/50">
                         <p id="phoneDisplay" class="mt-2 font-semibold text-[#0a9396]"></p>
                        <button onclick="showPersonalInfo()" class="mt-4 px-4 py-2 bg-[#0a9396] text-white rounded-md hover:bg-[#005f73] transition-colors">Show Information</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute top-0 left-0 w-40 h-40 bg-[#8ac926] rounded-full opacity-10 -translate-x-20 -translate-y-20"></div>
    <div class="absolute bottom-0 right-0 w-52 h-52 bg-[#ffca3a] rounded-full opacity-10 translate-x-24 translate-y-24"></div>
    <div class="absolute top-1/4 right-10 w-24 h-24 bg-[#f1faee] rounded-full opacity-20"></div>
    <div class="absolute bottom-1/3 left-16 w-32 h-32 bg-[#a8dadc] rounded-full opacity-15"></div>
</section>

<style>
/*Animations*/
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    @keyframes wave {
        0% { transform: scaleX(1); }
        50% { transform: scaleX(1.1); }
        100% { transform: scaleX(1); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    .animate-wave {
        animation: wave 2s ease-in-out infinite;
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }
</style>

<script>
function showPersonalInfo() {
    const fromInput = document.getElementById('fromInput');
    const phoneInput = document.getElementById('phoneInput');
    const fromDisplay = document.getElementById('fromDisplay');
    const phoneDisplay = document.getElementById('phoneDisplay');

    fromDisplay.textContent = `You are from: ${fromInput.value}`;
    phoneDisplay.textContent = `Your phone number is: ${phoneInput.value}`;

    fromInput.value = '';
    phoneInput.value = '';
}
document.addEventListener('DOMContentLoaded', function() {
        // Simple fade-in animation for the main container
        const section = document.getElementById('basic-information');
        setTimeout(() => {
            section.style.opacity = '1';
        }, 100);
    });
</script>







































