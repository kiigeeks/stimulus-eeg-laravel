<script>
    const counter = document.getElementById('counter');
    const regisForm = document.getElementById('registrasi-form');
    const submitButton = document.getElementById('submit-button');

    counter.classList.toggle('hidden');

    regisForm.addEventListener("submit", async (e) => {
        e.preventDefault();

        submitButton.disabled = true;
        submitButton.innerText = 'Process...';
        
        const formData = {
            fullname: document.getElementById('fullname').value,
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
            localStorage.setItem('nickname', formData.nickname);
            localStorage.setItem('birthday', formData.birthday);
            localStorage.setItem('hometown', formData.hometown);
            localStorage.setItem('father', formData.father);
            localStorage.setItem('mother', formData.mother);
            localStorage.setItem('junior_highschool', formData.junior_highschool);
            localStorage.setItem('senior_highschool', formData.senior_highschool);
            localStorage.setItem('gender', formData.gender);
            localStorage.setItem('color', formData.color);
            localStorage.setItem('event_id', formData.event_id);
            
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