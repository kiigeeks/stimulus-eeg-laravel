<script>
    const counter = document.getElementById('counter');
    const regisForm = document.getElementById('registrasi-form');
    const submitButton = document.getElementById('submit-button');

    const generateUniqueCode = (length) => {
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let result = '';
        for (let i = 0; i < length; i++) {
            const randomIndex = Math.floor(Math.random() * characters.length);
            result += characters[randomIndex];
        }
        return result;
    }

    const codeUnique = generateUniqueCode(10);

    counter.classList.toggle('hidden');

    regisForm.addEventListener("submit", async (e) => {
        e.preventDefault();

        submitButton.disabled = true;
        submitButton.innerText = 'Process...';
        
        const formData = {
            fullname: document.getElementById('fullname').value,
            code: codeUnique,
            nickname: document.getElementById('nickname').value,
            birthday: document.getElementById('birthday').value,
            hometown: document.getElementById('hometown').value,
            father: document.getElementById('father').value,
            mother: document.getElementById('mother').value,
            junior_highschool: document.getElementById('junior_highschool').value,
            senior_highschool: document.getElementById('senior_highschool').value,
            gender: document.getElementById('gender').value,
            color: document.getElementById('color').value,
            event_id: document.getElementById('event_id').value,
            management_id: document.getElementById('management_id').value,
        };

        try {
            const response = await fetch('{{ route("participants.store") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(formData)
            });

            if (!response.ok) {
                throw new Error('Failed to submit form');
            }
            
            localStorage.setItem('fullname', formData.fullname);
            localStorage.setItem('code', codeUnique);
            localStorage.setItem('nickname', formData.nickname);
            const parts = formData.birthday.split("-");
            const reversedbirthday = `${parts[2]}-${parts[1]}-${parts[0]}`;
            localStorage.setItem('birthday', reversedbirthday);
            localStorage.setItem('hometown', formData.hometown);
            localStorage.setItem('father', formData.father);
            localStorage.setItem('mother', formData.mother);
            localStorage.setItem('junior_highschool', formData.junior_highschool);
            localStorage.setItem('senior_highschool', formData.senior_highschool);
            localStorage.setItem('gender', formData.gender);
            localStorage.setItem('color', formData.color);
            localStorage.setItem('event_id', formData.event_id);
            localStorage.setItem('management_id', formData.management_id);
            
            window.location.href = "{{ route('resting-state') }}";
        } catch (error) {
            console.error(error);
            alert('An error occurred while submitting the form');
        } finally {
            submitButton.disabled = false;
            submitButton.innerText = 'Submit';
        }
    });
</script>