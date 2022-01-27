const quizDB = [

    {
    question: "Q1: JavaScript is a ___ -side programming language.",
    a: "Cliant",
    b: "Server",
    c: "Both",
    d: "None",
    ans: "ans3"
    },

    
    {
        question: "Q2: Which built-in method combines the text of two strings and returns a new string?",
        a: "append()",
        b: "concat()",
        c: "attach()",
        d: "None of the above.",
        ans: "ans2"
        },
        

        
    {
        question: "Q3: Which of the following function of String object returns the calling string value converted to upper case?",
        a: "toLocaleUpperCase()",
        b: "toUpperCase()",
        c: "toString()",
        d: "substring()",
        ans: "ans2"
        },
    
        {
            question: "Q4: Which of the following function of String object causes a string to be displayed as a subscript, as if it were in a <sub> tag?",
            a: "sup()",
            b: "small()",
            c: "strike()",
            d: "sub()",
            ans: "ans4"
        },
        {
            question: "Q5: Which of the following function of Array object removes the last element from an array and returns that element?",
            a: "pop()",
            b: "push()",
            c: "join()",
            d: "map()",
            ans: "ans1"
            },
            {
                question: "Q6: Which of the following function of Array object represents the source code of an object?",
                a: "toSource()",
                b: "splice()",
                c: "toString()",
                d: "unshift()",
                ans: "ans1"
                },
                {
                    question: "Q7: Which are the correct “if” statements to execute certain code if “x” is equal to 2?",
                    a: "if(x 2)",
                    b: "if(x = 2)",
                    c: "if(x == 2)",
                    d: "if(x != 2 )",
                    ans: "ans3"
                    },
                    {
                        question: "Q8: Which of the following will write the message “Hello DataFlair!” in an alert box?",
                        a: "alertBox(“Hello DataFlair!”);",
                        b: "alert(Hello DataFlair!);",
                        c: "msgAlert(“Hello DataFlair!”);",
                        d: "alert(“Hello DataFlair!”);",
                        ans: "ans4"
                        },
                        {
                            question: "Q9: How do you find the minimum of x and y using JavaScript?",
                            a: "min(x,y);",
                            b: "Math.min(x,y)",
                            c: "Math.min(xy)",
                            d: "min(xy);",
                            ans: "ans2"
                            },
                            {
                                question: "Q10: Which JavaScript label catches all the values, except for the ones specified?",
                                a: "catch",
                                b: "label",
                                c: "try",
                                d: "default",
                                ans: "ans4"
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