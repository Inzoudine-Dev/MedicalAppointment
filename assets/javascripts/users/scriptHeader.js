// Récupération des éléments
const icone_menue_header = document.getElementById("icone_menue_header_id");
const menue_header = document.getElementById("menue_header_id");

// Afficher le menu lorsque la souris passe sur l'icône
icone_menue_header.addEventListener("mouseenter", function () {
    menue_header.style.visibility = 'visible';
});

// Cacher le menu lorsqu'on clique à l'extérieur, mais uniquement si la largeur est ≤ 673px
window.addEventListener("click", function (e) {
    if (window.innerWidth <= 692 &&
        !icone_menue_header.contains(e.target) &&
        !menue_header.contains(e.target)) {
        menue_header.style.visibility = 'hidden';
    }
});

// Réinitialiser la visibilité du menu lors du redimensionnement de la fenêtre
window.addEventListener("resize", function () {
    if (window.innerWidth > 692) {
        menue_header.style.visibility = 'visible'; // Toujours visible sur les écrans larges
    } else {
        menue_header.style.visibility = 'hidden'; // Cacher par défaut si on réduit la taille
    }
});
