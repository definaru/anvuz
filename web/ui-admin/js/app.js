//let sidebar = document.getElementById('sidebar');
async function toggleAside() {

    document.querySelector('.box').classList.toggle('open');
    sidebar.classList.toggle('open');
    let isOpen = sidebar.classList.contains('open');
    const response = await fetch('/api/v1/open-menu', {
        method: "POST",
        headers: {"Content-Type": "application/json"},
        redirect: "follow",
        body: JSON.stringify({isOpen: isOpen}),
    });
    const request = await response.json();
    console.log('request:', request)
}
