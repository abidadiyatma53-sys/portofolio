<?php
// Konfigurasi Data Portofolio & Proyek
$profil = [
    "nama" => "Abid Adiyatma",
    "inisial" => "AA",
    "gelar" => "Business Intelligence Analyst",
    "spesialisasi" => "Certified Business Intelligence Analyst & Data Specialist yang berfokus pada web scraping, otomatisasi proses, dan kualitas data industri.",
    "lokasi" => "Kota Tangerang, Indonesia",
    "whatsapp" => "6281285252088",
    "email" => "abidadiyatma53@gmail.com",
    "instagram" => "adiyatma.abid"
];

$statistik = [
    ["angka" => "3+", "label" => "Experience", "warna" => "text-white"],
    ["angka" => "4", "label" => "Services", "warna" => "text-blue-400"],
    ["angka" => "4+", "label" => "Projects", "warna" => "text-purple-400"],
    ["angka" => "10", "label" => "Certs", "warna" => "text-green-400"],
    ["angka" => "92", "label" => "Score", "warna" => "text-pink-400"]
];
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $profil['nama']; ?> - <?php echo $profil['gelar']; ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkBg: '#0b0f19',
                        cardBg: '#131c2e',
                        borderDark: '#1e293b',
                        accentBlue: '#3b82f6',
                        accentPurple: '#8b5cf6',
                    }
                }
            }
        }
    </script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b0f19; color: #f3f4f6; }
        .glass-nav { background: rgba(11, 15, 25, 0.9); backdrop-filter: blur(12px); }
        .project-card:hover .project-img { transform: scale(1.03); }
    </style>
</head>
<body class="antialiased selection:bg-blue-500 selection:text-white">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass-nav border-b border-borderDark">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
           <a href="#home" class="flex items-center hover:opacity-80 transition">
    <img src="logo.jpg" alt="Logo Abid Adiyatma" class="w-9 h-9 rounded-full object-cover border border-borderDark bg-cardBg">
</a>
            <div class="hidden lg:flex items-center space-x-6 text-xs font-medium text-gray-400">
                <a href="#home" class="hover:text-white transition">Beranda</a>
                <a href="#skills" class="hover:text-white transition">Keahlian</a>
                <a href="#projects" class="hover:text-white transition">Proyek</a>
                <a href="#experience" class="hover:text-white transition">Pengalaman</a>
                <a href="#education" class="hover:text-white transition">Pendidikan</a>
                <a href="#achievements" class="hover:text-white transition">Pencapaian</a>
                <a href="#testimonials" class="hover:text-white transition">Testimoni</a>
            </div>
            <div class="flex items-center gap-3">
                <a href="cv.pdf" download class="px-3.5 py-1.5 rounded-lg bg-cardBg border border-borderDark text-xs font-semibold text-gray-200 hover:bg-gray-800 hover:border-blue-500 transition flex items-center gap-1.5">
    <i class="fa-solid fa-file-arrow-down text-blue-400"></i> Unduh Resume
</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION (UKURAN DIPERBESAR) -->
    <section id="home" class="bg-[#0b0f19] text-white pt-28 pb-20 px-6 max-w-7xl mx-auto font-sans">
        <!-- Banner Gambar Header (Lebih Besar & Luas) -->
        <!-- Banner Gambar Header -->
        <div class="relative w-full h-[320px] md:h-[400px] rounded-3xl overflow-hidden mb-20 border border-borderDark bg-cardBg flex flex-col items-center justify-center text-center p-8 md:p-16 shadow-2xl">
            
            <!-- GAMBAR BACKGROUND (Ganti 'bg-banner.jpg' dengan nama file gambar Anda) -->
            <div class="absolute inset-0 bg-cover bg-center opacity-60" style="background-image: url('bg-banner.jpg');"></div>
            
            <!-- OVERLAY TRANSPARANSI (Diubah dari /80 dan /90 menjadi /40 dan /60 agar background lebih terang) -->
            <div class="absolute inset-0 bg-gradient-to-b from-cardBg/40 via-[#0b0f19]/60 to-[#0b0f19] z-10"></div>
            
            <!-- Efek Cahaya Tambahan (Opsional, bisa dihapus jika ingin polos) -->
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-blue-500/20 via-transparent to-transparent pointer-events-none z-10"></div>
            
            <!-- Konten Teks Banner -->
            <h1 class="relative z-20 text-3xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-white mb-3">
                Analyze<span class="text-blue-500">.</span>Optimize<span class="text-purple-500">.</span>Deliver<span class="text-pink-500">.</span>
            </h1>
            <p class="relative z-20 text-xs sm:text-sm text-gray-300 max-w-2xl mx-auto leading-relaxed">
                <?php echo $profil['spesialisasi']; ?>
            </p>
        </div>

        <!-- Bagian Profil & Statistik (Diperbesar) -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-10 -mt-36 md:-mt-44 relative z-30">
            <div class="flex flex-col md:flex-row items-start md:items-end gap-8">
                <div class="w-56 h-56 md:w-64 md:h-64 rounded-3xl p-1 bg-gradient-to-b from-neutral-700 to-neutral-900 shadow-2xl border border-borderDark overflow-hidden bg-cardBg flex-shrink-0">
                    <img src="abid.jpeg" alt="<?php echo $profil['nama']; ?>" class="w-full h-full object-cover rounded-2xl" onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80'">
                </div>
                <div class="mb-3">
                    <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight text-white mb-2">
                        <?php echo $profil['nama']; ?>
                    </h2>
                    <p class="text-blue-400 font-semibold text-base md:text-lg mb-3">
                        <?php echo $profil['gelar']; ?>
                    </p>
                    <a href="https://maps.google.com/?q=Kota+Tangerang" target="_blank" class="text-gray-300 text-sm md:text-base flex items-center gap-2 hover:text-blue-400 transition">
                        <i class="fa-solid fa-location-dot text-gray-400"></i>
                        <?php echo $profil['lokasi']; ?>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-5 gap-4 md:gap-8 border border-borderDark bg-cardBg/95 backdrop-blur-md px-8 py-6 rounded-3xl shadow-2xl">
                <?php foreach ($statistik as $stat): ?>
                <div class="text-center">
                    <p class="text-gray-400 text-xs md:text-sm mb-1 uppercase tracking-wider font-semibold"><?php echo $stat['label']; ?></p>
                    <p class="text-2xl md:text-3xl font-extrabold <?php echo $stat['warna']; ?>"><?php echo $stat['angka']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-10 max-w-5xl">
            <p class="text-gray-300 text-sm sm:text-base leading-relaxed">
                Business Intelligence Analyst bersertifikasi resmi BNSP dengan keahlian mendalam di bidang web scraping Python, analisis data, dan web development. Berpengalaman dalam menerjemahkan data mentah serta kebutuhan bisnis ke dalam wawasan strategis dan sistem berbasis web yang berkualitas tinggi, serta menjembatani kolaborasi efektif antara pengolahan data, teknis pemrograman, dan kebutuhan operasional.
            </p>
        </div>
    </section>

    <!-- SKILLS & SERVICES (Aesthetic & Interactive Mockups) -->
    <section id="skills" class="py-24 px-6 max-w-7xl mx-auto relative">
        <!-- Efek Background Glow Cahaya Halus -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-blue-600/10 blur-[140px] pointer-events-none rounded-full"></div>

        <div class="text-center mb-16 relative z-10">
            <span class="text-xs font-semibold px-4 py-1.5 rounded-full bg-blue-500/10 text-blue-400 border border-blue-500/20 tracking-wider uppercase">Keahlian & Layanan</span>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight mt-4">Solusi Digital & Profesional</h2>
            <p class="text-sm sm:text-base text-gray-400 mt-3 max-w-2xl mx-auto leading-relaxed">Menghadirkan layanan digital dengan standar kualitas tinggi, menggabungkan ketajaman analisis teknis dan estetika antarmuka modern.</p>
        </div>

        <!-- CSS Keyframes & Interactivity Styles -->
        <style>
            @keyframes floatGraphic {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-6px) rotate(0.3deg); }
            }
            @keyframes moveCursorSmooth {
                0%, 100% { transform: translate(0px, 0px); }
                50% { transform: translate(-25px, -15px); }
            }
            @keyframes pulseGlow {
                0%, 100% { opacity: 0.5; transform: scale(1); }
                50% { opacity: 1; transform: scale(1.02); }
            }
            .svg-float {
                animation: floatGraphic 5s ease-in-out infinite;
            }
            .cursor-anim {
                animation: moveCursorSmooth 3.5s ease-in-out infinite;
            }
            .pulse-anim {
                animation: pulseGlow 2.5s ease-in-out infinite;
            }
        </style>

        <!-- Grid 3 Kolom Utama dengan Card Aesthetic Glassmorphism -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">
            
            <!-- Card 1: Business Intelligence -->
            <div class="bg-gradient-to-b from-[#181b25] to-[#11131a] border border-white/10 hover:border-blue-500/50 p-8 rounded-[28px] flex flex-col justify-between shadow-[0_10px_30px_rgba(0,0,0,0.5)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(59,130,246,0.15)] group">
                <div>
                    <!-- Ilustrasi Mockup Vektor Aesthetic ala Referensi -->
                    <div class="w-full h-48 rounded-2xl overflow-hidden mb-6 border border-white/10 bg-[#090b10] flex items-center justify-center p-3 relative group-hover:border-blue-500/40 transition-all duration-500 shadow-2xl">
                        <svg class="w-full h-full svg-float drop-shadow-lg" viewBox="0 0 280 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Window Container Frame -->
                            <rect width="280" height="160" rx="12" fill="#0e1117" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                            <!-- Window Header Dots -->
                            <circle cx="20" cy="16" r="4" fill="#ef4444"/>
                            <circle cx="32" cy="16" r="4" fill="#f59e0b"/>
                            <circle cx="44" cy="16" r="4" fill="#10b981"/>
                            <!-- Inner Content Blocks (Sesuai Referensi Gambar) -->
                            <rect x="20" y="32" width="110" height="55" rx="8" fill="#161b22" stroke="rgba(255,255,255,0.04)"/>
                            <rect x="145" y="32" width="115" height="30" rx="6" fill="#161b22" stroke="rgba(255,255,255,0.04)"/>
                            <rect x="145" y="70" width="80" height="17" rx="4" fill="#161b22" stroke="rgba(255,255,255,0.04)"/>
                            <rect x="145" y="95" width="115" height="42" rx="8" fill="#161b22" stroke="rgba(255,255,255,0.04)"/>
                            <!-- Animated Bar Charts -->
                            <rect x="32" y="105" width="22" height="32" rx="4" fill="#3b82f6" fill-opacity="0.8"/>
                            <rect class="pulse-anim" x="62" y="85" width="22" height="52" rx="4" fill="#3b82f6"/>
                            <rect x="92" y="115" width="22" height="22" rx="4" fill="#93c5fd" fill-opacity="0.8"/>
                            <!-- Interactive Mouse Cursor -->
                            <g class="cursor-anim" transform="translate(180, 85)">
                                <path d="M0 0L14 14L8 15L5 20L2 18L5 13L0 10Z" fill="#ffffff" stroke="#3b82f6" stroke-width="1.5"/>
                            </g>
                        </svg>
                    </div>
                    <span class="inline-block text-[11px] font-bold px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 mb-4 border border-blue-500/20 tracking-wide">Expert Level</span>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-blue-400 transition-colors">Business Intelligence & Data Analysis</h3>
                    <p class="text-xs text-gray-400 leading-relaxed mb-8">Analisis data mendalam, visualisasi laporan strategis, dan pengambilan keputusan berbasis data bisnis.</p>
                </div>
                <div class="flex flex-wrap gap-2 pt-4 border-t border-white/5 text-[11px] text-gray-300">
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">BNSP Certified</span>
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">Pandas</span>
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">Excel / Sheets</span>
                </div>
            </div>

            <!-- Card 2: Web Scraping & Automation -->
            <div class="bg-gradient-to-b from-[#181b25] to-[#11131a] border border-white/10 hover:border-purple-500/50 p-8 rounded-[28px] flex flex-col justify-between shadow-[0_10px_30px_rgba(0,0,0,0.5)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(168,85,247,0.15)] group">
                <div>
                    <div class="w-full h-48 rounded-2xl overflow-hidden mb-6 border border-white/10 bg-[#090b10] flex items-center justify-center p-3 relative group-hover:border-purple-500/40 transition-all duration-500 shadow-2xl">
                        <svg class="w-full h-full svg-float drop-shadow-lg" viewBox="0 0 280 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="280" height="160" rx="12" fill="#0e1117" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                            <circle cx="20" cy="16" r="4" fill="#ef4444"/>
                            <circle cx="32" cy="16" r="4" fill="#f59e0b"/>
                            <circle cx="44" cy="16" r="4" fill="#10b981"/>
                            <!-- Code Editor UI Mockup -->
                            <rect x="20" y="32" width="100" height="10" rx="3" fill="#a855f7" fill-opacity="0.6"/>
                            <rect x="20" y="52" width="160" height="6" rx="2" fill="currentColor" fill-opacity="0.2"/>
                            <rect x="35" y="68" width="130" height="6" rx="2" fill="currentColor" fill-opacity="0.15"/>
                            <rect class="pulse-anim" x="30" y="85" width="140" height="26" rx="6" stroke="#a855f7" stroke-width="1.5" stroke-dasharray="4 2" fill="#a855f7" fill-opacity="0.12"/>
                            <circle cx="225" cy="98" r="18" fill="#161b22" stroke="rgba(168,85,247,0.3)"/>
                            <path d="M219 98H231M225 92V104" stroke="#a855f7" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span class="inline-block text-[11px] font-bold px-3 py-1 rounded-full bg-purple-500/10 text-purple-400 mb-4 border border-purple-500/20 tracking-wide">Expert Level</span>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">Web Scraping & Automation</h3>
                    <p class="text-xs text-gray-400 leading-relaxed mb-8">Pengembangan script Python otomatis untuk ekstraksi data produk massal dari platform seperti INAPROC.</p>
                </div>
                <div class="flex flex-wrap gap-2 pt-4 border-t border-white/5 text-[11px] text-gray-300">
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">Python</span>
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">Automation</span>
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">CSV Pipeline</span>
                </div>
            </div>

            <!-- Card 3: Web Development & IT Support -->
            <div class="bg-gradient-to-b from-[#181b25] to-[#11131a] border border-white/10 hover:border-emerald-500/50 p-8 rounded-[28px] flex flex-col justify-between shadow-[0_10px_30px_rgba(0,0,0,0.5)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(16,185,129,0.15)] group">
                <div>
                    <div class="w-full h-48 rounded-2xl overflow-hidden mb-6 border border-white/10 bg-[#090b10] flex items-center justify-center p-3 relative group-hover:border-emerald-500/40 transition-all duration-500 shadow-2xl">
                        <svg class="w-full h-full svg-float drop-shadow-lg" viewBox="0 0 280 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="280" height="160" rx="12" fill="#0e1117" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                            <circle cx="20" cy="16" r="4" fill="#ef4444"/>
                            <circle cx="32" cy="16" r="4" fill="#f59e0b"/>
                            <circle cx="44" cy="16" r="4" fill="#10b981"/>
                            <rect x="20" y="32" width="240" height="30" rx="6" fill="#161b22" stroke="rgba(255,255,255,0.04)"/>
                            <rect x="32" y="43" width="60" height="8" rx="3" fill="#10b981" fill-opacity="0.8"/>
                            <!-- Interactive Card Grid Layout -->
                            <rect class="pulse-anim" x="20" y="75" width="74" height="65" rx="8" fill="#10b981" fill-opacity="0.15" stroke="#10b981" stroke-width="1"/>
                            <rect x="103" y="75" width="74" height="65" rx="8" fill="#161b22" stroke="rgba(255,255,255,0.04)"/>
                            <rect x="186" y="75" width="74" height="65" rx="8" fill="#161b22" stroke="rgba(255,255,255,0.04)"/>
                        </svg>
                    </div>
                    <span class="inline-block text-[11px] font-bold px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 mb-4 border border-emerald-500/20 tracking-wide">Intermediate</span>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-emerald-400 transition-colors">Web Development & IT Support</h3>
                    <p class="text-xs text-gray-400 leading-relaxed mb-8">Pengembangan website fungsional (profil sekolah & coffee shop) serta pengajaran teknologi dasar.</p>
                </div>
                <div class="flex flex-wrap gap-2 pt-4 border-t border-white/5 text-[11px] text-gray-300">
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">PHP / HTML</span>
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">TailwindCSS</span>
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">Teaching</span>
                </div>
            </div>

            <!-- Card 4: Database & Quality Control -->
            <div class="bg-gradient-to-b from-[#181b25] to-[#11131a] border border-white/10 hover:border-pink-500/50 p-8 rounded-[28px] flex flex-col justify-between shadow-[0_10px_30px_rgba(0,0,0,0.5)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(236,72,153,0.15)] group">
                <div>
                    <div class="w-full h-48 rounded-2xl overflow-hidden mb-6 border border-white/10 bg-[#090b10] flex items-center justify-center p-3 relative group-hover:border-pink-500/40 transition-all duration-500 shadow-2xl">
                        <svg class="w-full h-full svg-float drop-shadow-lg" viewBox="0 0 280 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Window Container Frame -->
                            <rect width="280" height="160" rx="12" fill="#0e1117" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                            <!-- Window Header Dots -->
                            <circle cx="20" cy="16" r="4" fill="#ef4444"/>
                            <circle cx="32" cy="16" r="4" fill="#f59e0b"/>
                            <circle cx="44" cy="16" r="4" fill="#10b981"/>
                            
                            <!-- Database Cylinder Layers (Diposisikan Pasti di Tengah) -->
                            <!-- Database Cylinder Layers -->
<g transform="translate(90, 45)">
    <g class="pulse-anim">
        <ellipse cx="50" cy="15" rx="45" ry="13" fill="#ec4899" fill-opacity="0.35"/>
        
        <path 
            d="M5 15V52C5 59.5 24.5 65 50 65C75.5 65 95 59.5 95 52V15" 
            fill="#161b22" 
            stroke="rgba(255,255,255,0.08)"
        />
        
        <path 
            d="M5 52C5 59.5 24.5 65 50 65C75.5 65 95 59.5 95 52" 
            stroke="#ec4899" 
            stroke-width="2"
        />
    </g>
</g>
                        </svg>
                    </div>
                    <span class="inline-block text-[11px] font-bold px-3 py-1 rounded-full bg-pink-500/10 text-pink-400 mb-4 border border-pink-500/20 tracking-wide">Specialist</span>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-pink-400 transition-colors">Database & Quality Control</h3>
                    <p class="text-xs text-gray-400 leading-relaxed mb-8">Manajemen basis data, verifikasi mutu, dan validasi kebersihan data industri agar bebas dari galat.</p>
                </div>
                <div class="flex flex-wrap gap-2 pt-4 border-t border-white/5 text-[11px] text-gray-300">
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">SQL / DB</span>
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">Data Quality</span>
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">Testing</span>
                </div>
            </div>

            <!-- Card 5: Microsoft Office & Reporting (Wide Span) -->
            <div class="bg-gradient-to-b from-[#181b25] to-[#11131a] border border-white/10 hover:border-amber-500/50 p-8 rounded-[28px] flex flex-col justify-between shadow-[0_10px_30px_rgba(0,0,0,0.5)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(245,158,11,0.15)] group md:col-span-2 lg:col-span-2">
                <div>
                    <div class="w-full h-48 rounded-2xl overflow-hidden mb-6 border border-white/10 bg-[#090b10] flex items-center justify-center p-3 relative group-hover:border-amber-500/40 transition-all duration-500 shadow-2xl">
                        <svg class="w-full h-full svg-float drop-shadow-lg" viewBox="0 0 280 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="280" height="160" rx="12" fill="#0e1117" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                            <circle cx="20" cy="16" r="4" fill="#ef4444"/>
                            <circle cx="32" cy="16" r="4" fill="#f59e0b"/>
                            <circle cx="44" cy="16" r="4" fill="#10b981"/>
                            <!-- Spreadsheet Table Cells Grid -->
                            <rect x="20" y="32" width="240" height="105" rx="8" fill="#161b22" stroke="rgba(255,255,255,0.04)"/>
                            <line x1="20" y1="62" x2="260" y2="62" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                            <line x1="20" y1="96" x2="260" y2="96" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                            <line x1="110" y1="32" x2="110" y2="137" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                            <line x1="185" y1="32" x2="185" y2="137" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
                            <!-- Active Highlight Cell -->
                            <rect class="pulse-anim" x="111" y="63" width="73" height="32" rx="4" fill="#f59e0b" fill-opacity="0.25" stroke="#f59e0b" stroke-width="1.5"/>
                            <rect x="32" y="43" width="60" height="8" rx="3" fill="#f59e0b" fill-opacity="0.8"/>
                        </svg>
                    </div>
                    <span class="inline-block text-[11px] font-bold px-3 py-1 rounded-full bg-amber-500/10 text-amber-400 mb-4 border border-amber-500/20 tracking-wide">Advanced</span>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-amber-400 transition-colors">Microsoft Office & Reporting</h3>
                    <p class="text-xs sm:text-sm text-gray-400 leading-relaxed mb-8">Pengelolaan dokumen profesional, spreadsheet lanjutan (VLOOKUP, Pivot, Formula), serta presentasi eksekutif.</p>
                </div>
                <div class="flex flex-wrap gap-2 pt-4 border-t border-white/5 text-[11px] text-gray-300">
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">MS Excel</span>
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">Word & PPT</span>
                    <span class="px-3 py-1.5 bg-[#141721] rounded-xl border border-white/5">Administration</span>
                </div>
            </div>

        </div>
    </section>

    <!-- SHOWCASE KARYA TERBAIK -->
<section id="projects" class="py-20 px-6 max-w-7xl mx-auto">
    <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-semibold mb-3">
            <span>✨</span> Showcase karya terbaik saya
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Portofolio & Proyek Unggulan</h2>
        <p class="text-xs sm:text-sm text-gray-400 mt-2 max-w-xl mx-auto">Implementasi nyata web development, otomatisasi data, dan kontrol kualitas industri.</p>
    </div>

    <!-- Kontainer Grid dengan gap-8 untuk spasi horizontal dan vertikal -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Project 1: Website Resmi MI Nurul Falah Pinang -->
        <div class="bg-cardBg border border-borderDark hover:border-blue-500/50 p-8 rounded-3xl flex flex-col justify-between shadow-2xl transition-all duration-300 group">
            <div>
                <div class="w-full h-44 rounded-2xl overflow-hidden mb-6 border border-borderDark relative bg-darkBg">
                    <img src="mi-nurulfalah.jpg" alt="Website MI Nurul Falah" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" onerror="this.src='https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=600&q=80'">
                    <div class="absolute inset-0 bg-blue-900/20 mix-blend-overlay"></div>
                </div>
                <span class="text-[10px] font-bold px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 uppercase tracking-widest">Web Profile</span>
                <h3 class="text-lg font-bold text-white mt-4 mb-3">Website Resmi MI Nurul Falah Pinang</h3>
                <p class="text-xs sm:text-sm text-gray-400 leading-relaxed mb-8">Platform web profil sekolah untuk media informasi akademik, profil lembaga, dan kegiatan siswa di lingkungan madrasah.</p>
            </div>
            <div>
                <div class="flex flex-wrap gap-1.5 mb-5 text-[11px] text-gray-300">
                    <span class="px-2.5 py-1 bg-darkBg rounded-lg border border-borderDark">PHP / HTML</span>
                    <span class="px-2.5 py-1 bg-darkBg rounded-lg border border-borderDark">Web Profile</span>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-borderDark text-xs font-medium">
                    <span class="text-gray-400">Live Preview</span>
                    <a href="https://minurulfalahpinang.web.id/" target="_blank" class="text-blue-400 hover:text-blue-300 flex items-center gap-1 font-semibold">Kunjungi <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </div>
        </div>

        <!-- Project 2: Pinggir Coffee Web Profile -->
        <div class="bg-cardBg border border-borderDark hover:border-amber-500/50 p-8 rounded-3xl flex flex-col justify-between shadow-2xl transition-all duration-300 group">
            <div>
                <div class="w-full h-44 rounded-2xl overflow-hidden mb-6 border border-borderDark relative bg-darkBg">
                    <img src="pinggir-coffee.jpg" alt="Pinggir Coffee" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" onerror="this.src='https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=600&q=80'">
                    <div class="absolute inset-0 bg-amber-900/20 mix-blend-overlay"></div>
                </div>
                <span class="text-[10px] font-bold px-3 py-1 rounded-full bg-amber-500/10 text-amber-400 uppercase tracking-widest">F&B Profile</span>
                <h3 class="text-lg font-bold text-white mt-4 mb-3">Pinggir Coffee Web Profile</h3>
                <p class="text-xs sm:text-sm text-gray-400 leading-relaxed mb-8">Website interaktif untuk coffee shop yang menyajikan informasi menu, suasana, dan lokasi kafe secara elegan.</p>
            </div>
            <div>
                <div class="flex flex-wrap gap-1.5 mb-5 text-[11px] text-gray-300">
                    <span class="px-2.5 py-1 bg-darkBg rounded-lg border border-borderDark">HTML / CSS</span>
                    <span class="px-2.5 py-1 bg-darkBg rounded-lg border border-borderDark">Responsive</span>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-borderDark text-xs font-medium">
                    <span class="text-gray-400">Live Preview</span>
                    <a href="http://pinggircoffee.site.je/" target="_blank" class="text-amber-400 hover:text-amber-300 flex items-center gap-1 font-semibold">Kunjungi <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </div>
        </div>

        <!-- Project 3: INAPROC Product Data Scraper -->
<div class="bg-cardBg border border-borderDark hover:border-purple-500/50 p-8 rounded-3xl flex flex-col justify-between shadow-2xl transition-all duration-300 group">
    <div>
        <div class="w-full h-44 rounded-2xl overflow-hidden mb-6 border border-borderDark relative bg-darkBg">
            <!-- Ganti src dengan nama file gambar web scraping -->
            <img src="webscraping.jpeg" alt="INAPROC Scraper" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-purple-900/20 mix-blend-overlay"></div>
        </div>
        <span class="text-[10px] font-bold px-3 py-1 rounded-full bg-purple-500/10 text-purple-400 uppercase tracking-widest">Automation</span>
        <h3 class="text-lg font-bold text-white mt-4 mb-3">INAPROC Product Data Scraper</h3>
        <p class="text-xs sm:text-sm text-gray-400 leading-relaxed mb-8">Pengembangan script Python otomatis untuk mengekstrak informasi produk secara massal dari platform INAPROC.</p>
    </div>
    <div>
        <div class="flex flex-wrap gap-1.5 mb-5 text-[11px] text-gray-300">
            <span class="px-2.5 py-1 bg-darkBg rounded-lg border border-borderDark">Python</span>
            <span class="px-2.5 py-1 bg-darkBg rounded-lg border border-borderDark">Web Scraping</span>
        </div>
        <div class="flex items-center justify-between pt-4 border-t border-borderDark text-xs font-medium">
            <span class="text-gray-400 text-[11px]">PT. Sarling Aneka Energi</span>
            <span class="text-purple-400 font-bold">2025</span>
        </div>
    </div>
</div>

<!-- Project 4: Data Quality Control & Spreadsheet -->
<div class="bg-cardBg border border-borderDark hover:border-pink-500/50 p-8 rounded-3xl flex flex-col justify-between shadow-2xl transition-all duration-300 group">
    <div>
        <div class="w-full h-44 rounded-2xl overflow-hidden mb-6 border border-borderDark relative bg-darkBg">
            <!-- Ganti src dengan nama file gambar data analysis -->
            <img src="dataanalis.jpg" alt="Data Quality Control" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-pink-900/20 mix-blend-overlay"></div>
        </div>
        <span class="text-[10px] font-bold px-3 py-1 rounded-full bg-pink-500/10 text-pink-400 uppercase tracking-widest">Data Specialist</span>
        <h3 class="text-lg font-bold text-white mt-4 mb-3">Data Quality Control & Spreadsheet</h3>
        <p class="text-xs sm:text-sm text-gray-400 leading-relaxed mb-8">Validasi data mentah CSV menggunakan Pandas dan Spreadsheet perusahaan untuk menjamin keakuratan data industri secara optimal.</p>
    </div>
    <div>
        <div class="flex flex-wrap gap-1.5 mb-5 text-[11px] text-gray-300">
            <span class="px-2.5 py-1 bg-darkBg rounded-lg border border-borderDark">Pandas</span>
            <span class="px-2.5 py-1 bg-darkBg rounded-lg border border-borderDark">CSV Processing</span>
        </div>
        <div class="flex items-center justify-between pt-4 border-t border-borderDark text-xs font-medium">
            <span class="text-gray-400 text-[11px]">PT. Sarling Aneka Energi</span>
            <span class="text-pink-400 font-bold">2025</span>
        </div>
    </div>
</div>
</section>

    <!-- WORK EXPERIENCE -->
    <section id="experience" class="py-20 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Pengalaman Kerja</h2>
            <p class="text-xs sm:text-sm text-gray-400 mt-2">Jejak profesional dan pengalaman kerja di bidang industri teknologi serta pendidikan.</p>
        </div>

        <div class="space-y-6 max-w-5xl mx-auto">
            <!-- Exp 1 -->
            <div class="bg-cardBg border border-borderDark p-8 rounded-3xl shadow-xl relative">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-5 gap-3">
                    <div>
                        <h3 class="text-xl font-bold text-white">Quality Control Staff</h3>
                        <p class="text-xs text-blue-400 font-medium mt-1">PT. Sariling Aneka Energi • Magang Industri</p>
                    </div>
                    <span class="px-4 py-1.5 bg-blue-500/10 text-blue-400 rounded-full text-xs font-semibold">08 Apr 2025 – 08 Jul 2025</span>
                </div>
                <ul class="space-y-2.5 text-sm text-gray-300 list-disc list-inside leading-relaxed">
                    <li>Menyelesaikan program magang industri dengan predikat kelulusan <strong>Sangat Baik</strong> (Nilai Rata-rata Akhir: 92,00).</li>
                    <li>Melakukan validasi mutu dan verifikasi data hasil ekstraksi secara ketat guna memastikan kesesuaian spesifikasi produk industri.</li>
                    <li>Menerapkan sistem kontrol kualitas data berbasis digital menggunakan spreadsheet perusahaan untuk meminimalisir kesalahan pelaporan (*zero-error*).</li>
                </ul>
            </div>

            <!-- Exp 2 -->
            <div class="bg-cardBg border border-borderDark p-8 rounded-3xl shadow-xl relative">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-5 gap-3">
                    <div>
                        <h3 class="text-xl font-bold text-white">Team Support</h3>
                        <p class="text-xs text-purple-400 font-medium mt-1">PT. Sariling Aneka Energi • Magang Industri</p>
                    </div>
                    <span class="px-4 py-1.5 bg-purple-500/10 text-purple-400 rounded-full text-xs font-semibold">08 Apr 2025 – 08 Jul 2025</span>
                </div>
                <ul class="space-y-2.5 text-sm text-gray-300 list-disc list-inside leading-relaxed">
                    <li>Merancang dan mengoperasikan script otomatisasi berbasis **Python** untuk melakukan ekstraksi data produk secara massal (*web scraping*) dari platform pengadaan nasional **INAPROC**.</li>
                    <li>Mengelola pipeline pengolahan data mentah ke dalam format CSV serta melakukan pembersihan data (*data cleaning*) secara sistematis menggunakan pustaka **Pandas**.</li>
                    <li>Mendukung kebutuhan operasional tim harian dalam penyiapan dokumen dan rekapitulasi data digital untuk mempercepat proses administrasi perusahaan.</li>
                </ul>
            </div>

            <!-- Exp 3 -->
            <div class="bg-cardBg border border-borderDark p-8 rounded-3xl shadow-xl relative">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-5 gap-3">
                    <div>
                        <h3 class="text-xl font-bold text-white">Pengajar / Guru Komputer</h3>
                        <p class="text-xs text-emerald-400 font-medium mt-1">MI Nurul Falah • Profesional / Pengabdian</p>
                    </div>
                    <span class="px-4 py-1.5 bg-emerald-500/10 text-emerald-400 rounded-full text-xs font-semibold">3 Tahun Pengalaman</span>
                </div>
                <ul class="space-y-2.5 text-sm text-gray-300 list-disc list-inside leading-relaxed">
                    <li>Bertanggung jawab penuh dalam merancang kurikulum dan materi pengajaran mata pelajaran Teknologi Informasi dan Komputer (TIK) bagi para siswa.</li>
                    <li>Membimbing siswa dalam memahami dasar-dasar literasi digital, pengoperasian perangkat lunak produktivitas, serta pengenalan perangkat keras komputer sejak dini secara interaktif.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- EDUCATION -->
    <section id="education" class="py-20 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Pendidikan</h2>
            <p class="text-xs sm:text-sm text-gray-400 mt-2">Riwayat pendidikan formal dari tingkat dasar hingga perguruan tinggi.</p>
        </div>

        <div class="space-y-4 max-w-5xl mx-auto">
            <!-- Univ -->
            <div class="bg-cardBg border border-borderDark p-6 rounded-3xl flex flex-col sm:flex-row items-start sm:items-center justify-between shadow-xl gap-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-600/20 text-blue-400 flex items-center justify-center text-lg font-bold flex-shrink-0">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-white text-base">Universitas Mercu Buana, Jakarta</h4>
                        <p class="text-xs text-gray-400">S1 Sistem Informasi • Fakultas Ilmu Komputer</p>
                        <p class="text-xs text-blue-400 mt-1">Fokus Studi: Analisis Data, Sistem Informasi, & Pemrograman Web</p>
                    </div>
                </div>
                <span class="px-4 py-1.5 bg-blue-500/10 text-blue-400 rounded-full text-xs font-semibold">Jul 2022 – Present</span>
            </div>

            <!-- SMA -->
            <div class="bg-cardBg border border-borderDark p-6 rounded-3xl flex flex-col sm:flex-row items-start sm:items-center justify-between shadow-xl gap-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-purple-600/20 text-purple-400 flex items-center justify-center text-lg font-bold flex-shrink-0">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-white text-base">SMA IT Daarul Rahman III</h4>
                        <p class="text-xs text-gray-400">Pendidikan Menengah Atas</p>
                    </div>
                </div>
                <span class="text-xs text-gray-400 font-semibold px-3 py-1 bg-darkBg rounded-full border border-borderDark">Alumni</span>
            </div>

            <!-- SMP -->
            <div class="bg-cardBg border border-borderDark p-6 rounded-3xl flex flex-col sm:flex-row items-start sm:items-center justify-between shadow-xl gap-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-600/20 text-emerald-400 flex items-center justify-center text-lg font-bold flex-shrink-0">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-white text-base">SMP IT Daarul Rahman III</h4>
                        <p class="text-xs text-gray-400">Pendidikan Menengah Pertama</p>
                    </div>
                </div>
                <span class="text-xs text-gray-400 font-semibold px-3 py-1 bg-darkBg rounded-full border border-borderDark">Alumni</span>
            </div>

            <!-- SD -->
            <div class="bg-cardBg border border-borderDark p-6 rounded-3xl flex flex-col sm:flex-row items-start sm:items-center justify-between shadow-xl gap-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-amber-600/20 text-amber-400 flex items-center justify-center text-lg font-bold flex-shrink-0">
                        <i class="fa-solid fa-child"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-white text-base">MI Nurul Falah</h4>
                        <p class="text-xs text-gray-400">Pendidikan Dasar</p>
                    </div>
                </div>
                <span class="text-xs text-gray-400 font-semibold px-3 py-1 bg-darkBg rounded-full border border-borderDark">Alumni</span>
            </div>

            <!-- TK -->
            <div class="bg-cardBg border border-borderDark p-6 rounded-3xl flex flex-col sm:flex-row items-start sm:items-center justify-between shadow-xl gap-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-pink-600/20 text-pink-400 flex items-center justify-center text-lg font-bold flex-shrink-0">
                        <i class="fa-solid fa-baby"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-white text-base">TK Islam Annida</h4>
                        <p class="text-xs text-gray-400">Pendidikan Anak Usia Dini</p>
                    </div>
                </div>
                <span class="text-xs text-gray-400 font-semibold px-3 py-1 bg-darkBg rounded-full border border-borderDark">Alumni</span>
            </div>
        </div>
    </section>

    <!-- ACHIEVEMENTS & CERTIFICATES -->
    <section id="achievements" class="py-20 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Pencapaian</h2>
            <p class="text-xs sm:text-sm text-gray-400 mt-2">Sertifikasi resmi BNSP, Kementerian Komunikasi dan Digital, magang industri, serta kegiatan akademik. Klik gambar sertifikat untuk memperbesar.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Sertifikat 1 -->
            <div class="bg-cardBg border border-blue-500/50 rounded-3xl overflow-hidden shadow-xl flex flex-col justify-between relative group">
                <div class="absolute top-3 right-3 z-10 px-3 py-1 bg-blue-600 text-white text-[10px] font-bold rounded-lg">UTAMA</div>
                <div class="w-full h-48 bg-darkBg border-b border-borderDark flex flex-col items-center justify-center text-blue-400 p-4 text-center">
                    <i class="fa-solid fa-file-shield text-5xl mb-2 opacity-80"></i>
                    <span class="text-sm font-bold text-white">Sertifikat BNSP</span>
                    <span class="text-xs text-gray-400 mt-1">Segera Terbit (Dalam Proses)</span>
                </div>
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <span class="text-[10px] font-semibold px-3 py-1 rounded-full bg-blue-500/20 text-blue-300">BNSP / LSP-P1 UMB</span>
                        <h4 class="font-bold text-white text-base mt-2.5">Sertifikasi Analis Intelijen Bisnis (Business Intelligence Analyst)</h4>
                        <p class="text-xs text-gray-400 mt-1.5">Uji Kompetensi: 27 Februari 2026</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-borderDark text-xs text-gray-400">
                        No. Reg: 01-1-5/273b/S.Ket/Ujikom/II/2026
                    </div>
                </div>
            </div>

            <!-- Sertifikat 2 -->
            <div class="bg-cardBg border border-borderDark rounded-3xl overflow-hidden shadow-xl flex flex-col justify-between relative group">
                <div class="cursor-pointer overflow-hidden relative h-48 bg-darkBg border-b border-borderDark" onclick="openModal('Micro Skill_page-0001.jpg', 'Micro Skill: Dampak Teknologi Digital bagi UMKM')">
                    <img src="Micro Skill_page-0001.jpg" alt="Sertifikat Micro Skill Komdigi" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.src='https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=600&q=80'">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-xs font-semibold gap-1.5">
                        <i class="fa-solid fa-magnifying-glass-plus"></i> Klik untuk memperbesar
                    </div>
                </div>
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <span class="text-[10px] font-semibold px-3 py-1 rounded-full bg-purple-500/10 text-purple-400">Komdigi / DTS 2025</span>
                        <h4 class="font-bold text-white text-base mt-2.5">Pelatihan Dampak Teknologi Digital bagi UMKM (Micro Skill)</h4>
                        <p class="text-xs text-gray-400 mt-1.5">Pusat Pengembangan Literasi Digital Komdigi (1 JP)</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-borderDark text-xs text-gray-500">
                        No: 2299735850-6977/MS/BLSDM.Komdigi/2025
                    </div>
                </div>
            </div>

            <!-- Sertifikat 3 -->
            <div class="bg-cardBg border border-borderDark rounded-3xl overflow-hidden shadow-xl flex flex-col justify-between relative group">
                <div class="cursor-pointer overflow-hidden relative h-48 bg-darkBg border-b border-borderDark" onclick="openModal('Digital Enterpreneur_page-0001.jpg', 'Pemasaran Digital Dasar - Digital Entrepreneurship Academy')">
                    <img src="Digital Enterpreneur_page-0001.jpg" alt="Sertifikat Digital Entrepreneur" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.src='https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=600&q=80'">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-xs font-semibold gap-1.5">
                        <i class="fa-solid fa-magnifying-glass-plus"></i> Klik untuk memperbesar
                    </div>
                </div>
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <span class="text-[10px] font-semibold px-3 py-1 rounded-full bg-blue-500/10 text-blue-400">Komdigi / DEA 2025</span>
                        <h4 class="font-bold text-white text-base mt-2.5">Pemasaran Digital Dasar (Digital Entrepreneurship)</h4>
                        <p class="text-xs text-gray-400 mt-1.5">Tanggal: 19 - 20 Mei 2025</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-borderDark text-xs text-gray-500">
                        No. Pendaftaran: 19610373850-234
                    </div>
                </div>
            </div>

            <!-- Sertifikat 4 -->
            <div class="bg-cardBg border border-borderDark rounded-3xl overflow-hidden shadow-xl flex flex-col justify-between relative group">
                <div class="cursor-pointer overflow-hidden relative h-48 bg-darkBg border-b border-borderDark" onclick="openModal('sertifikat kerja praktek_page-0001.jpg', 'Sertifikat Kelulusan Magang / Kerja Praktek PT Sariling Aneka Energi')">
                    <img src="sertifikat kerja praktek_page-0001.jpg" alt="Sertifikat Magang PT Sariling" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.src='https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80'">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-xs font-semibold gap-1.5">
                        <i class="fa-solid fa-magnifying-glass-plus"></i> Klik untuk memperbesar
                    </div>
                </div>
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <span class="text-[10px] font-semibold px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400">Industry Experience</span>
                        <h4 class="font-bold text-white text-base mt-2.5">Sertifikat Kelulusan Magang Industri (Predikat Sangat Baik)</h4>
                        <p class="text-xs text-gray-400 mt-1.5">PT. Sariling Aneka Energi (Nilai Rata-rata: 92.00)</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-borderDark text-xs text-gray-500">
                        Periode: 8 April 2025 – 8 Juli 2025
                    </div>
                </div>
            </div>

            <!-- Sertifikat 5 -->
            <div class="bg-cardBg border border-borderDark rounded-3xl overflow-hidden shadow-xl flex flex-col justify-between relative group">
                <div class="cursor-pointer overflow-hidden relative h-48 bg-darkBg border-b border-borderDark" onclick="openModal('sertifikat seminar kebangsaan_page-0001.jpg', 'Seminar Kebangsaan - Universitas Mercu Buana')">
                    <img src="sertifikat seminar kebangsaan_page-0001.jpg" alt="Sertifikat Seminar Kebangsaan" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.src='https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=600&q=80'">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-xs font-semibold gap-1.5">
                        <i class="fa-solid fa-magnifying-glass-plus"></i> Klik untuk memperbesar
                    </div>
                </div>
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <span class="text-[10px] font-semibold px-3 py-1 rounded-full bg-amber-500/10 text-amber-400">Universitas Mercu Buana</span>
                        <h4 class="font-bold text-white text-base mt-2.5">Seminar Kebangsaan (KAP Tahun Akademik 2022/2023)</h4>
                        <p class="text-xs text-gray-400 mt-1.5">Biro Kemahasiswaan (Batch VII)</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-borderDark text-xs text-gray-500">
                        No: 06/031 - 1795/F-Sert-KBN/X/2022
                    </div>
                </div>
            </div>

            <!-- Sertifikat 6 -->
            <div class="bg-cardBg border border-borderDark rounded-3xl overflow-hidden shadow-xl flex flex-col justify-between relative group">
                <div class="cursor-pointer overflow-hidden relative h-48 bg-darkBg border-b border-borderDark" onclick="openModal('sertifikat latihan kebangsaan_page-0001.jpg', 'Latihan Kebangsaan - Universitas Mercu Buana')">
                    <img src="sertifikat latihan kebangsaan_page-0001.jpg" alt="Sertifikat Latihan Kebangsaan" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.src='https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=600&q=80'">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-xs font-semibold gap-1.5">
                        <i class="fa-solid fa-magnifying-glass-plus"></i> Klik untuk memperbesar
                    </div>
                </div>
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <span class="text-[10px] font-semibold px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-400">Universitas Mercu Buana</span>
                        <h4 class="font-bold text-white text-base mt-2.5">Latihan Kebangsaan (KAP Tahun Akademik 2022/2023)</h4>
                        <p class="text-xs text-gray-400 mt-1.5">Biro Kemahasiswaan (Batch VII)</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-borderDark text-xs text-gray-500">
                        No: 06/031 - 1713/F-Sert-KBN/X/2022
                    </div>
                </div>
            </div>

            <!-- Sertifikat 7 -->
            <div class="bg-cardBg border border-borderDark rounded-3xl overflow-hidden shadow-xl flex flex-col justify-between relative group">
                <div class="cursor-pointer overflow-hidden relative h-48 bg-darkBg border-b border-borderDark" onclick="openModal('sertifikat anti narkoba_page-0001.jpg', 'Seminar Anti Narkoba - Universitas Mercu Buana')">
                    <img src="sertifikat anti narkoba_page-0001.jpg" alt="Sertifikat Anti Narkoba" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80'">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-xs font-semibold gap-1.5">
                        <i class="fa-solid fa-magnifying-glass-plus"></i> Klik untuk memperbesar
                    </div>
                </div>
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <span class="text-[10px] font-semibold px-3 py-1 rounded-full bg-blue-500/10 text-blue-400">Universitas Mercu Buana</span>
                        <h4 class="font-bold text-white text-base mt-2.5">Seminar Anti Narkoba (KAP Tahun Akademik 2022/2023)</h4>
                        <p class="text-xs text-gray-400 mt-1.5">Biro Kemahasiswaan (Batch VII)</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-borderDark text-xs text-gray-500">
                        No: 06/031 - 1713/F-Sert-AN/X/2022
                    </div>
                </div>
            </div>

            <!-- Sertifikat 8 -->
            <div class="bg-cardBg border border-borderDark rounded-3xl overflow-hidden shadow-xl flex flex-col justify-between relative group">
                <div class="cursor-pointer overflow-hidden relative h-48 bg-darkBg border-b border-borderDark" onclick="openModal('sertifikat character building_page-0001.jpg', 'Character Building - Universitas Mercu Buana')">
                    <img src="sertifikat character building_page-0001.jpg" alt="Sertifikat Character Building" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.src='https://images.unsplash.com/photo-1587620962725-abab7fe55159?auto=format&fit=crop&w=600&q=80'">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-xs font-semibold gap-1.5">
                        <i class="fa-solid fa-magnifying-glass-plus"></i> Klik untuk memperbesar
                    </div>
                </div>
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <span class="text-[10px] font-semibold px-3 py-1 rounded-full bg-indigo-500/10 text-indigo-400">Universitas Mercu Buana</span>
                        <h4 class="font-bold text-white text-base mt-2.5">Character Building (KAP Tahun Akademik 2022/2023)</h4>
                        <p class="text-xs text-gray-400 mt-1.5">Biro Kemahasiswaan (Batch VII)</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-borderDark text-xs text-gray-500">
                        No: 06/031 - 1771/F-Sert-CB/X/2022
                    </div>
                </div>
            </div>

            <!-- Sertifikat 9 -->
            <div class="bg-cardBg border border-borderDark rounded-3xl overflow-hidden shadow-xl flex flex-col justify-between relative group">
                <div class="cursor-pointer overflow-hidden relative h-48 bg-darkBg border-b border-borderDark" onclick="openModal('sertifikat islamic youth_page-0001.jpg', 'Islamic Youth StartupAction Youth Outlook Nasional')">
                    <img src="sertifikat islamic youth_page-0001.jpg" alt="Sertifikat Islamic Youth" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80'">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-xs font-semibold gap-1.5">
                        <i class="fa-solid fa-magnifying-glass-plus"></i> Klik untuk memperbesar
                    </div>
                </div>
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <span class="text-[10px] font-semibold px-3 py-1 rounded-full bg-pink-500/10 text-pink-400">UKMI Al-Faruq & Ayo Kreasi</span>
                        <h4 class="font-bold text-white text-base mt-2.5">Islamic Youth StartupAction Youth Outlook Nasional</h4>
                        <p class="text-xs text-gray-400 mt-1.5">Kamis, 14 Desember 2023</p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-borderDark text-xs text-gray-500">
                        No: AC. 08/002 /S.01/XII/2023
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL POPUP UNTUK MEMPERBESAR GAMBAR SERTIFIKAT -->
    <div id="imageModal" class="fixed inset-0 z-50 bg-black/85 backdrop-blur-sm hidden flex items-center justify-center p-4" onclick="closeModal()">
        <div class="relative max-w-4xl w-full bg-cardBg border border-borderDark rounded-3xl p-5 shadow-2xl overflow-hidden" onclick="event.stopPropagation()">
            <div class="flex justify-between items-center mb-3 pb-2 border-b border-borderDark">
                <h3 id="modalTitle" class="text-sm font-bold text-white">Detail Sertifikat</h3>
                <button onclick="closeModal()" class="w-8 h-8 rounded-xl bg-darkBg text-gray-400 hover:text-white flex items-center justify-center transition">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="flex justify-center bg-darkBg rounded-2xl p-2 overflow-hidden max-h-[75vh]">
                <img id="modalImage" src="" alt="Preview Sertifikat" class="object-contain max-h-[70vh] rounded-xl">
            </div>
        </div>
    </div>

    <script>
        function openModal(imageSrc, title) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            
            modalImg.src = imageSrc;
            modalTitle.innerText = title;
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>

    <!-- WHAT THEY SAY -->
    <section id="testimonials" class="py-20 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">Testimoni</h2>
            <p class="text-xs sm:text-sm text-gray-400 mt-2">Testimoni dan apresiasi rekan kerja serta mentor industri.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-cardBg border border-borderDark p-8 rounded-3xl flex flex-col justify-between shadow-xl">
                <p class="text-sm text-gray-300 leading-relaxed italic mb-8">
                    "Abid menunjukkan dedikasi yang luar biasa selama magang di PT. Sariling Aneka Energi. Hasil kerja web scraping dan validasi data kualitasnya sangat teliti dan akurat."
                </p>
                <div class="flex items-center gap-3 pt-4 border-t border-borderDark">
                    <div class="w-10 h-10 rounded-xl bg-blue-600/20 text-blue-400 flex items-center justify-center text-xs font-bold">PT</div>
                    <div>
                        <h4 class="text-xs font-bold text-white">Mentor Industri</h4>
                        <p class="text-[10px] text-gray-400">PT. Sariling Aneka Energi</p>
                    </div>
                </div>
            </div>

            <div class="bg-cardBg border border-borderDark p-8 rounded-3xl flex flex-col justify-between shadow-xl">
                <p class="text-sm text-gray-300 leading-relaxed italic mb-8">
                    "Memiliki pemahaman analitis yang kuat di bidang Business Intelligence serta cepat beradaptasi dengan tugas-tugas teknis yang kompleks."
                </p>
                <div class="flex items-center gap-3 pt-4 border-t border-borderDark">
                    <div class="w-10 h-10 rounded-xl bg-purple-600/20 text-purple-400 flex items-center justify-center text-xs font-bold">DV</div>
                    <div>
                        <h4 class="text-xs font-bold text-white">Rekan Tim Proyek</h4>
                        <p class="text-[10px] text-gray-400">Universitas Mercu Buana</p>
                    </div>
                </div>
            </div>

            <div class="bg-cardBg border border-borderDark p-8 rounded-3xl flex flex-col justify-between shadow-xl">
                <p class="text-sm text-gray-300 leading-relaxed italic mb-8">
                    "Sangat disiplin, bertanggung jawab, dan memiliki rekam jejak akademis serta sertifikasi BNSP yang membanggakan sebagai analis data."
                </p>
                <div class="flex items-center gap-3 pt-4 border-t border-borderDark">
                    <div class="w-10 h-10 rounded-xl bg-emerald-600/20 text-emerald-400 flex items-center justify-center text-xs font-bold">AD</div>
                    <div>
                        <h4 class="text-xs font-bold text-white">Dosen Pembimbing</h4>
                        <p class="text-[10px] text-gray-400">Fakultas Ilmu Komputer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-24 px-6 max-w-4xl mx-auto text-center">
        <h3 class="text-xs uppercase tracking-widest text-gray-400 mb-2">Punya ide proyek?</h3>
        <h2 class="text-3xl sm:text-5xl font-extrabold text-white mb-8 tracking-tight">Mari berkarya bersama saya.</h2>
        
        <a href="https://wa.me/<?php echo $profil['whatsapp']; ?>?text=Halo%2C%20saya%20tertarik%20untuk%20berkolaborasi." target="_blank" class="inline-block px-8 py-4 rounded-2xl bg-white text-gray-900 font-semibold text-xs hover:bg-gray-200 transition shadow-xl mb-10">
            Hubungi saya
        </a>

        <div class="flex items-center justify-center gap-4 text-lg text-gray-400 mb-8">
            <a href="https://wa.me/<?php echo $profil['whatsapp']; ?>" target="_blank" title="WhatsApp" class="w-11 h-11 rounded-2xl bg-cardBg border border-borderDark flex items-center justify-center hover:text-green-400 hover:border-green-500 transition">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="https://www.instagram.com/<?php echo $profil['instagram']; ?>" target="_blank" title="Instagram" class="w-11 h-11 rounded-2xl bg-cardBg border border-borderDark flex items-center justify-center hover:text-pink-400 hover:border-pink-500 transition">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="mailto:<?php echo $profil['email']; ?>" title="Email" class="w-11 h-11 rounded-2xl bg-cardBg border border-borderDark flex items-center justify-center hover:text-purple-400 hover:border-purple-500 transition">
                <i class="fa-solid fa-envelope"></i>
            </a>
            <a href="https://maps.google.com/?q=Kota+Tangerang" target="_blank" title="Lokasi" class="w-11 h-11 rounded-2xl bg-cardBg border border-borderDark flex items-center justify-center hover:text-blue-400 hover:border-blue-500 transition">
                <i class="fa-solid fa-location-dot"></i>
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-8 border-t border-borderDark text-center text-xs text-gray-500">
        <p>&copy; <?php echo date('Y'); ?> <?php echo $profil['nama']; ?>. Hak cipta dilindungi.</p>
    </footer>

</body>
</html>