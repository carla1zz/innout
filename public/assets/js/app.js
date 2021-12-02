// if(localStorage.getItem('side') == '1'){
//     const body = document.querySelector('body')
//     body.classList.toggle('hide-sidebar')
// } 

(function () {
    const menuToggle = document.querySelector('.menu-toggle-c')
    menuToggle.onclick = function (e) {
        const body = document.querySelector('body')
        body.classList.toggle('hide-sidebar')
        localStorage.setItem('side', '1')
        console.log("a")
    }
}) ()


function activateClock() {
    const activeClock = document.querySelector('[active-clock]')
    if(!activeClock) return 
    
    function addOneSecond(hours, minutes, seconds) {
        const d = new Date()
        d.setHours(parseInt(hours)) 
        d.setMinutes(parseInt(minutes)) 
        d.setSeconds(parseInt(seconds) +1)
    
        const h = `${d.getHours()}`.padStart(2, 0)
        const m = `${d.getMinutes()}`.padStart(2, 0)
        const s = `${d.getSeconds()}`.padStart(2, 0)
    
        return `${h}:${m}:${s}`
    }
    
    setInterval(function() {
        const parts = activeClock.innerHTML.split(':')
        activeClock.innerHTML = addOneSecond(...parts)
    }, 1000)
}

activateClock()

const $html = document.querySelector('html')
const $checkbox = document.querySelector('#switch')
const darkTableText = document.querySelector('.table.table-striped.table-hover')

if(localStorage.getItem('dark') == 'true'){
    $html.classList.toggle('dark-mode')
    try{
        darkTableText.classList.toggle('text-light')
    } catch {}
    $checkbox.checked = true

} 

$checkbox.addEventListener('change', function() {
    $html.classList.toggle('dark-mode')
    try{
        darkTableText.classList.toggle('text-light')
    } catch {}
    localStorage.setItem("dark", this.checked)
    // console.log(localStorage.getItem("dark"))
})

