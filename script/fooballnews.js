const url = 'https://skysportsapi.herokuapp.com/sky/getnews/football/v1.0'
function makeRequest(){
    return new Promise((resolve, reject) => {

        const footballNewsAPI = new XMLHttpRequest;
        footballNewsAPI.open('GET','https://cors-anywhere.herokuapp.com/https://skysportsapi.herokuapp.com/sky/getnews/football/v1.0');
        footballNewsAPI.setRequestHeader('Access-Control-Allow-Origin', '*')
        footballNewsAPI.setRequestHeader('Access-Control-Allow-Headers',
        'Origin, X-Requested-With, Content, Accept, Content-Type, Authorization');
        footballNewsAPI.setRequestHeader('Access-Control-Allow-Methods',
        'GET, POST, PUT, DELETE, PATCH, OPTIONS')
        footballNewsAPI.onreadystatechange = () =>{
            if(footballNewsAPI.readyState === 4){
                if(footballNewsAPI.status === 200 || footballNewsAPI.status === 201){
                    resolve(JSON.parse(footballNewsAPI.response))
                    console.log('succesful')
                }else{
                    reject(JSON.parse(footballNewsAPI.response))
                    console.log('unsuccesful')
                }
            }
        }
        footballNewsAPI.send();
    })
}

const Title = document.getElementById('title')
const description = document.getElementById('description')
const image = document.getElementById('img');

const test = document.getElementById('test');
// test.textContent = 'ddjdj'
async function getFootballNews(){
  
        const footballNewsPromise = makeRequest('GET',url)

        const footballNewsResponse = await footballNewsPromise;

        Title.textContent = footballNewsResponse[0].title;
        image.src = footballNewsResponse[0].imgsrc;
        description.textContent = footballNewsResponse[0].shortdesc
        test.textContent = 'fkfknenenen'
}

const btn = document.getElementById('btn')

btn.addEventListener('click', (e)=>{
    e.preventDefault;
    getFootballNews();
})


