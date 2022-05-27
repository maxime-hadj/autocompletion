document.addEventListener('DOMContentLoaded', ()=>{

const searchGames = document.querySelector('#searchGames')
const matchList = document.querySelector('#match-list')

const fetchGames = async searchText =>{
    const res = await fetch('games.php')
    const games = await res.json()

    let matches = games.filter(game =>{
        const regex = new RegExp(`^${searchText}`, 'gi')
        return game.title.match(regex)
    })

    if(searchText.length === 0) {
        matches = []
        matchList.innerHTML = ''
    }

    outputHTML(matches)

    //console.log(matches)

}

const outputHTML = matches =>{
    if(matches.length > 0){
        const html = matches.map(match =>`
            <div class="card card-body mb-1">
            <a href="element.php?id=${match.id}">
                <h4>${match.title}, ${match.genre} <span class="text-primary">
                    (${match.releasedate})</span></h4>
            </a>
            </div>
            `).join('')
            //console.log(html)
        matchList.innerHTML = html
    }
}

function searchPage(event){
    event.key === 'Enter' ? location.href = `search.php?search=${searchGames.value}` : null
}

function searchButton(eventAlt){
    eventAlt.click('searchButton') ? location.href = `search.php?search=${searchGames.value}` : null
}

searchGames.addEventListener('keyup', (event) =>{ 
    fetchGames(searchGames.value)
    searchPage(event)
    })

searchGames.addEventListener('click', (eventAlt) =>{
    searchButton(eventAlt)
})

})