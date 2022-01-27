const quizDB = [

    {
    question: "Q1: What does CSS stand for?",
    a: "Colorful style sheet",
    b: "Computer style sheet",
    c: "Cascading style sheet",
    d: "Creative style sheet",
    ans: "ans3"
    },

    
    {
        question: "Q2: If we want define style for an unique element, then which css selector will we use ?",
        a: "Id",
        b: "Class",
        c: "text",
        d: "name",
        ans: "ans1"
        },
        

        
    {
        question: "Q3: If we don't want to allow a floating div to the left side of an element, which css property will we use?",
        a: "margin",
        b: "float",
        c: "clear",
        d: "padding",
        ans: "ans3"
        },
    
        {
            question: "Q4: Suppose we want to arragnge five nos. of DIVs so that DIV4 is placed above DIV1. Now, which css property will we use to control the order of stack?",
            a: "S-index",
            b: "Y-index",
            c: "Z-index",
            d: "X-index",
            ans: "ans3"
        },
        {
            question: "Q5: If we want to wrap a block of text around an image, which css property will we use?",
            a: "wrap",
            b: "float",
            c: "push",
            d: "align",
            ans: "ans2"
            },
            {
                question: "Q6: If we want to use a nice looking green dotted border around an image, which css property will we use?",
                a: "border-color",
                b: "border-style",
                c: "border-radius",
                d: "border-line",
                ans: "ans2"
                },
                {
                    question: "Q7: If we want to show an Arrow as cursor, then which value we will use?",
                    a: "pointer",
                    b: "default",
                    c: "arrow",
                    d: "arr",
                    ans: "ans2"
                    },
                    {
                        question: "Q8: Which of the following properties will we use to display border around a cell without any content?",
                        a: "empty cells",
                        b: "blank cell",
                        c: "noncontent cell",
                        d: "void cell",
                        ans: "ans1"
                        },
                        {
                            question: "Q9: How can we write comment along with CSS code?",
                            a: "/* a comment */",
                            b: "// a comment //",
                            c: "/ a comment /",
                            d: "<' a comment'>",
                            ans: "ans1"
                            },
                            {
                                question: "Q10: Which CSS property is used to control the text size of an element?",
                                a: "font-style",
                                b: "font-size",
                                c: "text-size",
                                d: "text-style",
                                ans: "ans3"
                                }

];

const question = document.querySelector('.question');
const option1 = document.querySelector('#option1');
const option2 = document.querySelector('#option2');
const option3 = document.querySelector('#option3');
const option4 = document.querySelector('#option4');
const submit = document.querySelector('#submit');

const answers = document.querySelectorAll('.answer');
const showScore = document.querySelector('#showScore');


let questionCount = 0;
let score = 0;

const loadQuestion = () => {

    const questionList = quizDB[questionCount];

    question.innerText = questionList.question;
    
    option1.innerText = questionList.a;
    option2.innerText = questionList.b;
    option3.innerText = questionList.c;
    option4.innerText = questionList.d;



}

loadQuestion();

const getCheckAnswer = () => {


    let answer;

    answers.forEach((curAnsElem) => {

        if (curAnsElem.checked) {
            
            answer = curAnsElem.id;
            
        }      
    });



    return answer;
};

const deselectAll = () => {

    answers.forEach((curAnsElem) => curAnsElem.checked = false );
  
}

submit.addEventListener('click', () => {

    const checkedAnswer = getCheckAnswer();
    console.log(checkedAnswer);
    if (checkedAnswer == quizDB[questionCount].ans) {
        
        score++;
    };

    questionCount++;
    deselectAll();

    if (questionCount < quizDB.length) {
        
        loadQuestion();
 
    }

    else{
        
        sessionStorage.setItem("time", time);
        clearInterval(mytime);

        if (score<5) {

            

            showScore.innerHTML = `
        
            <h5 class=h6t> you scored ${score} out of ${quizDB.length} 😔 </h5>
            <p> your total Time: ${time} second</p>

           
            <p class=h5t> Better Luck Next Time.. 🙂</p>

            <button  class="btn bt2" onclick="location.reload()">Try Again</button>
            <a href="sample_quiz.php" class="btn bt3">End Exam</a>                          
    
    
            `;
        }

        else if(score<10 && score>4){

            showScore.innerHTML = `
        
            <h5 class=h6t> you scored ${score} out of ${quizDB.length} ✌️ </h5>
            <p> your total Time: ${time} second</p>

            <h6 class=h5t> Good Luck For Future.. 😇</h6>

            <button  class="btn bt2" onclick="location.reload()">Try Again</button>
            <a href="sample_quiz.php" class="btn bt3">End Exam</a>                          
    
    
            `;
        }

        else {

            showScore.innerHTML = `
        
            <h5 class=h6t> you scored ${score} out of ${quizDB.length}  🎉 </h5>
            <p> your total Time: ${time} second</p>

            <h6 class=h5t> You are Just Awasome..!! 😍</h6>

            <button  class="btn bt2" onclick="location.reload()">Try Again</button>
            <a href="sample_quiz.php" class="btn bt3">End Exam</a>                          


    
    
            `;
        }



        showScore.classList.remove('scoreArea');
        
    }

});