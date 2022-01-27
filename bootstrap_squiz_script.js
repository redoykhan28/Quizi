const quizDB = [

    {
    question: "Q1: Bootstrap's Grid System Allows Up To?",
    a: "6 Columns Across The Page",
    b: "8 Columns Across The Page",
    c: "12 Columns Across The Page",
    d: "24 Columns Across The Page",
    ans: "ans3"
    },

    
    {
        question: "Q2: Which of the following class indicates a warning that might need attention?",
        a: ".active",
        b: ".success",
        c: ".warning",
        d: ".danger",
        ans: "ans3"
        },
        

        
    {
        question: "Q3: Which of the following bootstrap style of button indicates a dangerous or potentially negative action?",
        a: "btn-warning",
        b: "btn-danger",
        c: "btn-link",
        d: "btn-info",
        ans: "ans2"
        },
    
        {
            question: "Q4: Which of the following bootstrap style of image gives the image rounded corners?",
            a: ".img-rounded",
            b: ".img-circle",
            c: ".img-thumbnail",
            d: "None of the above.",
            ans: "ans1"
        },
        {
            question: "Q5: Which of the following bootstrap styles are used to create a pills navigation?",
            a: ".nav, .nav-tabs",
            b: ".nav, .nav-pills",
            c: ".nav, .nav-pills, .nav-stacked",
            d: ".nav, .nav-tabs, .nav-justified)",
            ans: "ans2"
            },
            {
                question: "Q6: Which of the following bootstrap style is to be used if you want to create a .navbar that scrolls with the page?",
                a: ".navbar-static-top",
                b: ".navbar-fixed",
                c: ".navbar-fixed-top",
                d: "None of the above.",
                ans: "ans1"
                },
                {
                    question: "Q7: Default Size Of H3 Bootstrap Heading",
                    a: "18px",
                    b: "24px",
                    c: "26px",
                    d: "30px",
                    ans: "ansb"
                    },
                    {
                        question: "Q8: Glyphicons Is Mainly Used For?",
                        a: "Slideshow",
                        b: "Graphic Images",
                        c: "Animation",
                        d: "Providing Different Icons",
                        ans: "ans4"
                        },
                        {
                            question: "Q9: Bootstrap Is Developed By",
                            a: "James Gosling",
                            b: "Mark Otto And Jacob Thornton",
                            c: "Mark Jukervich)",
                            d: "None Of Them;",
                            ans: "ans2"
                            },
                            {
                                question: "Q10:  Which Class Indicates A Dropdown Menu?",
                                a: ".dropdown",
                                b: ".select",
                                c: ".dropdown-list",
                                d: ".dropup-list",
                                ans: "ans1"
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