export function getQuestions() {
    for (var i = 0; i < question.length; i++) {
        console.log(question[i].id);
    }
}

export const questions = [{
        id: 1,
        isAnAnswers: true,
        content: 'je fais parti des reponse'
    },
    {
        id: 2,
        isAnAnswers: false,
        content: 'je ne fais parti des reponse'
    },
    {
        id: 3,
        isAnAnswers: false,
        content: 'je ne fais parti des reponse'
    },
    {
        id: 4,
        isAnAnswers: true,
        content: 'je ne fais parti des reponse'
    }
]
