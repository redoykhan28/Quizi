const quizDB = [

    {
    question: "Q1: What is the full form of HTML?",
    a: "Hello To My Land",
    b: "Hyper Text Makeup Language",
    c: "Hey Text Makeup Language",
    d: "Hyper Text Makrkup Language",
    ans: "ans4"
    },

    
    {
        question: "Q2: How many tags are in a regular element?",
        a: "two",
        b: "four",
        c: "three",
        d: "one",
        ans: "ans1"
        },

        
    {
        question: "Q3: What is the difference between an opening tag and a closing tag?",
        a: "Opening tag has a / in front",
        b: "There is no difference",
        c: "Both tag has a / in front",
        d: "Closing tag has a / in front",
        ans: "ans4"
        },
    
        {
        question: "Q4: <br/> What type of tag is this?",
        a: "Break tag",
        b: "A broken one",
        c: "An opening tag",
        d: "An Closing tag",
        ans: "ans1"
        },
        {
            question: "Q5: <body> Is this an opening tag or a closing tag?",
            a: "Opening",
            b: "Closing",
            c: "Empty",
            d: "None Of them",
            ans: "ans1"
            },
            {
                question: "Q6: What is an element that does not have a closing tag called?",
                a: "tag",
                b: "Empty Element",
                c: "Closed Element",
                d: "All of them",
                ans: "ans2"
                },
                {
                    question: "Q7: Which of the following is an example of an empty element?",
                    a: "< img / >",
                    b: "< img > < / img >",
                    c: "< / img>",
                    d: "All of them",
                    ans: "ans1"
                    },
                    {
                        question: "Q8: What should values always be enclosed in?",
                        a: "Quotation marks",
                        b: "Commas",
                        c: "Parenthesis",
                        d: "Semicolon",
                        ans: "ans1"
                        },
                        {
                            question: "Q9:  Where do all items for the same website need to be saved?",
                            a: "In the same folder",
                            b: "Where ever is fine",
                            c: "In different folders",
                            d: "None of them",
                            ans: "ans1"
                            },
                            {
                                question: "Q10: What is always a welcome page, and explains the purpose or topic of the site?",
                                a: "Page 4",
                                b: "Page 3",
                                c: "Homepage",
                                d: "Table of contents",
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