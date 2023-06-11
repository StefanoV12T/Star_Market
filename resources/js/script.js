const nav = document.querySelector('nav');

document.querySelector('#burger').addEventListener('click',(e) => {
  e.currentTarget.classList.toggle("active");
  nav.classList.toggle('show');
})

Livewire.on('paginaAggiornata', () => {
  location.reload(); // Esegui il refresh della pagina
});