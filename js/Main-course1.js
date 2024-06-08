const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'Introduction to figma essentials training coursets',
        'name': 'Introduction to figma essentials training coursets.mp4',
        'duration': '02:53',
    },
    {
        'id': 'a2',
        'title': 'Getting started with figma training',
        'name': 'Getting started with figma training.mp4',
        'duration': '03:06',
    },
    {
        'id': 'a3',
        'title': 'What is figma & what does it do the coding',
        'name': 'What is figma & what does it do the coding.mp4',
        'duration': '03:46',
    },

    {
        'id': 'a4',
        'title': 'Whats the difference between UI and UX in figma',
        'name': 'Whats the difference between UI and UX in figma.mp4',
        'duration': '05:52',
    },
    {
        'id': 'a5',
        'title': 'What are we making in this figma course',
        'name': 'What are we making in this figma course.mp4',
        'duration': '09:18',
    },
    {
        'id': 'a6',
        'title': 'Class project 01 -Create your own brief',
        'name': 'Class project 01 -Create your own brief.mp4',
        'duration': '04:01',
    },
    {
        'id': 'a7',
        'title': 'What is Lo Fi wireframe vs high fidelity in figma',
        'name': 'What is Lo Fi wireframe vs high fidelity in figma.mp4',
        'duration': '02:34',
    },

    {
        'id': 'a8',
        'title': 'Creating our design file & introducing frames in figma',
        'name': 'Creating our design file & introducing frames in figma.mp4',
        'duration': '08:29',
    },
    {
        'id': 'a9',
        'title': 'The Basics of type & fonts in figma',
        'name': 'The Basics of type & fonts in figma.mp4',
        'duration': '10:51',
    },

];

data.forEach((video, i) => {
    let video_element = `
                <div class="video" data-id="${video.id}">
                    <img src="./assets/play.svg" alt="">
                    <p>${i + 1 > 9 ? i + 1 : '0' + (i + 1)}. </p>
                    <h3 class="title">${video.title}</h3>
                    <p class="time">${video.duration}</p>
                </div>
    `;
    video_playlist.innerHTML += video_element;
})

let videos  = document.querySelectorAll ('.video');
videos[0].classList.add('active');
videos[0].querySelector('img').src='./assets/pause.svg';

videos.forEach(selected_video=> {
    selected_video.onclick = ()=> {

        for (all_videos of videos) {
            all_videos.classList.remove('active');
            all_videos.querySelector('img').src='./assets/play.svg';
        }
        selected_video.classList.add('active');
        selected_video.querySelector('img').src='./assets/pause.svg';

        let match_video = data.find (video => video.id == selected_video.dataset.id);
        main_video.src = 'videos/' + match_video.name;
        main_video_title.innerHTML = match_video.title;

    }
});


