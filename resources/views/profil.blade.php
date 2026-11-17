<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $nama_lengkap }} - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0a0a0a; color: #f3f4f6; overflow-x: hidden; }
        .bg-grid {
            background-size: 50px 50px;
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        }
        /* Animasi Dinamis Bolak-Balik (Scroll Up & Down) */
        .reveal { 
            opacity: 0; 
            transform: translateY(40px); 
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); 
        }
        .reveal.active { 
            opacity: 1; 
            transform: translateY(0); 
        }
        .skill-bar-fill { 
            width: 0%; 
            transition: width 1.5s cubic-bezier(0.22, 1, 0.36, 1); 
        }
        .profile-box { position: relative; }
        .profile-box::before, .profile-box::after {
            content: ''; position: absolute; width: 25px; height: 25px; border: 2px solid #38bdf8; transition: all 0.3s ease;
        }
        .profile-box::before { top: -5px; left: -5px; border-right: none; border-bottom: none; }
        .profile-box::after { bottom: -5px; right: -5px; border-left: none; border-top: none; }
        .typing-text {
            overflow: hidden; white-space: nowrap; border-right: 2px solid #22c55e;
            animation: typing 2s steps(40, end), blink-caret .75s step-end infinite;
        }
        @keyframes typing { from { width: 0 } to { width: 100% } }
        @keyframes blink-caret { from, to { border-color: transparent } 50% { border-color: #22c55e; } }
    </style>
</head>
<body class="bg-grid antialiased selection:bg-blue-500 selection:text-white">

    <!-- ================= OPENING BOOT SCREEN ================= -->
    <div id="boot-screen" style="z-index: 99999;" class="fixed inset-0 bg-[#0a0a0a] flex flex-col items-center justify-center transition-all duration-700">
        <i class="fa-solid fa-fingerprint text-blue-500 text-6xl mb-6 animate-pulse" style="filter: drop-shadow(0 0 20px rgba(59,130,246,0.8));"></i>
        <h2 class="text-white font-mono font-bold text-xl tracking-widest mb-2">AMANDA.DEV_OS // V2.0</h2>
        <div class="inline-block mb-10">
            <p class="text-green-500 font-mono text-sm typing-text">> INITIALIZING SYSTEM PROTOCOL_</p>
        </div>
        <button onclick="masukWeb()" class="border border-blue-500 text-blue-400 px-8 py-3 font-mono text-sm font-bold tracking-widest hover:bg-blue-500 hover:text-white hover:shadow-[0_0_25px_rgba(59,130,246,0.6)] transition-all flex items-center gap-3 cursor-pointer">
            INITIALIZE <i class="fa-solid fa-chevron-right text-xs"></i>
        </button>
    </div>

    <!-- ================= BACKGROUND AUDIO ELEMENT ================= -->
    <audio id="bgMusic" loop>
        <source src="{{ asset('STAYC_SO BAD [Inst].mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- ================= WEB UTAMA ================= -->
    <div id="main-content" class="hidden opacity-0 transition-opacity duration-1000 ease-in-out">
        
        <!-- Navbar -->
        <nav class="fixed top-0 w-full bg-[#0a0a0a]/90 backdrop-blur-md z-[100] border-b border-gray-800">
            <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-semibold tracking-widest text-gray-400">
                <div class="flex items-center gap-3 text-white">
                    <img src="{{ asset('Logo_UNIDA.png') }}" alt="" class="w-5 h-5 object-contain" onerror="this.style.display='none'">
                    <span>{{ $nama_lengkap }} // {{ $nim }}</span>
                </div>
                <div class="space-x-8">
                    <a href="#home" class="hover:text-blue-400 transition-all">HOME</a>
                    <a href="#about" class="hover:text-blue-400 transition-all">ABOUT ME</a>
                    <a href="#skills" class="hover:text-blue-400 transition-all">SKILLS</a>
                    <a href="#contact" class="hover:text-blue-400 transition-all">CONTACT</a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="min-h-screen flex items-center pt-24 pb-12 relative">
            <div class="max-w-7xl mx-auto px-6 w-full grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="reveal">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-950/40 border border-blue-800/60 rounded-full mb-6">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse shadow-[0_0_8px_#22c55e]"></span> 
                        <span class="text-xs text-blue-300 font-mono tracking-wider">STATUS: READY FOR DEPLOYMENT</span>
                    </div>
                    <div class="font-mono text-xs text-blue-400 tracking-widest mb-2">> USER_PROFILE // IDENTIFIED</div>
                    <h1 class="text-6xl md:text-4xl font-extrabold text-white mb-6 uppercase-lowercase leading-tight">
                        Hi, My Name is <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500">AULIA AMANDA ALAMSYAH</span>
                    </h1>
                    <p class="text-base text-gray-400 mb-10 max-w-lg border-l-2 border-blue-500 pl-4 leading-relaxed">
                        {{ $tagline }}
                    </p>
                    <div class="flex gap-4">
                        <a href="#contact" class="bg-blue-600 text-white px-6 py-3 text-sm font-bold flex items-center gap-3 hover:bg-blue-500 shadow-[0_0_15px_rgba(37,99,235,0.4)] transition-all">
                            GET IN TOUCH <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#about" class="border border-gray-700 text-gray-300 px-6 py-3 text-sm font-bold hover:border-white hover:text-white transition-all">
                            ABOUT ME
                        </a>
                    </div>
                </div>

                <!-- Foto Profil, Logo, dan Quotes Super Rapih -->
                <div class="flex flex-col items-center md:items-end reveal">
                    <div class="profile-box p-2 bg-[#111] border border-gray-800 shadow-2xl">
                        <div class="w-64 h-64 bg-[#18181b] flex flex-col items-center justify-center relative overflow-hidden group">
                            <img src="{{ asset('Foto Saya.jpg') }}" alt="Foto Aulia" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.style.display='none'">
                        </div>
                    </div>

                    <!-- QUOTES YANG LEBIH RAPI & MENYATU -->
                    <div class="mt-5 w-64 p-3 bg-[#141417]/80 border border-gray-800/80 text-center font-mono rounded shadow-lg backdrop-blur">
                        <p class="text-[11px] text-blue-400 tracking-wider font-semibold italic">
                            "I'm not an IT girl, more like a HIT girl."
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-24 border-t border-gray-800 bg-[#0d0d0f]">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-start">
                <div class="reveal">
                    <p class="text-xs font-mono font-bold tracking-widest text-blue-500 mb-2">01 // ABOUT ME</p>
                    <h2 class="text-4xl font-extrabold uppercase mb-8 text-white">Who I Am?</h2>
                    <p class="text-gray-400 leading-relaxed mb-4">
                        Saya merupakan mahasiswi Ilmu Komputer Universitas Djuanda yang memiliki ketertarikan pada bidang teknologi informasi, komputer, dan pengembangan perangkat lunak. Saya senang mempelajari hal-hal baru dan mengeksplorasi teknologi.
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        Di luar kegiatan akademik, hobi saya adalah bermain game dan mendengarkan musik. Ke depannya, saya berharap dapat terus mengembangkan pengetahuan, kreativitas, dan keterampilan di dunia digital.
                    </p>
                </div>
                
                <!-- Kolom Kanan: 3 Kotak Kartu (Menghilangkan Area Kosong) -->
                <div class="space-y-4 flex flex-col justify-center">
                    <div class="reveal p-5 bg-[#141417] border border-gray-800 hover:border-blue-500/50 transition-colors">
                        <h4 class="font-bold text-white mb-1 uppercase flex items-center gap-2 text-sm"><i class="fa-solid fa-microchip text-blue-400"></i> Computer Science</h4>
                        <p class="text-xs text-gray-400">Fokus pada logika pemrograman, struktur data, dan pengembangan web modern.</p>
                    </div>
                    <div class="reveal p-5 bg-[#141417] border border-gray-800 hover:border-purple-500/50 transition-colors">
                        <h4 class="font-bold text-white mb-1 uppercase flex items-center gap-2 text-sm"><i class="fa-solid fa-gamepad text-purple-400"></i> Gamer & Creator</h4>
                        <p class="text-xs text-gray-400">Menyukai estetika desain bernuansa gaming, gelap, dan futuristik.</p>
                    </div>
                    <!-- Kotak Tambahan Penghilang Ruang Kosong -->
                    <div class="reveal p-5 bg-[#141417] border border-gray-800 hover:border-green-500/50 transition-colors">
                        <h4 class="font-bold text-white mb-1 uppercase flex items-center gap-2 text-sm"><i class="fa-solid fa-terminal text-green-400"></i> Tech & Vibe Enthusiast</h4>
                        <p class="text-xs text-gray-400">Selalu ditemani musik pilihan dan ritme ngoding tingkat tinggi.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-24 border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-16">
                    <p class="text-xs font-mono font-bold tracking-widest text-blue-500 mb-2">02 // SKILLS</p>
                    <h2 class="text-4xl font-extrabold uppercase text-white">Tech Stack & Proficiency</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-10">
                    @foreach($skills_language as $skill)
                    <div class="reveal">
                        <div class="flex justify-between text-xs font-bold tracking-widest text-gray-400 mb-2 uppercase">
                            <span>Language: <span class="text-white">{{ $skill['name'] }}</span></span>
                            <span class="text-blue-400 font-mono">{{ $skill['score'] }}%</span>
                        </div>
                        <div class="w-full bg-gray-800 h-2 rounded-none overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-purple-500 h-2 rounded-none skill-bar-fill shadow-[0_0_10px_rgba(59,130,246,0.5)]" data-width="{{ $skill['score'] }}%"></div>
                        </div>
                    </div>
                    @endforeach
                    
                    @foreach($skills_framework as $skill)
                    <div class="reveal">
                        <div class="flex justify-between text-xs font-bold tracking-widest text-gray-400 mb-2 uppercase">
                            <span>Framework: <span class="text-white">{{ $skill['name'] }}</span></span>
                            <span class="text-blue-400 font-mono">{{ $skill['score'] }}%</span>
                        </div>
                        <div class="w-full bg-gray-800 h-2 rounded-none overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-purple-500 h-2 rounded-none skill-bar-fill shadow-[0_0_10px_rgba(59,130,246,0.5)]" data-width="{{ $skill['score'] }}%"></div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($skills_tool as $skill)
                    <div class="reveal">
                        <div class="flex justify-between text-xs font-bold tracking-widest text-gray-400 mb-2 uppercase">
                            <span>Tool: <span class="text-white">{{ $skill['name'] }}</span></span>
                            <span class="text-blue-400 font-mono">{{ $skill['score'] }}%</span>
                        </div>
                        <div class="w-full bg-gray-800 h-2 rounded-none overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-purple-500 h-2 rounded-none skill-bar-fill shadow-[0_0_10px_rgba(59,130,246,0.5)]" data-width="{{ $skill['score'] }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Contact & Mini Game Section -->
        <section id="contact" class="py-24 border-t border-gray-800 bg-[#0d0d0f]">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                
                <div class="reveal">
                    <p class="text-xs font-mono font-bold tracking-widest text-blue-500 mb-2">03 // CONTACT & SOCIALS</p>
                    <h2 class="text-4xl font-extrabold uppercase mb-6 text-white">Let's Connect</h2>
                    <p class="text-gray-400 text-sm mb-8 leading-relaxed">
                        Punya proyek bareng, tugas kolaborasi, atau sekadar ingin mabar? Silakan hubungi saya melalui sosial media di bawah atau mainkan mini game interaktif di samping!
                    </p>
                    
                    <!-- Third Party Links -->
                    <div class="flex gap-4">
                        <a href="https://github.com/amanda-yaaa9024" target="_blank" class="w-12 h-12 bg-[#141417] border border-gray-800 rounded-lg flex items-center justify-center text-xl text-gray-300 hover:text-white hover:border-blue-500 hover:shadow-[0_0_15px_rgba(59,130,246,0.4)] transition-all">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="mailto:amandaaulia03034@gmail.com" class="w-12 h-12 bg-[#141417] border border-gray-800 rounded-lg flex items-center justify-center text-xl text-gray-300 hover:text-red-400 hover:border-red-500 hover:shadow-[0_0_15px_rgba(239,68,68,0.4)] transition-all">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <a href="https://wa.me/6283818002959" target="_blank" class="w-12 h-12 bg-[#141417] border border-gray-800 rounded-lg flex items-center justify-center text-xl text-gray-300 hover:text-green-400 hover:border-green-500 hover:shadow-[0_0_15px_rgba(34,197,94,0.4)] transition-all">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Mini Game -->
                <div class="bg-[#141417] border border-gray-800 p-8 reveal shadow-2xl font-mono">
                    <div class="flex justify-between items-center mb-4 border-b border-gray-800 pb-3">
                        <span class="text-xs text-blue-400 tracking-wider"><i class="fa-solid fa-gamepad"></i> MINI_GAME://GUESS_NUMBER</span>
                        <span class="text-xs text-green-500 animate-pulse">ONLINE</span>
                    </div>
                    
                    <p class="text-xs text-gray-400 mb-6">
                        Sistem mendeteksi akses baru. Tebak angka rahasia antara <span class="text-white font-bold">1 sampai 10</span> untuk bypass sistem!
                    </p>

                    <div class="space-y-4">
                        <div>
                            <input type="number" id="userGuess" min="1" max="10" placeholder="Masukkan angka (1-10)..." class="w-full bg-[#0a0a0a] border border-gray-700 focus:border-blue-500 outline-none px-4 py-3 text-white text-sm transition-all">
                        </div>
                        <button onclick="playMiniGame()" class="bg-blue-600 text-white px-6 py-3 text-xs font-bold tracking-widest flex items-center justify-center gap-2 hover:bg-blue-500 transition-all w-full cursor-pointer">
                            SUBMIT GUESS <i class="fa-solid fa-terminal"></i>
                        </button>
                        
                        <div id="gameResult" class="p-3 bg-[#0a0a0a] border border-gray-800 text-xs text-gray-300 min-h-[45px] flex items-center justify-center text-center">
                            > Menunggu tebakan angka dari user...
                        </div>
                    </div>
                </div>

            </div>
        </section>
        
        <!-- Footer -->
        <footer class="border-t border-gray-800 py-6 text-center text-gray-500 text-xs font-mono tracking-widest uppercase">
            &copy; {{ date('Y') }} {{ $nama_lengkap }} // ALL RIGHTS RESERVED
        </footer>
    </div>

    <!-- ================= FLOATING MUSIC PLAYER WIDGET ================= -->
    <div id="musicWidget" class="fixed bottom-6 right-6 z-[150] bg-[#141417]/90 backdrop-blur-md border border-gray-800 px-4 py-3 rounded-full shadow-2xl hidden items-center gap-3 font-mono text-xs text-gray-300">
        <div class="flex items-center gap-2">
            <i class="fa-solid fa-music text-blue-400 animate-bounce"></i>
            <span id="musicStatus" class="tracking-widest">OST // SO BAD - StayC</span>
        </div>
        <button onclick="toggleMusic()" id="musicBtn" class="bg-blue-600 hover:bg-blue-500 text-white w-8 h-8 rounded-full flex items-center justify-center transition-all cursor-pointer shadow-[0_0_10px_rgba(59,130,246,0.5)]">
            <i id="musicIcon" class="fa-solid fa-play ml-0.5"></i>
        </button>
    </div>

    <!-- Script Utama -->
    <script>
        const secretNumber = Math.floor(Math.random() * 10) + 1;

        function playMiniGame() {
            const userGuess = parseInt(document.getElementById('userGuess').value);
            const resultBox = document.getElementById('gameResult');

            if (!userGuess || userGuess < 1 || userGuess > 10) {
                resultBox.innerHTML = "<span class='text-yellow-500'>[!] Masukkan angka valid antara 1 sampai 10!</span>";
                return;
            }

            if (userGuess === secretNumber) {
                resultBox.innerHTML = "<span class='text-green-400 font-bold'>[SUCCESS] JACKPOT! Angka benar! Akses portofolio disetujui. 🎉</span>";
            } else if (userGuess < secretNumber) {
                resultBox.innerHTML = "<span class='text-blue-400'>[HINT] Angka terlalu KECIL! Coba lagi.</span>";
            } else {
                resultBox.innerHTML = "<span class='text-purple-400'>[HINT] Angka terlalu BESAR! Coba lagi.</span>";
            }
        }

        const music = document.getElementById('bgMusic');
        const musicBtn = document.getElementById('musicIcon');
        const musicStatus = document.getElementById('musicStatus');
        let isPlaying = false;
        let fadeInterval;

        function toggleMusic() {
            if (!isPlaying) {
                music.volume = 0;
                music.play();
                isPlaying = true;
                musicBtn.className = "fa-solid fa-pause";
                musicStatus.innerText = "PLAYING // ON_AIR";
                
                let vol = 0;
                clearInterval(fadeInterval);
                fadeInterval = setInterval(() => {
                    if (vol < 1) {
                        vol += 0.1;
                        music.volume = Math.min(vol, 1);
                    } else {
                        clearInterval(fadeInterval);
                    }
                }, 100);

            } else {
                let vol = music.volume;
                clearInterval(fadeInterval);
                fadeInterval = setInterval(() => {
                    if (vol > 0.1) {
                        vol -= 0.1;
                        music.volume = Math.max(vol, 0);
                    } else {
                        clearInterval(fadeInterval);
                        music.pause();
                        isPlaying = false;
                        musicBtn.className = "fa-solid fa-play ml-0.5";
                        musicStatus.innerText = "OST // CYBER_BEAT";
                    }
                }, 100);
            }
        }

        function masukWeb() {
            const bootScreen = document.getElementById('boot-screen');
            const mainContent = document.getElementById('main-content');
            const musicWidget = document.getElementById('musicWidget');
            
            bootScreen.style.opacity = '0';
            
            // OTOMATIS PLAY MUSIK PAS MASUK WEB DENGAN FADE IN
            music.volume = 0;
            music.play().then(() => {
                isPlaying = true;
                musicBtn.className = "fa-solid fa-pause";
                musicStatus.innerText = "PLAYING // ON_AIR";
                
                let vol = 0;
                clearInterval(fadeInterval);
                fadeInterval = setInterval(() => {
                    if (vol < 1) {
                        vol += 0.1;
                        music.volume = Math.min(vol, 1);
                    } else {
                        clearInterval(fadeInterval);
                    }
                }, 100);
            }).catch(e => {
                console.log("Autoplay blocked by browser policy, user can click play manually.");
            });

            setTimeout(() => {
                bootScreen.remove(); 
                mainContent.classList.remove('hidden');
                musicWidget.classList.remove('hidden');
                musicWidget.classList.add('flex');
                
                setTimeout(() => {
                    mainContent.classList.remove('opacity-0');
                    initScrollAnimations();
                }, 50);
            }, 500);
        }

        // ANIMASI DINAMIS (BISA MUNCUL LAGI SAAT DI-SCROLL BOLAK-BALIK)
        function initScrollAnimations() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        const skillBars = entry.target.querySelectorAll('.skill-bar-fill');
                        skillBars.forEach(bar => { 
                            bar.style.width = bar.getAttribute('data-width'); 
                        });
                    } else {
                        // Kalau elemen keluar layar (scroll ke atas), hapus kelas active supaya bisa animasi ulang pas di-scroll ke bawah lagi!
                        entry.target.classList.remove('active');
                    }
                });
            }, { threshold: 0.15 });

            document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
        }
    </script>
</body>
</html>