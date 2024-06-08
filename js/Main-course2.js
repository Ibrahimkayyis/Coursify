const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'Intro Beginner + Exercise',
        'name': 'Intro Beginner + Exercise.mp4',
        'duration': '03:13',
    },
    {
        'id': 'a2',
        'title': 'what is figma - who does the coding',
        'name': 'what is figma - who does the coding.mp4',
        'duration': '03:00',
    },
    {
        'id': 'a3',
        'title': 'SETUP -01 getting figma registration process',
        'name': 'SETUP -01 getting figma registration process.mp4',
        'duration': '02:38',
    },

    {
        'id': 'a4',
        'title': 'SETUP -02 figma in the browser vs figma in app',
        'name': 'SETUP -02 figma in the browser vs figma in app.mp4',
        'duration': '01:25',
    },
    {
        'id': 'a5',
        'title': 'SETUP -03 the figma file browser -figmas home',
        'name': 'SETUP -03 the figma file browser -figmas home.mp4',
        'duration': '04:03',
    },
    {
        'id': 'a6',
        'title': 'SETUP -04 creating design files',
        'name': 'SETUP -04 creating design files.mp4',
        'duration': '01:40',
    },
    {
        'id': 'a7',
        'title': 'Download working file',
        'name': 'Download working file.mp4',
        'duration': '01:02',
    },

    {
        'id': 'a8',
        'title': 'BASICS -01 adding frames to our file',
        'name': 'BASICS -01 adding frames to our file.mp4',
        'duration': '02:10',
    },
    {
        'id': 'a9',
        'title': 'BASICS -02 a few handy shortcuts',
        'name': 'BASICS -02 a few handy shortcuts.mp4',
        'duration': '00:48',
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


