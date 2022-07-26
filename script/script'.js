const apirequest = new XMLHttpRequest;
const tableSection = document.getElementById('table');



apirequest.onreadystatechange = () =>{
    if(apirequest.readyState === 4){
        const response = apirequest.response;

        tableSection.textContent = response;
    }
}


const btn = document.getElementById('btn');

btn.addEventListener('click', (e)=>{
    e.preventDefault;
    apirequest.open('GET', 'https://soccer.sportmonks.com/api/v2.0/leagues?api_token=CpOeVlasHjbGpi588V9VGRG0bj93HfF7VA0b6rpoovGaUH120WJU4Rfmhniu');
    
    apirequest.send();
})

tableSection.textContent = 'sdfghyju'

// fetch('http://api.football-data.org/v4/competitions/PL/standings')
// .then(res => {
//     if(res.ok){
//         console.log("success")
//     }else{
//         console.error('Unsucessful')
//     }
//     res.json()
// })
// .then(data => console.log(data))

