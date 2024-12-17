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

    const statements = [
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
        },
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
</script>