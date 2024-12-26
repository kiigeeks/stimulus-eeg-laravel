<script>
    // const questions = [
    //     'Mudah khawatir', 
    //     'Memiliki perasaan yang berubah-ubah',
    //     'Mudah merasa tertekan',
    //     'Sering merasa sedih',
    //     'Tidak keberatan menjadi pusat perhatian',
    //     'Menghidupkan suasana dalam suatu acara',
    //     'Berinteraksi dengan banyak orang dalam suatu acara',
    //     'Memulai suatu percakapan',
    //     'Segera mengerjakan tugas yang diberikan',
    //     'Telaten dalam mengerjakan tugas',
    //     'Melakukan aktivitas sesuai jadwal atau agenda',
    //     'Menyukai keteraturan',
    //     'Lemah lembut',
    //     'Membuat orang lain merasa nyaman',
    //     'Memahami perasaan orang lain',
    //     'Bersimpati dengan perasaan orang lain',
    //     'Menggunakan istilah-istilah yang sulit',
    //     'Memiliki ide-ide yang cemerlang',
    //     'Cepat dalam memahami sesuatu',
    //     'Memiliki imajinasi yang sangat kuat'
    // ];

    const questionStatements = [
        {
            id: 1,
            code: 'EM14',
            desc: 'Mudah khawatir'
        },
        {
            id: 2,
            code: 'EM34',
            desc: 'Memiliki perasaan yang berubah-ubah'
        },
        {
            id: 3,
            code: 'EM4',
            desc: 'Mudah merasa tertekan'
        },
        {
            id: 4,
            code: 'EM49',
            desc: 'Sering merasa sedih'
        },
        {
            id: 5,
            code: 'E41',
            desc: 'Tidak keberatan menjadi pusat perhatian'
        },
        {
            id: 6,
            code: 'E1',
            desc: 'Menghidupkan suasana dalam suatu acara'
        },
        {
            id: 7,
            code: 'E31',
            desc: 'Berinteraksi dengan banyak orang dalam suatu acara'
        },
        {
            id: 8,
            code: 'E21',
            desc: 'Memulai suatu percakapan'
        },
        {
            id: 9,
            code: 'C23',
            desc: 'Segera mengerjakan tugas yang diberikan'
        },
        {
            id: 10,
            code: 'C48',
            desc: 'Telaten dalam mengerjakan tugas'
        },
        {
            id: 11,
            code: 'C43',
            desc: 'Melakukan aktivitas sesuai jadwal atau agenda'
        },
        {
            id: 12,
            code: 'C33',
            desc: 'Menyukai keteraturan'
        },
        {
            id: 13,
            code: 'A27',
            desc: 'Lemah lembut'
        },
        {
            id: 14,
            code: 'A47',
            desc: 'Membuat orang lain merasa nyaman'
        },
        {
            id: 15,
            code: 'A42',
            desc: 'Memahami perasaan orang lain'
        },
        {
            id: 16,
            code: 'A17',
            desc: 'Bersimpati dengan perasaan orang lain'
        },
        {
            id: 17,
            code: 'I40',
            desc: 'Menggunakan istilah-istilah yang sulit'
        },
        {
            id: 18,
            code: 'I25',
            desc: 'Memiliki ide-ide yang cemerlang'
        },
        {
            id: 19,
            code: 'I35',
            desc: 'Cepat dalam memahami sesuatu'
        },
        {
            id: 20,
            code: 'I15',
            desc: 'Memiliki imajinasi yang sangat kuat'
        },
    ];

    const answers = [
        {
            label: 'Sangat Tidak Setuju',
            value: 1,
        },
        {
            label: 'Tidak Setuju',
            value: 2,
        },
        {
            label: 'Kurang Setuju',
            value: 3,
        },
        {
            label: 'Setuju',
            value: 4,
        },
        {
            label: 'Sangat Setuju',
            value: 5,
        },
    ];


    const dummyStatements = [
        {
            id: 1,
            code: 'EM14',
            statement: 'Mudah khawatir',
            answer: 0
        },
        {
            id: 2,
            code: 'EM34',
            statement: 'Memiliki perasaan yang berubah-ubah',
            answer: 0
        },
        {
            id: 3,
            code: 'EM4',
            statement: 'Mudah merasa tertekan',
            answer: 0
        },
        {
            id: 4,
            code: 'EM49',
            statement: 'Sering merasa sedih',
            answer: 0
        },
        {
            id: 5,
            code: 'E41',
            statement: 'Tidak keberatan menjadi pusat perhatian',
            answer: 0
        },
        {
            id: 6,
            code: 'E1',
            statement: 'Menghidupkan suasana dalam suatu acara',
            answer: 0
        },
        {
            id: 7,
            code: 'E31',
            statement: 'Berinteraksi dengan banyak orang dalam suatu acara',
            answer: 0
        },
        {
            id: 8,
            code: 'E21',
            statement: 'Memulai suatu percakapan',
            answer: 0
        },
        {
            id: 9,
            code: 'C23',
            statement: 'Segera mengerjakan tugas yang diberikan',
            answer: 0
        },
        {
            id: 10,
            code: 'C48',
            statement: 'Telaten dalam mengerjakan tugas',
            answer: 0
        },
        {
            id: 11,
            code: 'C43',
            statement: 'Melakukan aktivitas sesuai jadwal atau agenda',
            answer: 0
        },
        {
            id: 12,
            code: 'C33',
            statement: 'Menyukai keteraturan',
            answer: 0
        },
        {
            id: 13,
            code: 'A27',
            statement: 'Lemah lembut',
            answer: 0
        },
        {
            id: 14,
            code: 'A47',
            statement: 'Membuat orang lain merasa nyaman',
            answer: 0
        },
        {
            id: 15,
            code: 'A42',
            statement: 'Memahami perasaan orang lain',
            answer: 0
        },
        {
            id: 16,
            code: 'A17',
            statement: 'Bersimpati dengan perasaan orang lain',
            answer: 0
        },
        {
            id: 17,
            code: 'I40',
            statement: 'Menggunakan istilah-istilah yang sulit',
            answer: 0
        },
        {
            id: 18,
            code: 'I25',
            statement: 'Memiliki ide-ide yang cemerlang',
            answer: 0
        },
        {
            id: 19,
            code: 'I35',
            statement: 'Cepat dalam memahami sesuatu',
            answer: 0
        },
        {
            id: 20,
            code: 'I15',
            statement: 'Memiliki imajinasi yang sangat kuat',
            answer: 0
        },
    ];

</script>