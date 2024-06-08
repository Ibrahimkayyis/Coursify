const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'Class overview',
        'name': 'Class overview.mp4',
        'duration': '05:15',
    },
    {
        'id': 'a2',
        'title': 'What is webflow',
        'name': 'What is webflow.mp4',
        'duration': '06:54',
    },
    {
        'id': 'a3',
        'title': 'Webflow teaser',
        'name': 'Webflow teaser.mp4',
        'duration': '04:51',
    },

    {
        'id': 'a4',
        'title': 'PART 1 -SECRETS OF GOOD DESIGN',
        'name': 'PART 1 -SECRETS OF GOOD DESIGN.mp4',
        'duration': '02:31',
    },
    {
        'id': 'a5',
        'title': 'Getting started with figma',
        'name': 'Getting started with figma.mp4',
        'duration': '07:49',
    },
    {
        'id': 'a6',
        'title': 'Layout is king',
        'name': 'Layout is king.mp4',
        'duration': '06:49',
    },
    {
        'id': 'a7',
        'title': 'Assigment -Alligment & grid',
        'name': 'Assigment -Alligment & grid.mp4',
        'duration': '09:13',
    },

    {
        'id': 'a8',
        'title': 'Layout -Importance of visual heirarchy',
        'name': 'Layout -Importance of visual heirarchy.mp4',
        'duration': '07:20',
    },
    {
        'id': 'a9',
        'title': 'Assigment -visual hierarchy',
        'name': 'Assigment -visual hierarchy.mp4',
        'duration': '08:34',
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


