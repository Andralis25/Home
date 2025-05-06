document.getElementById('appointment-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert("Programarea ta a fost trimisă cu succes! Vei fi contactată pentru confirmare.");
    this.reset();
});
