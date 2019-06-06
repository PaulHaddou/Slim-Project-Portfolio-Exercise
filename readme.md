# Sujet: Utilisation du framework php Slim.
Projet : Créer un portfolio avec slim.
Étudiant : Paul Haddou H2G1 P2022


# Technos Utilisées
Html, Scss, PHP, Slim, Bootstraps, MySQL.


## Fonctionnalités

- J'ai réalisé un portfolio dynamique et basique. Quand l'on switch de catégories (All projects, Développement, Design), les projets correspondant s'affichent automatiquement. Ex: si je vais dans design je n'aurai que mes projets design. Et si j'en rajoute un dans la BDD, il se rajoute automatiquement dans la bonne catégorie. 

- J'ai mis 8 projets, mais je me suis servis de ce que l'on a vue en cours pour n'avoir qu'une seule page template qui sert à tous les projets.

- Les erreurs 404 et 500 sont gérées. Sont l'on rentre une url qui n'existe pas, une erreur 404 s'affiche.


## Problèmes rencontrés

- Le problème que je n'ai toujours pas réglé est le problème d'encodage des textes dans la BDD. Résultat, les textes dans les pages **projet** et **about** ont les caractères spéciaux qui sautent. Et pourtant j'ai essayé les différents encodages, je sais pas pourquoi cela veut pas marcher.

- Les autres problèmes que j'ai rencontré on plus étaient des erreurs d'inattention qu'autre chose. Notamment les **fetchAll** et **fetch**, les regex.

- Et j'ai aussi eu des problèmes de compréhension de bootstraps. C'est utile de temps en temps mais je trouve que un bon petit css y a rien de mieux. J'ai donc créer un fichier css. D'ailleurs la aussi j'ai eu un problème. Vu que l'on fait un include du header, on a donc un lien identique pour le css. Ce qui me pose problème pour la page projet vu que le chemin est différent pour accéder au css. J'ai voulu régler ça comme avec du php classique, c'est-à-dire en créant une variable **$css**. Mais là, je n'ai pas trouvé comment faire. Donc j'ai mis un truc sale; j'ai mis les 2 chemins du css dans le header.


## Remerciements
Je me suis servi du template de base que l'on avait vu en cours pour bien comprendre comment marchait slim. Donc vu que c'est vous qui l'avait fait ben ... je vous remercie. Et j'en profite aussi pour vous remercier pour cette année de cours. Sans vous je n'aurai sans doute pas autant progressé en dev et ça c'est beau.<3



Lien GitHub du projet : https://github.com/PaulHaddou/Slim-Project-Portfolio-Exercise