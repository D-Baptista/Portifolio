document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.nav-link.alerta').forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      alert('This feacture is not avaliable yet');
    });
  });
});                                                                 