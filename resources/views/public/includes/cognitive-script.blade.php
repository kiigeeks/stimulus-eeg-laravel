<script>
    const statementDisplay = document.getElementById('bio-content');
    const countdownDisplay = document.getElementById('counter');
    const textContainer = document.getElementById('text-content');
    const videoContainer = document.getElementById('video-content');
    const videoFrame = document.getElementById('video-frame');

    let currentIndex = 0;
    let videoUrl = "";
    let countdown = statements[currentIndex].durations;

    const displayStatement = () => {
        if (currentIndex === statements.length) {
            clearInterval(intervalId);
            window.location.href = "{{ route('finish') }}";
            return;
        }

        if (statements[currentIndex].type === 'text') {
            statementDisplay.innerHTML = statements[currentIndex].label;
            textContainer.classList.remove("hidden");
            videoContainer.classList.add("hidden");
        } 
        
        if (statements[currentIndex].type === 'video') {
            if (videoUrl === "") {
                videoUrl = statements[currentIndex].link;
                const videoHtml = `
                    <video id="local-video" controls autoplay muted width="100%" height="100%" class="rounded-xl">
                        <source src="${videoUrl}" type="video/mp4" class="rounded-xl">
                        Your browser does not support the video tag.
                    </video>
                `;
                
                // Menulis ke dalam iframe
                videoFrame.contentWindow.document.open();
                videoFrame.contentWindow.document.write(videoHtml);
                videoFrame.contentWindow.document.close();
            }

            if (countdown === 0 || videoUrl !== statements[currentIndex].link) {
                videoUrl = statements[currentIndex].link;
                const videoHtml = `
                    <video id="local-video" controls autoplay muted width="100%" height="100%" class="rounded-xl">
                        <source src="${videoUrl}" type="video/mp4" class="rounded-xl">
                        Your browser does not support the video tag.
                    </video>
                `;
                
                // Menulis ke dalam iframe
                videoFrame.contentWindow.document.open();
                videoFrame.contentWindow.document.write(videoHtml);
                videoFrame.contentWindow.document.close();
            }

            textContainer.classList.add("hidden");
            videoContainer.classList.remove("hidden");

            // Mengganti konten di dalam iframe dengan elemen <video>
            // const videoUrl = statements[currentIndex].link;
        }

        countdownDisplay.innerHTML = countdown;
        countdown--;

        if (countdown === 0) {
            currentIndex++;
            countdown = statements[currentIndex].durations;
        }
    }

    const intervalId = setInterval(displayStatement, 1000);
</script>