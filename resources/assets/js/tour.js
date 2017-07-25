function startIntro(source) {
    var intro = introJs();
    intro.setOptions({
        steps: [
            {
                element: '#step1',
                intro: "Below you can see result of overall or individual category",
                position: 'bottom'
            },
            {
                element: '#step2',
                intro: "This badges below are in progress badges you can win them if you complete the challenge",
                position: 'bottom'
            },
            {
                element: '#step3',
                intro: 'This is leader board where you can see your rank and others',
                position: 'bottom'
            }
        ]
    });


    var mysurvey = introJs();
    mysurvey.setOptions({
        steps: [

            {
                element: '#step1',
                intro: "Select one category to start your survey",
                position: 'bottom'
            },
        ]
    });

    var profile = introJs();
    profile.setOptions({
        steps: [
            {
                element: '#step1',
                intro: "You can select one of the pictures or upload your own to change your " +
                "profile picture",
                position: 'bottom'
            },
        ]
    });

    var rank = introJs();
    rank.setOptions({
        steps: [
            {
                element: '#step1',
                intro: "This is where you will see your rank and others",
                position: 'bottom'
            }
        ]
    });

    var achievement = introJs();
    achievement.setOptions({
        steps: [
            {
                element: '#step1',
                intro: "All the badges you win will be displayed here",
                position: 'bottom'
            },
            {
                element: '#step2',
                intro: "This are badges you can win in the future, see the description and the progress bar what you have to do to win the badge ",
                position: 'bottom'
            },
        ]
    });

    if (source == 'home')
        intro.start().oncomplete(function () {
            window.location.href = '/mysurvey';
        });

    if (source == 'Home')
        intro.start();

    else if (source == 'mysurvey')
        mysurvey.start().oncomplete(function () {
            window.location.href = '/rank';
        });

    if (source == 'My Survey')
        mysurvey.start();

    else if (source == 'rank')
        rank.start().oncomplete(function () {
            window.location.href = '/achievement';
        });

    if (source == 'Rank')
        rank.start();

    else if (source == 'achievement')
        achievement.start().oncomplete(function () {
            window.location.href = '/home';
        });

    if (source == 'Achievement')
        achievement.start();

    /*else if (source == 'profile')
     challenges.start().oncomplete(function () {
     window.location.href = '/home';
     });*/

    if (source == 'Profile')
        profile.start();
}

