export const questions = [{
        id: 1,
        contenu: "émotif",
        point: -1
    },
    {
        id: 2,
        contenu: "capable",
        point: 1
    },
    {
        id: 3,
        contenu: "prudent",
        point: -1
    },
    {
        id: 4,
        contenu: "malin",
        point: 1
    },
    {
        id: 5,
        contenu: "banal",
        point: -1
    },
    {
        id: 6,
        contenu: "confiant",
        point: 1
    },
    {
        id: 7,
        contenu: "conservateur",
        point: -1
    },
    {
        id: 8,
        contenu: "classique",
        point: -1
    },
    {
        id: 9,
        contenu: "égoiste",
        point: 1
    },
    {
        id: 10,
        contenu: "insatisfait",
        point: -1
    },
    {
        id: 11,
        contenu: "honnête",
        point: -1
    },
    {
        id: 12,
        contenu: "drôle",
        point: 1
    },
    {
        id: 13,
        contenu: "indivudialiste",
        point: 1
    },
    {
        id: 14,
        contenu: "simple",
        point: 1
    },
    {
        id: 15,
        contenu: "perspicace",
        point: 1
    },
    {
        id: 16,
        contenu: "intelligent",
        point: 1
    },
    {
        id: 17,
        contenu: "curieux",
        point: -1
    },
    {
        id: 18,
        contenu: "réservé",
        point: 1
    },
    {
        id: 19,
        contenu: "inventif",
        point: 1
    },
    {
        id: 20,
        contenu: "poli/courtois",
        point: -1
    },
    {
        id: 21,
        contenu: "original",
        point: 1
    },
    {
        id: 22,
        contenu: "réfléchi",
        point: 1
    },
    {
        id: 23,
        contenu: "ingenieux",
        point: 1
    },
    {
        id: 24,
        contenu: "sûr de sois",
        point: 1
    },
    {
        id: 25,
        contenu: "ouvert",
        point: 1
    },
    {
        id: 26,
        contenu: "snob",
        point: 1
    },
    {
        id: 27,
        contenu: "sincère",
        point: -1
    },
    {
        id: 28,
        contenu: "soumis",
        point: -1
    },
    {
        id: 29,
        contenu: "suspicieux",
        point: -1
    },
    {
        id: 30,
        contenu: "original",
        point: 1
    },
];

export function getQuestionById(id) {
    let question = null;
    questions.forEach(q => {
        if (q.id == +id) {
            question = q;
        }
    })
    return question;
}

export function getShuffleQuestions(questions) {
    questions.sort(() => Math.random() - 0.5);
    return questions;
}
