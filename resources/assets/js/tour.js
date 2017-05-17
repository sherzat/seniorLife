function startIntro(source) {
    var intro = introJs();
    intro.setOptions({
        steps: [
            {
                element: '#step1',
                intro: "This shows you the average score of your survey result and indicates your quality of life",
                position: 'right'
            },
            {
                element: '#step2',
                intro: "Includes your individual category result in a Barchart form",
                position: 'left'
            },
            {
                element: '#step3',
                intro: 'Now you have one badge for successfully registered to our app. if you get more badges they will be displayed here',
                position: 'right'
            },
            {
                element: '#step4',
                intro: "Displays your level and how many points you collected and how many points left for next level",
                position: 'left'
            },
            {
                element: '#step5',
                intro: 'If you want to read this messages again click me. THANK YOU'
            }
        ]
    });


    var mysurvey = introJs();
    mysurvey.setOptions({
        steps: [

            /*{
                element: '#step6',
                intro: "This graph shows you the over all activities you have made through the year",
                position: 'bottom'
            },*/

            {
                element: '#step6',
                intro: "On the right side there are different types of surveys organized by category select " +
                "one and continue your survey",
                position: 'bottom'
            },
        ]
    });

    var challenges = introJs();
    challenges.setOptions({
        steps: [
            {
                element: '#step8',
                intro: "This is where you see your challenges start the challenge" +
                " and fill one survey, Note you have to finish all the questions if you want to get the points.",
                position: 'left'
            },
        ]
    });

    var rank = introJs();
    rank.setOptions({
        steps: [
            {
                element: '#step9',
                intro: "Displays rank in descending form based on the total points collected",
                position: 'left'
            },
            {
                element: '#step6',
                intro: "See your level and others",
                position: 'left'
            },
            {
                element: '#step10',
                intro: "You can see the name and total points they collected",
                position: 'left'
            },
        ]
    });

    var achievement = introJs();
    achievement.setOptions({
        steps: [
            {
                element: '#step11',
                intro: "All the badges you win will be displayed here",
                position: 'bottom'
            },
            {
                element: '#step12',
                intro: "badges you can win in the future if you fill more survey, see the description what you have to do to win them " +
                "and your progress is also indicated on the progress bar",
                position: 'bottom'
            },
        ]
    });

    if (source == 'home')
        intro.start().oncomplete(function () {
            window.location.href = '/mysurvey';
        });

    if (source == 'home_clicked')
        intro.start();

    else if (source == 'mysurvey')
        mysurvey.start().oncomplete(function () {
            window.location.href = '/challenges';
        });

    if (source == 'mysurvey_clicked')
        mysurvey.start();

    else if (source == 'challenges')
        challenges.start().oncomplete(function () {
            window.location.href = '/rank';
        });

    if (source == 'challenges_clicked')
        challenges.start();

    else if (source == 'rank')
        rank.start().oncomplete(function () {
            window.location.href = '/achievement';
        });

    if (source == 'rank_clicked')
        rank.start();

    else if (source == 'achievement')
        achievement.start().oncomplete(function () {
            window.location.href = '/home';
        });

    if (source == 'achievement_clicked')
        achievement.start();
}

