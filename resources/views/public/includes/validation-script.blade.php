<script>
    let currentQuestion = 0;
    let userAnswers = [];
    const nextElement = document.getElementById('next-button');
    const backElement = document.getElementById('back-button');
    const submitElement = document.getElementById('submit-button'); 
    let questions = questionStatements.sort(() => Math.random() - 0.5);

    const counterHeader = document.getElementById('counter');
    counterHeader.classList.toggle('hidden');

    const showQuestion = () => { 
        const questionElement = document.getElementById('question');
        
        questionElement.textContent = questions[currentQuestion].desc;
    };

    const displayAnswers = () => { 
        const answersContainer = document.getElementById('answers-container');

        answers.forEach((answer, index) => {
            const answerDiv = document.createElement('div');
            answerDiv.classList.add('flex', 'items-center', 'gap-2');

            const inputElement = document.createElement('input');
            inputElement.classList.add('w-6', 'h-6', 'mt-[2px]', 'text-blue-600', 'bg-gray-100', 'border-gray-300', 'focus:ring-blue-500', 'focus:ring-2');
            inputElement.type = 'radio';
            inputElement.name = 'default-radio';
            inputElement.id = `answer${index + 1}`;
            inputElement.value = answer.value;

            inputElement.addEventListener('change', () => {
                storeUpdateAnswer(currentQuestion, answer.value);
            });

            const labelElement = document.createElement('label');
            labelElement.htmlFor = `answer${index + 1}`;
            labelElement.classList.add('ml-2');
            labelElement.textContent = answer.label;

            answerDiv.appendChild(inputElement);
            answerDiv.appendChild(labelElement);

            answersContainer.appendChild(answerDiv);
        });
    }

    const resetCheckboxes = () => {
        const selectedAnswer = document.querySelector('input[name="default-radio"]:checked');
        selectedAnswer.checked = false;
    }

    const storeUpdateAnswer = (index, answer) => {
        const newAnswer = {
            id: questions[index].id,
            code: questions[index].code,
            statement: questions[index].desc,
            answer: answer,
        };

        if (index >= 0 && index < userAnswers.length) {
            userAnswers[index] = newAnswer;
        } else {
            userAnswers.push(newAnswer);
        }

        // console.log(userAnswers); //delete
    };

    const checkedAnswer = (index) => {
        if (userAnswers.hasOwnProperty(index)) {
            const selectedValue = userAnswers[index].answer;
            const radioElement = document.querySelector(`input[name="default-radio"][value="${selectedValue}"]`);

            if (radioElement) {
                radioElement.checked = true;
            }
        } else {
            resetCheckboxes();
        }
    };

    const prevQuestion = () => {
        currentQuestion = Math.max(0, currentQuestion - 1);
        showQuestion();

        checkedAnswer(currentQuestion);

        backElement.classList.toggle('hidden', currentQuestion === 0);
        nextElement.classList.toggle('hidden', currentQuestion === questions.length - 1);
        submitElement.classList.toggle('hidden', currentQuestion !== questions.length - 1);
    }

    const nextQuestion = () => {
        const selectedAnswer = document.querySelector('input[name="default-radio"]:checked');
        if (selectedAnswer && currentQuestion < questions.length - 1) {
            backElement.classList.remove('hidden');
            currentQuestion++;
            
            checkedAnswer(currentQuestion);

            const isLastQuestion = currentQuestion === questions.length - 1;
            nextElement.classList.toggle('hidden', isLastQuestion);
            submitElement.classList.toggle('hidden', !isLastQuestion);

            showQuestion();
        } else {
            alert('Please select an answer.');
        }
    }

    const submitQuiz = () => {
        const selectedAnswer = document.querySelector('input[name="default-radio"]:checked');
        
        if (selectedAnswer) {
            let finalAnswers = userAnswers.sort((a, b) => a.id - b.id);
            let userCode = localStorage.getItem('code');
            
            fetch(`/validation-store/${userCode}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    validation_test: finalAnswers
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to save answers');
                }
                return response.json();
            })
            .then(data => {
                window.location.href = "{{ route('finish') }}";
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred: ' + error.message);
            });

        } else {
            alert('Please select an answer.');
        }
    }

    displayAnswers();
    showQuestion();
</script>