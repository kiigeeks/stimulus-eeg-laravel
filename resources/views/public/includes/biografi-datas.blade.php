<script>
    let fullname = localStorage.getItem('fullname');
    let nickname = localStorage.getItem('nickname');
    let birthday = localStorage.getItem('birthday');
    let hometown = localStorage.getItem('hometown');
    let gender = localStorage.getItem('gender');
    let father = localStorage.getItem('father');
    let mother = localStorage.getItem('mother');
    let junior_highschool = localStorage.getItem('junior_highschool');
    let senior_highschool = localStorage.getItem('senior_highschool');
    let favorite_color = localStorage.getItem('color');
    let management = localStorage.getItem('management_id');
    
    const basicStatements = [
        {
            label: `Nama SMP Anda adalah ${junior_highschool}`,
            type: 'text',
            link: '',
            durations: 6
        },
        {
            label: `Tanggal lahir Anda adalah ${birthday}`,
            type: 'text',
            link: '',
            durations: 6
        },
        {
            label: `Warna favorit Anda adalah ${favorite_color}`,
            type: 'text',
            link: '',
            durations: 6
        },
        {
            label: `Nama Ayah Anda adalah ${father}`,
            type: 'text',
            link: '',
            durations: 6
        },
        {
            label: `Kota kelahiran Anda adalah ${hometown}`,
            type: 'text',
            link: '',
            durations: 6
        },
        {
            label: `Nama lengkap Anda adalah ${fullname}`,
            type: 'text',
            link: '',
            durations: 6
        },
        {
            label: `Nama SMA Anda adalah ${senior_highschool}`,
            type: 'text',
            link: '',
            durations: 6
        },
        {
            label: `Jenis kelamin Anda adalah ${gender}`,
            type: 'text',
            link: '',
            durations: 6
        },
        {
            label: `Nama Ibu Anda adalah ${mother}`,
            type: 'text',
            link: '',
            durations: 6
        },
        {
            label: `Nama panggilan Anda adalah ${nickname}`,
            type: 'text',
            link: '',
            durations: 6
        }
    ];

    const lowStatements = [
        {
            label: 'Saya suka mencoba makanan baru dari berbagai budaya.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering merasa tertarik dengan ide-ide abstrak.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya menikmati mendiskusikan seni, musik, atau sastra dengan orang lain.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya terbuka untuk mempelajari bahasa baru.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa terinspirasi ketika mengunjungi tempat-tempat baru.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering mempertanyakan tradisi atau aturan yang ada.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya suka mendengarkan berbagai genre musik.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya mudah beradaptasi dengan perubahan mendadak dalam rencana.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering mencari cara kreatif untuk menyelesaikan masalah.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya menikmati hobi yang membutuhkan imajinasi, seperti melukis atau menulis cerita.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya menyukai diskusi tentang topik-topik ilmiah atau filosofis.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa nyaman keluar dari zona nyaman saya.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering merasa antusias mempelajari hal-hal baru.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya menghargai keindahan dalam bentuk apa pun.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya terbuka untuk mencoba metode alternatif dalam bekerja.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya selalu menyelesaikan tugas sebelum tenggat waktu.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya memiliki daftar tugas yang membantu saya tetap terorganisasi.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa puas ketika pekerjaan saya dilakukan dengan sempurna.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya mempersiapkan segala sesuatu dengan baik sebelum bepergian.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya selalu menepati janji.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya jarang menunda pekerjaan hingga menit terakhir.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa penting untuk menjaga kebersihan dan kerapian lingkungan saya.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya tidak suka meninggalkan pekerjaan setengah jalan.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya selalu membaca instruksi sebelum memulai proyek baru.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya percaya bahwa dedikasi dan kerja keras adalah kunci keberhasilan.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering membuat jadwal untuk menjaga waktu tetap efektif.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya tidak suka mengambil risiko yang tidak diperhitungkan.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya memiliki target hidup yang jelas.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa penting untuk mematuhi aturan dan regulasi.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya menikmati perasaan puas setelah menyelesaikan pekerjaan besar.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya menikmati menghadiri acara sosial besar.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa energik setelah berbicara dengan banyak orang.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya suka menjadi pusat perhatian di pesta.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa mudah memulai percakapan dengan orang asing.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya menikmati bekerja dalam kelompok dibandingkan sendiri.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa bersemangat dalam lingkungan yang ramai.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya tidak ragu mengungkapkan pendapat saya di depan umum.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa nyaman tampil di hadapan banyak orang.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering mengambil inisiatif dalam pertemuan sosial.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya lebih suka memiliki banyak teman daripada beberapa teman dekat.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa antusias menghadapi aktivitas baru.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya suka berbicara dengan teman tentang berbagai pengalaman.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa mudah berteman dengan orang baru.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering merasa optimis dan energik.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya menikmati aktivitas yang melibatkan banyak orang.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya cenderung membantu orang lain meskipun saya sibuk.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya berusaha untuk menjaga harmoni dalam kelompok.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering memikirkan bagaimana perasaan orang lain sebelum bertindak.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya lebih suka bekerja sama daripada bersaing.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya mudah memaafkan kesalahan orang lain.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering menawarkan bantuan tanpa diminta.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya tidak suka menyakiti perasaan orang lain.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya selalu mendengarkan pendapat orang lain sebelum mengambil keputusan.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa nyaman membantu orang asing.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering memuji keberhasilan orang lain.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya cenderung mencari solusi yang menguntungkan semua pihak.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya percaya pentingnya rasa saling menghormati dalam hubungan.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya jarang merasa marah terhadap orang lain.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya menikmati melihat orang lain bahagia karena bantuan saya.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering bertindak demi kepentingan orang lain daripada diri sendiri.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering merasa cemas ketika menghadapi situasi yang tidak pasti.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa sulit untuk tetap tenang ketika ada banyak tekanan.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering merasa khawatir tentang masa depan.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya mudah tersinggung oleh komentar negatif orang lain.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa cemas jika segala sesuatu tidak berjalan sesuai rencana.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering merasa takut mencoba hal baru karena kemungkinan gagal.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa mudah marah ketika stres.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering merasa tidak puas dengan pencapaian saya.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa sulit melupakan kesalahan di masa lalu.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering memikirkan kemungkinan terburuk dari suatu situasi.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa lelah secara emosional setelah hari yang penuh tekanan.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering merasa gugup saat berbicara di depan banyak orang.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa sulit untuk rileks bahkan dalam situasi santai.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya sering merasa tidak percaya diri dalam mengambil keputusan.',
            type: 'text',
            link: '',
            durations: 4
        },
        {
            label: 'Saya merasa khawatir jika orang lain tidak menyukai saya.',
            type: 'text',
            link: '',
            durations: 4
        }
    ];

    const oldStatements = [
        {
            label: 'Saya sangat terbuka dengan ide gagasan paling aneh sekalipun asal bisa dibuktikan',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya menyukai hal-hal baru',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya menyukai seni keindahan',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya menguasai banyak kosakata',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya meluangkan waktu untuk merefleksikan berbagai hal',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya memiliki banyak ide',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Openess Video 1',
            type: 'video',
            link: '/assets/videos/opennes/Video-1.mp4',
            durations: 6
        },
        {
            label: 'Openess Video 2',
            type: 'video',
            link: '/assets/videos/opennes/Video-2.mp4',
            durations: 6
        },
        {
            label: 'Openess Video 3',
            type: 'video',
            link: '/assets/videos/opennes/Video-3.mp4',
            durations: 6
        },
        {
            label: 'Openess Video 4',
            type: 'video',
            link: '/assets/videos/opennes/Video-4.mp4',
            durations: 6
        },
        {
            label: 'Openess Video 5',
            type: 'video',
            link: '/assets/videos/opennes/Video-5.mp4',
            durations: 6
        },
        {
            label: 'Saya selalu tenang dalam mengambil keputusan',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya selalu  sangat berhati hati',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya menginginkan semua teratur atau teroganisir dengan baik detail dan teliti',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya memperhatikan hal-hal secara rinci',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya selalu mempersiapkan segala hal',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya selalu mengerjakan tugas-tugas saya',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Conscience Video 1',
            type: 'video',
            link: '/assets/videos/conscience/Video-1.mp4',
            durations: 6
        },
        {
            label: 'Conscience Video 2',
            type: 'video',
            link: '/assets/videos/conscience/Video-2.mp4',
            durations: 6
        },
        {
            label: 'Conscience Video 3',
            type: 'video',
            link: '/assets/videos/conscience/Video-3.mp4',
            durations: 6
        },
        {
            label: 'Conscience Video 4',
            type: 'video',
            link: '/assets/videos/conscience/Video-4.mp4',
            durations: 6
        },
        {
            label: 'Conscience Video 5',
            type: 'video',
            link: '/assets/videos/conscience/Video-5.mp4',
            durations: 6
        },
        {
            label: 'Saya menyukai menjadi pusat perhatian banyak orang',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya sering berusaha membuat orang lain senang',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Orang lain lebih penting dari diri saya',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya merasa nyaman berada di sekitar orang lain',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Lebih suka berkeja didepan layar',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya banyak berbicara pada orang yang tidak dikenal',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Extraversion Video 1',
            type: 'video',
            link: '/assets/videos/extraversion/Video-1.mp4',
            durations: 6
        },
        {
            label: 'Extraversion Video 2',
            type: 'video',
            link: '/assets/videos/extraversion/Video-2.mp4',
            durations: 6
        },
        {
            label: 'Extraversion Video 3',
            type: 'video',
            link: '/assets/videos/extraversion/Video-3.mp4',
            durations: 6
        },
        {
            label: 'Extraversion Video 4',
            type: 'video',
            link: '/assets/videos/extraversion/Video-4.mp4',
            durations: 6
        },
        {
            label: 'Extraversion Video 5',
            type: 'video',
            link: '/assets/videos/extraversion/Video-5.mp4',
            durations: 6
        },
        {
            label: 'Saya orang yang welas asih',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya mengutamakan kepentingan yang lebih besar',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya selalu menjunjung tinggi nilai-nilai kemanusiaan',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya meluangkan waktu untuk orang lain',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya peduli dengan orang lain',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya bersikap ramah pada orang lain',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Agreebelness Video 1',
            type: 'video',
            link: '/assets/videos/agreebelness/Video-1.mp4',
            durations: 6
        },
        {
            label: 'Agreebelness Video 2',
            type: 'video',
            link: '/assets/videos/agreebelness/Video-2.mp4',
            durations: 6
        },
        {
            label: 'Agreebelness Video 3',
            type: 'video',
            link: '/assets/videos/agreebelness/Video-3.mp4',
            durations: 6
        },
        {
            label: 'Agreebelness Video 4',
            type: 'video',
            link: '/assets/videos/agreebelness/Video-4.mp4',
            durations: 6
        },
        {
            label: 'Agreebelness Video 5',
            type: 'video',
            link: '/assets/videos/agreebelness/Video-5.mp4',
            durations: 6
        },
        {
            label: 'Saya sering merasa sedih atau murung',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya mudah stress',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya memiliki emosi yg sering tidak stabil',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya memiliki suasana hati yang cepat berubah',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya mudah merasa kesal',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Saya mudah merasa jengkel',
            type: 'text',
            link: '',
            durations: 5
        },
        {
            label: 'Neuro Video 1',
            type: 'video',
            link: '/assets/videos/neuro/Video-1.mp4',
            durations: 6
        },
        {
            label: 'Neuro Video 2',
            type: 'video',
            link: '/assets/videos/neuro/Video-2.mp4',
            durations: 6
        },
        {
            label: 'Neuro Video 3',
            type: 'video',
            link: '/assets/videos/neuro/Video-3.mp4',
            durations: 6
        },
        {
            label: 'Neuro Video 4',
            type: 'video',
            link: '/assets/videos/neuro/Video-4.mp4',
            durations: 6
        },
        {
            label: 'Neuro Video 5',
            type: 'video',
            link: '/assets/videos/neuro/Video-5.mp4',
            durations: 6
        },
    ];

    let statements = []
    if (management == 1) {
        statements = basicStatements.concat(oldStatements);
    } else if (management == 2) {
        statements = basicStatements.concat(oldStatements);
    } else if (management == 3) {
        statements = basicStatements.concat(lowStatements);
    } else {
        statements = basicStatements;
    }
</script>