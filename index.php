<?php
/* =====================================================================
   PORTFOLIO — Mickaël Seo — BTS SIO option SLAM
   ---------------------------------------------------------------------
   Toutes les données du site sont dans les tableaux ci-dessous.
   Pour modifier un texte, un projet ou une compétence : c'est ici,
   pas besoin de toucher au HTML plus bas.

   Un champ laissé vide ('') garde son cadre sur la page, simplement vide.
   (Un texte contenant « [À COMPLÉTER » serait surligné en ambre sur la page.)

   Icônes : Font Awesome 6 (https://fontawesome.com/search?ic=free).
   On écrit la classe complète, ex. 'fa-brands fa-php' ou 'fa-solid fa-database'.
   ===================================================================== */

/* ---------- 1. Profil ---------- */
$profil = [
    'prenom'        => 'Mickaël',
    'nom'           => 'Seo',
    'formation'     => 'Étudiant en BTS SIO — option SLAM',
    'etablissement' => 'Lycée Dick Ukeïwe',
    'disponibilite' => 'Disponible pour un stage ou une alternance',
    'accroche'      => "Passionné par le développement d'applications et la création web, je conçois des solutions fonctionnelles et pensées pour l'utilisateur.",
    'photo'         => 'assets/img/photo.svg', // remplace par assets/img/photo.jpg
    'email'         => '', // ex. prenom.nom@gmail.com
    'telephone'     => '', // ex. +687 12 34 56
    'localisation'  => 'La Coulée, Nouvelle-Calédonie',
    'github'        => '', // ancien portfolio : https://github.com/mickaelseo (à vérifier)
    'linkedin'      => '', // ancien portfolio : https://linkedin.com/in/mickaelseo (à vérifier)
];

/* Informations pratiques affichées dans la section Contact : [libellé, valeur, icône] */
$infos = [
    ['Recherche', 'Stage / alternance en développement', 'fa-solid fa-magnifying-glass'],
    ['Mobilité',  'Nouvelle-Calédonie · à distance',     'fa-solid fa-plane'],
    ['Langues',   'Français (natif) · Anglais (B2)',     'fa-solid fa-language'],
];

/* ---------- 2. À propos (un paragraphe par ligne) ---------- */
$aPropos = [
    "Je suis en 2ᵉ année de BTS SIO option SLAM (Solutions Logicielles et Applications Métiers) au Lycée Dick Ukeïwe, et j'habite à La Coulée. Ma formation est centrée sur le développement d'applications web et logicielles, la conception de bases de données et l'analyse des besoins métier.",
    "Mon objectif : devenir développeur web full-stack ou développeur d'applications, dans une équipe où je pourrai construire des solutions concrètes et continuer à progresser.",
    "Je suis à l'aise côté back-end (PHP, Python, Java) comme côté front-end (HTML, CSS, JavaScript). La visualisation de données m'intéresse aussi, surtout depuis ma participation au DataVyz Challenge.",
    "J'ai fait mes stages chez M+ Software et au SIC, le service informatique de l'Administration Territoriale de Wallis-et-Futuna. Au SIC, j'ai travaillé en autonomie, ce qui m'a appris à m'organiser et à trouver des solutions par moi-même.",
    "J'ai aussi travaillé chez McDonald's et chez Micromédia. Deux environnements très différents, mais qui m'ont appris le travail en équipe et le contact avec les clients.",
];
$interets = [
    ['Développement web',        'fa-solid fa-code'],
    ['Visualisation de données', 'fa-solid fa-chart-line'],
    ['Infrastructure serveur',   'fa-solid fa-server'],
    ['Cybersécurité',            'fa-solid fa-shield-halved'],
];

/* ---------- 3. Compétences ----------
   Chaque catégorie a une icône et une liste de tuiles [nom, icône].     */
$competences = [
    'Langages' => [
        'icone' => 'fa-solid fa-code',
        'items' => [
            ['PHP',        'fa-brands fa-php'],
            ['Python',     'fa-brands fa-python'],
            ['JavaScript', 'fa-brands fa-js'],
            ['Java',       'fa-brands fa-java'],
            ['SQL',        'fa-solid fa-database'],
            ['HTML',       'fa-brands fa-html5'],
            ['CSS',        'fa-brands fa-css3-alt'],
            ['Bash',       'fa-solid fa-terminal'],
            ['JSON',       'fa-solid fa-file-code'],
            ['Dart',       'fa-solid fa-bullseye'],
        ],
    ],
    'Frameworks et librairies' => [
        'icone' => 'fa-solid fa-layer-group',
        'items' => [
            ['Bootstrap',    'fa-brands fa-bootstrap'],
            ['Flutter',      'fa-solid fa-mobile-screen'],
            ['Tailwind CSS', 'fa-solid fa-wind'],
            ['Chart.js',     'fa-solid fa-chart-pie'],
            ['jQuery',       'fa-solid fa-dollar-sign'],
            ['FPDF',         'fa-solid fa-file-pdf'],
        ],
    ],
    'Bases de données' => [
        'icone' => 'fa-solid fa-database',
        'items' => [
            ['MySQL',        'fa-solid fa-database'],
            ['MariaDB',      'fa-solid fa-database'],
            ['PostgreSQL',   'fa-solid fa-database'],
            ['phpMyAdmin',   'fa-solid fa-table'],
            ['Merise / MCD', 'fa-solid fa-diagram-project'],
        ],
    ],
    'Outils et méthodes' => [
        'icone' => 'fa-solid fa-toolbox',
        'items' => [
            ['Git / GitHub',  'fa-brands fa-github'],
            ['Odoo',          'fa-solid fa-boxes-stacked'],
            ['VS Code',       'fa-solid fa-code'],
            ['IntelliJ',      'fa-solid fa-laptop-code'],
            ['Android Studio','fa-brands fa-android'],
            ['Looping (MCD)', 'fa-solid fa-diagram-project'],
            ['XAMPP / WAMP',  'fa-solid fa-server'],
            ['Docker',        'fa-brands fa-docker'],
            ['Figma (bases)', 'fa-brands fa-figma'],
            ['Agile / Scrum', 'fa-solid fa-arrows-rotate'],
            ['UML',           'fa-solid fa-sitemap'],
        ],
    ],
];

/* Savoir-être : [nom, icône] */
$savoirEtre = [
    ['Résolution de problèmes', 'fa-solid fa-puzzle-piece'],
    ['Travail en équipe',       'fa-solid fa-people-group'],
    ['Autonomie',               'fa-solid fa-bolt'],
    ['Organisation',            'fa-solid fa-list-check'],
    ['Curiosité technique',     'fa-solid fa-magnifying-glass'],
    ['Communication',           'fa-solid fa-comments'],
];

/* ---------- 3b. Certifications ----------
   'statut' : 'Obtenue' ou 'En cours' · 'lien' : preuve en ligne ou PDF dans assets/docs/ ('' si aucun) */
$certifications = [
    ['titre' => 'Python Essentials 1 & 2', 'organisme' => 'Cisco / OpenEDG',            'date' => '2024', 'statut' => 'Obtenue', 'icone' => 'fa-brands fa-python',      'lien' => ''],
    ['titre' => 'PIX — niveau avancé',     'organisme' => 'PIX (certification nationale)', 'date' => '2024', 'statut' => 'Obtenue', 'icone' => 'fa-solid fa-desktop',      'lien' => ''],
    ['titre' => 'RGPD — fondamentaux',     'organisme' => 'CNIL / FUN-MOOC',            'date' => '2024', 'statut' => 'Obtenue', 'icone' => 'fa-solid fa-shield-halved', 'lien' => ''],
    ['titre' => 'TOEIC — 785 points',      'organisme' => 'ETS Global',                 'date' => '2024', 'statut' => 'Obtenue', 'icone' => 'fa-solid fa-language',     'lien' => ''],
];

/* ---------- 3c. Stages (du plus récent au plus ancien) ---------- */
$stages = [
    [
        'entreprise' => 'SIC — Système Informatique et Communication',
        'lieu'       => 'Wallis-et-Futuna',
        'annee'      => 'Stage de 2ᵉ année · développeur d\'applications',
        'periode'    => 'Janvier – mars 2025 · 8 semaines', // repris de l'ancien portfolio : à vérifier
        'description'=> "Stage au service informatique de l'Administration Territoriale de Wallis-et-Futuna, où j'ai travaillé en autonomie sur le développement et la maintenance d'outils internes.",
        // Missions reprises de l'ancien portfolio + outils cités dans le cahier des charges : à adapter
        'missions'   => [
            "Développement d'un module de reporting interne en PHP / MySQL",
            "Correction de bugs et amélioration de l'interface d'un outil de gestion existant",
            "Prise en main de l'infrastructure du service : Koozali SME Server, Proxmox, Tailscale",
            "Rédaction de la documentation technique et d'un guide utilisateur",
            "Réunions de suivi avec le responsable informatique",
        ],
        'technos'    => ['PHP', 'MySQL', 'Koozali SME Server', 'Proxmox', 'Tailscale'],
        'icone'      => 'fa-solid fa-network-wired',
    ],
    [
        'entreprise' => 'M+ Software',
        'lieu'       => 'Nouvelle-Calédonie',
        'annee'      => 'Stage de 1ʳᵉ année · développeur web',
        'periode'    => 'Fin octobre – fin novembre 2023',
        'description'=> "Découverte de l'environnement professionnel et participation à deux projets web, avec la prise en main d'Odoo.",
        'missions'   => [
            "Création d'un site vitrine pour un magasin de produits électroniques",
            "Refonte complète du site web de M+ Software",
            "Gestion et publication des contenus web avec Odoo",
            "Prise en main d'Odoo sous la supervision de l'équipe",
        ],
        'technos'    => ['Odoo'],
        'icone'      => 'fa-solid fa-laptop-code',
    ],
];

/* ---------- 5. Projets ----------
   - 'captures'    : chemins vers assets/img/ + texte alternatif
   - 'demo' / 'github' : laisser vide '' si pas de lien                      */
$projets = [
    [
        'id'          => 'nc-explorer',
        'titre'       => 'NC Explorer',
        // Source : fiche descriptive E6 (réalisation n°1) et cahier des charges du projet
        'resume'      => "Application mobile de guide touristique : les lieux à visiter en Nouvelle-Calédonie, à filtrer et à consulter depuis son téléphone.",
        'cadre'       => 'Projet en équipe · sept. – oct. 2026 · E6',
        'contexte'    => "Il n'existe pas d'application mobile qui regroupe les lieux touristiques de Nouvelle-Calédonie : l'offre est dispersée entre sites web, offices de tourisme, réseaux sociaux et brochures. Projet réalisé en équipe au Lycée Dick Ukeïwe, de septembre à octobre 2026.",
        'objectif'    => "Un visiteur consulte la liste des lieux, la filtre par province et par catégorie, cherche par mot-clé et ouvre la fiche d'un lieu : description, infos pratiques, photos et coordonnées GPS. Un utilisateur inscrit crée un compte et se connecte, pour enregistrer ses favoris et déposer des avis. Il fallait donc une base de données, une API en PHP et une application mobile.",
        'technos'     => ['Flutter (Dart)', 'PHP', 'API JSON', 'MySQL / MariaDB', 'PDO', 'Looping', 'Git / GitHub', 'Android Studio'],
        'taches'      => [
            "Ma partie dans l'équipe : la base de données et l'accès aux données",
            "Conception de la base nc_explorer sous Looping : le modèle, les sept tables et leurs contraintes",
            "Connexion à la base avec PDO (db.php) : erreurs levées en exceptions et vraies requêtes préparées",
            "Classes d'accès aux données LieuDAO et CategorieDAO, avec les opérations CRUD",
            "Requêtes préparées avec marqueurs (:id) pour se protéger des injections SQL",
            "Points d'entrée de l'API lieux.php et categories.php, qui renvoient du JSON",
            "Travail en équipe sur GitHub : branche dédiée, commits, push, puis intégration dans main",
        ],
        'resultat'    => "L'application fonctionne en trois couches : la base MariaDB, l'API PHP qui renvoie du JSON, et l'application Flutter testée sur émulateur Android. Deux difficultés résolues : sur l'émulateur, localhost désigne l'émulateur lui-même (il faut passer par 10.0.2.2), et PHP envoie les nombres en texte dans le JSON (d'où une conversion dans les constructeurs fromJson).",
        'captures'    => [['src' => 'assets/img/nc-explorer-banniere.svg', 'alt' => "Logo de l'application NC Explorer"]],
        'demo'        => '',
        'github'      => 'https://github.com/ncKaza/POO-Mika-Alexis',
    ],
    [
        'id'          => 'sagitta',
        'titre'       => 'Sagitta',
        'resume'      => "Migration d'une base de données vers un site web, pour rendre les données plus lisibles et plus faciles à consulter.",
        'cadre'       => 'Migration de données · application web',
        'contexte'    => "Les données étaient stockées dans une base difficile à consulter au quotidien : il fallait passer par des outils techniques pour les lire.",
        'objectif'    => "Migrer cette base vers un site web, pour que les utilisateurs consultent les données depuis un simple navigateur, de façon claire et organisée.",
        // Technos et tâches : suggestions cohérentes avec le projet, à adapter
        'technos'     => ['PHP', 'MySQL', 'HTML/CSS', 'Bootstrap', 'JavaScript'],
        'taches'      => [
            "Analyse de la base existante : tables, relations et qualité des données",
            "Conception du nouveau modèle de données (MCD / MLD)",
            "Scripts de migration et de nettoyage des données",
            "Développement des pages de consultation, avec recherche, filtres et tri",
            "Mise en page lisible et responsive avec Bootstrap",
            "Tests pour vérifier que les données migrées sont complètes et cohérentes",
        ],
        'resultat'    => "Les données sont consultables depuis un navigateur, de façon plus lisible qu'avant, sans passer par des outils techniques.",
        'captures'    => [['src' => 'assets/img/sagitta-1.svg', 'alt' => "Capture d'écran de Sagitta (à remplacer)"]],
        'demo'        => '',
        'github'      => '',
    ],
    [
        'id'          => 'etudiantannonce',
        'titre'       => 'ÉtudiantAnnonce',
        'resume'      => "Plateforme d'annonces communautaires pour les étudiants.",
        'cadre'       => 'Projet académique · 1ʳᵉ année · 6 semaines',
        'contexte'    => "Projet réalisé en 1ʳᵉ année de BTS SIO, sur six semaines.",
        'objectif'    => "Permettre aux étudiants de publier et consulter des annonces entre eux, ainsi que des bons plans, offres et promotions proposés par des entreprises locales.",
        'technos'     => ['PHP', 'MySQL', 'HTML/CSS', 'JavaScript', 'Bootstrap', 'MVC'],
        'taches'      => [
            "Développeur principal du projet",
            "Publication et consultation des annonces",
            "Authentification sécurisée et gestion des rôles (administrateur, utilisateur)",
            "Interface responsive",
        ],
        'resultat'    => "Application livrée et testée.",
        'captures'    => [['src' => 'assets/img/etudiantannonce-1.svg', 'alt' => "Capture d'écran d'ÉtudiantAnnonce (à remplacer)"]],
        'demo'        => '',
        'github'      => '',
    ],
    [
        'id'          => 'datavyz',
        'titre'       => 'DataVyz Challenge',
        'resume'      => "Dashboard interactif de visualisation de données, réalisé pour une compétition.",
        'cadre'       => 'Compétition académique · 2ᵉ année',
        'contexte'    => "Participation au DataVyz Challenge, une compétition de visualisation de données.",
        'objectif'    => "Concevoir un dashboard interactif pour explorer et analyser des jeux de données complexes.",
        'technos'     => ['Chart.js', 'HTML/CSS', 'JavaScript', 'CSV / JSON'],
        'taches'      => [
            "Développement et design du dashboard",
            "Graphiques dynamiques avec Chart.js",
            "Interface pensée pour être simple à prendre en main",
        ],
        'resultat'    => "Dashboard interactif livré.",
        'captures'    => [['src' => 'assets/img/datavyz-1.svg', 'alt' => "Capture d'écran du dashboard DataVyz (à remplacer)"]],
        'demo'        => '',
        'github'      => '',
    ],
    [
        'id'          => 'site-association',
        'titre'       => 'Site vitrine pour une association',
        'resume'      => "Site vitrine responsive pour une association sportive calédonienne.",
        'cadre'       => 'Projet personnel · client réel · 3 semaines',
        'contexte'    => "Projet personnel hors cursus, pour un vrai client : une association sportive de Nouvelle-Calédonie.",
        'objectif'    => "Donner à l'association un site vitrine en ligne, avec un formulaire de contact.",
        'technos'     => ['HTML/CSS', 'JavaScript', 'PHP', 'MySQL', 'Figma', 'cPanel'],
        'taches'      => [
            "Gestion du projet de A à Z, en autonomie",
            "Maquettage sur Figma",
            "Développement du site",
            "Déploiement sur un hébergement mutualisé et configuration du nom de domaine",
            "Formulaire de contact fonctionnel",
        ],
        'resultat'    => "Site en ligne depuis 2024.",
        'captures'    => [['src' => 'assets/img/site-association-1.svg', 'alt' => "Capture d'écran du site de l'association (à remplacer)"]],
        'demo'        => '', // lien vers le site en ligne
        'github'      => '',
    ],
];

/* ---------- 6a. Parcours scolaire (du plus récent au plus ancien) ---------- */
$formations = [
    [
        'titre'     => 'BTS SIO — option SLAM',
        'structure' => 'Lycée Dick Ukeïwe',
        'periode'   => 'Depuis septembre 2023',
        'details'   => "Services Informatiques aux Organisations, option Solutions Logicielles et Applications Métiers : développement d'applications, bases de données, gestion de projet et cybersécurité.",
    ],
    [
        'titre'     => 'Baccalauréat',
        'structure' => 'Nouvelle-Calédonie',
        'periode'   => '2023',
        'details'   => "Obtention du baccalauréat, puis entrée en BTS SIO.",
    ],
];

/* ---------- 6b. Expériences professionnelles (de la plus récente à la plus ancienne) ---------- */
$experiences = [
    [
        'poste'     => 'Vendeur conseil en informatique', // suggestion : à adapter
        'structure' => 'Micromédia',
        'periode'   => '', // vide = pas de date affichée
        'missions'  => [
            "Accueil et conseil des clients sur le matériel informatique",
            "Aide au choix et à la configuration des équipements",
            "Mise en rayon et suivi du stock",
        ],
    ],
    [
        'poste'     => 'Équipier polyvalent', // suggestion : à adapter
        'structure' => "McDonald's",
        'periode'   => '', // vide = pas de date affichée
        'missions'  => [
            "Accueil, prise de commande et encaissement",
            "Préparation des commandes en respectant les normes d'hygiène et les délais",
            "Travail en équipe dans un environnement rapide, aux heures de pointe",
        ],
    ],
];

/* ---------- 7. Veille technologique ----------
   Source : ma présentation assets/docs/veille-ia-metier.pptx (septembre 2026) */
$veille = [
    'pourquoi'=> "En SLAM, je développe des applications métier. L'IA est en train de changer ce que ces applications savent faire : elles ne se contentent plus d'afficher des données, des agents IA agissent directement dedans. Je suis ce sujet pour comprendre ce que ça change pour les entreprises, et pour moi comme futur développeur.",
    'sujets'  => [
        "L'intelligence artificielle dans les applications métier",
        "Les agents IA intégrés aux CRM et aux outils bureautiques",
        "La sécurité et la gouvernance de ces agents",
    ],
    'sources' => [ // sources des deux actualités présentées
        "Annonces officielles de Salesforce (Agentforce)",
        "Annonces officielles de Microsoft (Microsoft 365)",
        "Presse spécialisée en informatique d'entreprise",
    ],
    'outils'  => [ // suggestion : à adapter à ce que tu utilises vraiment
        "Alertes Google sur « agent IA » et « IA entreprise »",
        "Flux RSS regroupés dans un agrégateur",
        "Veille partagée et présentée à l'oral",
    ],
    // Actualités : [titre, date, ce qu'il s'est passé, points clés [libellé, texte], lien source]
    'actualites' => [
        [
            'titre'  => "Salesforce lance des agents IA « prêts à l'emploi »",
            'date'   => '11 septembre 2026',
            'icone'  => 'fa-solid fa-cloud',
            'texte'  => "Salesforce a présenté une gamme d'agents Agentforce spécialisés, déjà configurés pour des métiers précis : vente, service client, commerce, support aux collaborateurs et tâches administratives (back-office).",
            'points' => [
                ['« Casey »',        "agent de service client multicanal (voix, SMS, WhatsApp, web), déjà disponible"],
                ['« Hunter »',       "agent de prospection commerciale, en pilote, généralisation prévue en novembre 2026"],
                ['Interopérabilité', "intégration du protocole ouvert MCP pour connecter les agents à d'autres systèmes"],
                ['Objectif affiché', "fournir des agents « clé en main » plutôt que de tout construire sur mesure"],
            ],
            'source' => '', // lien vers l'article
        ],
        [
            'titre'  => "Microsoft généralise l'agent « Scout » dans Microsoft 365",
            'date'   => 'Juin 2026',
            'icone'  => 'fa-brands fa-microsoft',
            'texte'  => "Microsoft a présenté Scout, un agent IA intégré directement aux outils de Microsoft 365. Il agit dans Teams, Outlook, OneDrive et SharePoint, et s'appuie sur les e-mails, conversations, calendrier et contacts de l'utilisateur.",
            'points' => [
                ["De l'assistance à l'action", "l'agent ne se contente plus de répondre, il exécute des tâches dans l'environnement de travail"],
                ['Agent 365',                 "un second environnement pour observer, gouverner et sécuriser les agents utilisés par l'organisation"],
                ['Nouvel enjeu',              "gérer les identités, les autorisations et les actions des agents, pas seulement les créer"],
            ],
            'source' => '',
        ],
    ],
    // Ce qu'il faut retenir : [titre, texte, icône]
    'aRetenir' => [
        ["D'assistants à agents",            "L'IA ne se limite plus à répondre : elle agit directement dans les outils métier (CRM, messagerie, fichiers).", 'fa-solid fa-robot'],
        ['Des agents spécialisés par métier', "Vente, service client, support interne : les éditeurs livrent des agents préconfigurés pour chaque usage.", 'fa-solid fa-briefcase'],
        ['Un nouvel enjeu de gouvernance',    "Sécuriser, autoriser et superviser des agents autonomes devient aussi important que de les déployer.", 'fa-solid fa-user-shield'],
    ],
    'presentation' => 'assets/docs/veille-ia-metier.pptx',
];

/* ---------- 8. Documents (le bouton s'active si le fichier existe) ---------- */
$documents = [
    ['titre' => 'Curriculum vitæ',          'fichier' => 'assets/docs/cv.pdf',               'icone' => 'fa-solid fa-id-card'],
    ['titre' => 'Veille : l\'IA dans les applications métier', 'fichier' => 'assets/docs/veille-ia-metier.pptx', 'icone' => 'fa-solid fa-satellite-dish'],
];

/* ---------- Menu latéral : ancre => [libellé, icône, sous-menu éventuel] ---------- */
$menu = [
    'accueil'     => ['Accueil',     'fa-solid fa-house', ['a-propos' => ['À propos', 'fa-solid fa-user']]],
    'competences' => ['Compétences', 'fa-solid fa-screwdriver-wrench'],
    'certifications' => ['Certifications', 'fa-solid fa-certificate'],
    'projets'     => ['Projets',     'fa-solid fa-code'],
    'stages'      => ['Mes stages',  'fa-solid fa-building'],
    'parcours'    => ['Parcours',    'fa-solid fa-route'],
    'veille'      => ['Veille',      'fa-solid fa-satellite-dish'],
    'documents'   => ['Documents',   'fa-solid fa-file-arrow-down'],
    'contact'     => ['Contact',     'fa-solid fa-envelope'],
];


/* =====================================================================
   Fonctions utilitaires
   ===================================================================== */

/** Échappe un texte pour l'afficher sans risque dans le HTML. */
function e(string $texte): string
{
    return htmlspecialchars($texte, ENT_QUOTES, 'UTF-8');
}

/** Échappe le texte et surligne les mentions [À COMPLÉTER …]. */
function t(string $texte): string
{
    return preg_replace('/\[À COMPLÉTER[^\]]*\]/u', '<mark class="todo">$0</mark>', e($texte));
}

/** Vrai si le texte est encore un emplacement à remplir. */
function aCompleter(string $texte): bool
{
    return str_contains($texte, '[À COMPLÉTER');
}

$nomComplet = $profil['prenom'] . ' ' . $profil['nom'];
$lienMail   = $profil['email'] ? 'mailto:' . $profil['email'] : '';
?>
<!doctype html>
<html lang="fr" class="no-js" data-theme="sombre">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        // JS actif → active les animations ; thème mémorisé → appliqué avant l'affichage (pas de flash)
        document.documentElement.classList.replace('no-js', 'js');
        try { const th = localStorage.getItem('theme'); if (th) document.documentElement.dataset.theme = th; } catch (e) {}
    </script>
    <title><?= e($nomComplet) ?> — Portfolio BTS SIO SLAM</title>
    <meta name="description" content="Portfolio de <?= e($nomComplet) ?>, étudiant en BTS SIO option SLAM au <?= e($profil['etablissement']) ?>.">

    <!-- Polices : Comfortaa (titres) + Inter (texte). Sans internet, le site bascule sur la police système. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 + Font Awesome 6 par CDN.
         SANS INTERNET LE JOUR DE L'ÉPREUVE :
         1. télécharger :
            https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
            https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
            Font Awesome « Free for Web » sur https://fontawesome.com/download (dossiers css/ et webfonts/)
         2. tout placer dans assets/vendor/ (garder css/ et webfonts/ côte à côte pour Font Awesome)
         3. remplacer les URL ci-dessous et en bas de page par les chemins locaux, ex. assets/vendor/bootstrap.min.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <style>
        /* ============ Palette : thème sombre (par défaut) ============ */
        :root {
            --fond: #161b22;
            --surface: #1e252e;
            --surface-2: #242c36;
            --bordure: #2b3440;
            --texte: #e6edf3;
            --texte-2: #9aa7b4;
            --turquoise: #2dd4bf;          /* clin d'œil au lagon calédonien */
            --turquoise-doux: rgba(45, 212, 191, .12);
            --ambre: #f59e0b;              /* à utiliser avec parcimonie */
            --ambre-doux: rgba(245, 158, 11, .12);
            --sur-accent: #0b2420;         /* texte posé sur le turquoise */
            --ombre: 0 8px 28px rgba(0, 0, 0, .28);
            --rayon: 14px;
            --largeur-barre: 270px;
            --titres: "Comfortaa", "Inter", system-ui, sans-serif;
        }

        /* ============ Palette : thème clair ============ */
        [data-theme="clair"] {
            --fond: #eef2f5;
            --surface: #ffffff;
            --surface-2: #f5f8fa;
            --bordure: #d9e0e7;
            --texte: #16202b;
            --texte-2: #536170;
            --turquoise: #0d9488;
            --turquoise-doux: rgba(13, 148, 136, .10);
            --ambre: #b45309;
            --ambre-doux: rgba(180, 83, 9, .10);
            --sur-accent: #ffffff;
            --ombre: 0 8px 24px rgba(20, 40, 60, .08);
        }

        /* ============ Base ============ */
        html { scroll-behavior: smooth; }
        body {
            background: var(--fond);
            color: var(--texte);
            font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            font-size: 1rem;
            line-height: 1.65;
            transition: background-color .3s, color .3s;
        }
        a { color: var(--turquoise); text-decoration: none; }
        a:hover { color: var(--turquoise); text-decoration: underline; }
        ::selection { background: var(--turquoise); color: var(--sur-accent); }
        h1, h2, h3, h4 { font-family: var(--titres); font-weight: 700; }
        .texte-2 { color: var(--texte-2); }
        :focus-visible { outline: 2px solid var(--turquoise); outline-offset: 3px; }

        /* Mentions [À COMPLÉTER] bien visibles */
        mark.todo {
            background: var(--ambre-doux);
            color: var(--ambre);
            border: 1px dashed currentColor;
            border-radius: 4px;
            padding: 0 .3em;
            font-size: .9em;
        }

        /* ============ Barre latérale ============ */
        .barre {
            position: fixed;
            inset: 0 auto 0 0;
            z-index: 1040;
            width: var(--largeur-barre);
            display: flex;
            flex-direction: column;
            gap: 1.1rem;
            padding: 1.25rem 1rem;
            overflow-y: auto;
            background: var(--surface);
            border-right: 1px solid var(--bordure);
            transition: transform .3s ease, background-color .3s;
        }

        .barre-profil {
            position: relative;
            text-align: center;
            padding: 1.6rem 1rem 1.2rem;
            border-radius: var(--rayon);
            border: 1px solid var(--bordure);
            background: linear-gradient(160deg, var(--turquoise-doux), transparent 70%), var(--surface-2);
        }
        .barre-profil img {
            width: 76px; height: 76px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid var(--turquoise);
            margin-bottom: .8rem;
        }
        .barre-profil .nom { font-family: var(--titres); font-weight: 700; font-size: 1.45rem; line-height: 1.15; color: var(--turquoise); margin: 0; }
        .barre-profil .sous-titre { font-size: .85rem; color: var(--texte-2); margin: .4rem 0 0; }

        /* Interrupteur clair / sombre */
        .theme-bascule {
            position: absolute; top: .6rem; right: .6rem;
            display: flex; gap: 2px;
            padding: 3px;
            border-radius: 999px;
            border: 1px solid var(--bordure);
            background: var(--fond);
        }
        .theme-bascule button {
            width: 26px; height: 26px;
            display: grid; place-items: center;
            border: 0; border-radius: 50%;
            background: transparent;
            color: var(--texte-2);
            font-size: .75rem;
        }
        [data-theme="sombre"] .theme-bascule .vers-sombre,
        [data-theme="clair"] .theme-bascule .vers-clair { background: var(--turquoise-doux); color: var(--turquoise); }

        /* Navigation */
        .nav-barre { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; gap: .45rem; }
        .nav-barre a {
            display: flex; align-items: center; gap: .75rem;
            padding: .6rem .9rem;
            border-radius: 10px;
            border: 1px solid var(--bordure);
            background: var(--surface-2);
            color: var(--texte);
            font-size: .93rem;
            font-weight: 500;
            text-decoration: none;
            transition: border-color .2s, background-color .2s, color .2s, transform .2s;
        }
        .nav-barre a i { width: 18px; text-align: center; color: var(--texte-2); transition: color .2s; }
        .nav-barre a:hover { border-color: var(--turquoise); transform: translateX(3px); }
        .nav-barre a.active { background: var(--turquoise-doux); border-color: var(--turquoise); color: var(--turquoise); }
        .nav-barre a.active i, .nav-barre a:hover i { color: var(--turquoise); }

        .sous-nav { list-style: none; margin: .45rem 0 0 1.1rem; padding: 0 0 0 .9rem; border-left: 2px solid var(--bordure); display: flex; flex-direction: column; gap: .4rem; }
        .sous-nav a { padding: .45rem .8rem; font-size: .85rem; }

        /* Réseaux */
        .reseaux { display: flex; justify-content: center; gap: .6rem; padding: .8rem; border-radius: var(--rayon); border: 1px solid var(--bordure); background: var(--surface-2); }
        .reseaux a, .reseaux span {
            width: 40px; height: 40px;
            display: grid; place-items: center;
            border-radius: 10px;
            border: 1px solid var(--bordure);
            background: var(--surface);
            color: var(--texte);
            font-size: 1.1rem;
            transition: color .2s, border-color .2s, transform .2s;
        }
        .reseaux a:hover { color: var(--turquoise); border-color: var(--turquoise); transform: translateY(-2px); text-decoration: none; }
        .reseaux span { opacity: .4; cursor: not-allowed; }

        .barre-pied { margin-top: auto; padding-top: 1rem; border-top: 1px solid var(--bordure); text-align: center; font-size: .78rem; color: var(--texte-2); }

        /* Bouton menu (mobile) + voile */
        .bouton-menu {
            display: none;
            position: fixed; top: 1rem; left: 1rem; z-index: 1050;
            width: 46px; height: 46px;
            border-radius: 12px;
            border: 1px solid var(--bordure);
            background: var(--surface);
            color: var(--texte);
            font-size: 1.15rem;
            box-shadow: var(--ombre);
        }
        .voile { display: none; position: fixed; inset: 0; z-index: 1030; background: rgba(0, 0, 0, .5); }

        /* ============ Contenu principal ============ */
        main { margin-left: var(--largeur-barre); padding: 1.5rem clamp(1rem, 3vw, 2.5rem) 0; }
        .contenu { max-width: 1100px; margin-inline: auto; }

        section { padding-block: 3.5rem; scroll-margin-top: 1rem; }

        .titre-section {
            display: inline-block;
            font-size: clamp(1.8rem, 3vw, 2.3rem);
            color: var(--turquoise);
            margin-bottom: 1.8rem;
        }
        .titre-section::after {
            content: "";
            display: block;
            width: 55%;
            height: 3px;
            margin-top: .45rem;
            border-radius: 2px;
            background: var(--turquoise);
        }
        .intro-section { color: var(--texte-2); max-width: 46rem; margin: -.8rem 0 2rem; }

        /* Panneaux et cartes */
        .panneau {
            background: var(--surface);
            border: 1px solid var(--bordure);
            border-radius: var(--rayon);
            box-shadow: var(--ombre);
            padding: 1.6rem;
            transition: background-color .3s, border-color .2s, transform .2s;
        }
        .panneau-titre {
            display: flex; align-items: center; gap: .6rem;
            font-size: 1.15rem;
            color: var(--turquoise);
            padding-bottom: .8rem;
            margin-bottom: 1.2rem;
            border-bottom: 1px solid var(--bordure);
        }
        .survol:hover { transform: translateY(-4px); border-color: var(--turquoise); }

        /* ============ Accueil ============ */
        #accueil {
            position: relative;
            min-height: calc(100vh - 3rem);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 4rem 1.5rem;
            border-radius: 20px;
            border: 1px solid var(--bordure);
            background: radial-gradient(ellipse at center, var(--surface-2), var(--surface) 70%);
            overflow: hidden;
            isolation: isolate;
        }
        /* Formes floues décoratives, en fond */
        .forme {
            position: absolute;
            z-index: -1;
            border: 1px solid rgba(45, 212, 191, .35);
            background: var(--turquoise-doux);
            border-radius: 42% 58% 63% 37% / 41% 44% 56% 59%;
            animation: flotte 18s ease-in-out infinite alternate;
        }
        .forme-1 { width: 300px; height: 380px; top: -90px; right: -70px; }
        .forme-2 { width: 230px; height: 230px; bottom: -70px; left: -60px; animation-delay: -6s; }
        .forme-3 { width: 150px; height: 150px; top: 46%; left: 56%; opacity: .7; animation-delay: -12s; }
        @keyframes flotte {
            0%   { transform: translate(0, 0) rotate(0deg);      border-radius: 42% 58% 63% 37% / 41% 44% 56% 59%; }
            100% { transform: translate(-25px, 20px) rotate(18deg); border-radius: 58% 42% 38% 62% / 55% 38% 62% 45%; }
        }
        .hero-nom { font-size: clamp(2.4rem, 6vw, 4.2rem); color: var(--turquoise); line-height: 1.1; margin-bottom: .6rem; }
        .hero-sous-titre { font-family: var(--titres); font-weight: 700; font-size: clamp(1.05rem, 2vw, 1.4rem); color: var(--texte); margin-bottom: 1.4rem; }
        .hero-accroche { max-width: 36rem; color: var(--texte-2); font-size: 1.08rem; margin-inline: auto; }

        .btn { padding: .7rem 1.3rem; border-radius: 10px; font-weight: 600; }
        .btn-accent { background: var(--turquoise); color: var(--sur-accent); border: 1px solid var(--turquoise); }
        .btn-accent:hover { background: transparent; color: var(--turquoise); }
        .btn-contour { border: 1px solid var(--bordure); color: var(--texte); background: var(--surface-2); }
        .btn-contour:hover { border-color: var(--turquoise); color: var(--turquoise); }

        /* ============ À propos ============ */
        .photo-profil { width: 100%; max-width: 300px; aspect-ratio: 1; object-fit: cover; border-radius: var(--rayon); border: 1px solid var(--bordure); }
        .pastille {
            display: inline-flex; align-items: center; gap: .5rem;
            padding: .45rem .9rem;
            margin: 0 .4rem .5rem 0;
            border-radius: 999px;
            border: 1px solid var(--bordure);
            background: var(--turquoise-doux);
            font-size: .88rem; font-weight: 500;
        }
        .pastille i { color: var(--turquoise); }

        /* ============ Badge disponibilité ============ */
        .badge-dispo {
            display: inline-flex; align-items: center; gap: .55rem;
            padding: .4rem 1rem;
            margin-bottom: 1.5rem;
            border-radius: 999px;
            border: 1px solid var(--turquoise);
            background: var(--turquoise-doux);
            color: var(--turquoise);
            font-size: .85rem; font-weight: 600;
        }
        .badge-dispo::before {
            content: "";
            width: 8px; height: 8px;
            border-radius: 50%;
            background: var(--turquoise);
            animation: pulsation 2s ease-in-out infinite;
        }
        @keyframes pulsation { 50% { opacity: .4; transform: scale(.8); } }

        /* ============ Chiffres clés ============ */
        .chiffre { text-align: center; padding: 1.3rem 1rem; }
        .chiffre strong { display: block; font-family: var(--titres); font-size: 2.1rem; line-height: 1.1; color: var(--turquoise); }
        .chiffre span { font-size: .85rem; color: var(--texte-2); }

        /* ============ Savoir-être ============ */
        .savoir-etre { display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: .8rem; }
        .savoir-etre div {
            display: flex; align-items: center; gap: .75rem;
            padding: .75rem .9rem;
            border-radius: 10px;
            border: 1px solid var(--bordure);
            background: var(--surface-2);
            font-size: .9rem; font-weight: 500;
        }
        .savoir-etre i { width: 32px; height: 32px; display: grid; place-items: center; border-radius: 8px; background: var(--turquoise-doux); color: var(--turquoise); }

        /* ============ Compétences : tuiles ============ */
        .tuiles { display: grid; grid-template-columns: repeat(auto-fill, minmax(118px, 1fr)); gap: .9rem; }
        .tuile {
            display: flex; flex-direction: column; align-items: center; justify-content: center; gap: .6rem;
            min-height: 112px;
            padding: 1rem .6rem;
            text-align: center;
            border-radius: 12px;
            border: 1px solid var(--bordure);
            background: var(--surface-2);
            font-size: .86rem; font-weight: 600;
            line-height: 1.3;
            transition: transform .2s, border-color .2s;
        }
        .tuile i { font-size: 1.7rem; color: var(--texte); transition: color .2s; }
        .tuile:hover { transform: translateY(-4px); border-color: var(--turquoise); }
        .tuile:hover i { color: var(--turquoise); }
        .tuile mark.todo { font-size: .75rem; }

        /* ============ Certifications ============ */
        .certif { display: flex; gap: 1rem; align-items: flex-start; height: 100%; }
        .certif h3 { font-size: 1.02rem; margin-bottom: .2rem; }
        .certif .organisme { font-size: .9rem; color: var(--texte-2); margin-bottom: .6rem; }
        .statut { display: inline-block; padding: .15rem .6rem; border-radius: 999px; font-size: .75rem; font-weight: 600; }
        .statut.obtenue { background: var(--turquoise-doux); color: var(--turquoise); }
        .statut.en-cours { background: var(--ambre-doux); color: var(--ambre); }

        /* ============ Stages ============ */
        .stage { height: 100%; display: flex; flex-direction: column; }
        .stage-tete { display: flex; gap: 1rem; align-items: center; padding-bottom: 1rem; margin-bottom: 1rem; border-bottom: 1px solid var(--bordure); }
        .stage-tete h3 { font-size: 1.15rem; color: var(--turquoise); margin: 0 0 .15rem; }
        .stage-tete .lieu { font-size: .88rem; color: var(--texte-2); }
        .puce-info {
            display: inline-flex; align-items: center; gap: .4rem;
            padding: .2rem .65rem;
            margin: 0 .4rem .5rem 0;
            border-radius: 6px;
            border: 1px solid var(--bordure);
            background: var(--surface-2);
            font-size: .8rem;
            color: var(--texte-2);
        }
        .puce-info i { color: var(--turquoise); }
        .stage h4 { font-size: .9rem; color: var(--turquoise); margin: 1rem 0 .4rem; }

        /* ============ Projets ============ */
        .projet { padding: 0; overflow: hidden; display: flex; flex-direction: column; height: 100%; }
        .projet img { width: 100%; aspect-ratio: 16 / 9; object-fit: cover; border-bottom: 1px solid var(--bordure); }
        .projet .corps { padding: 1.3rem 1.4rem 1.4rem; display: flex; flex-direction: column; flex: 1; }
        .projet h3 { font-size: 1.15rem; color: var(--turquoise); margin-bottom: .35rem; }
        .projet-cadre { font-size: .78rem; font-weight: 600; color: var(--texte-2); text-transform: uppercase; letter-spacing: .05em; margin-bottom: .4rem; }
        .etiquette {
            display: inline-block;
            padding: .2rem .6rem;
            margin: 0 .3rem .35rem 0;
            border-radius: 6px;
            border: 1px solid var(--bordure);
            background: var(--surface-2);
            font-size: .76rem; font-weight: 500;
        }
        .etiquette mark.todo { border: 0; background: none; padding: 0; }

        .modal-content { background: var(--surface); color: var(--texte); border: 1px solid var(--bordure); border-radius: var(--rayon); }
        .modal-header, .modal-footer { border-color: var(--bordure); }
        .modal-title { color: var(--turquoise); }
        [data-theme="sombre"] .modal .btn-close { filter: invert(1); }
        .modal h4 { display: flex; align-items: center; gap: .5rem; font-size: .95rem; color: var(--turquoise); margin: 1.5rem 0 .5rem; }
        .modal img { width: 100%; border-radius: 10px; border: 1px solid var(--bordure); }
        .liste-puces { padding-left: 1.1rem; margin: 0; }
        .liste-puces li::marker { color: var(--turquoise); }

        /* ============ Parcours : deux frises ============ */
        .colonne-titre { display: flex; align-items: center; justify-content: center; gap: .6rem; font-size: 1.2rem; padding-bottom: .8rem; margin-bottom: 1.8rem; border-bottom: 2px solid currentColor; }
        .colonne-titre.scolaire { color: var(--turquoise); }
        .colonne-titre.pro { color: var(--ambre); }

        .frise { --couleur: var(--turquoise); list-style: none; margin: 0; padding: 0; position: relative; }
        .frise.pro { --couleur: var(--ambre); }
        .frise::before { content: ""; position: absolute; left: 7px; top: 0; bottom: 0; width: 2px; background: var(--couleur); opacity: .45; }
        .frise > li { position: relative; padding: 0 0 1.6rem 2.2rem; }
        .frise > li:last-child { padding-bottom: 0; }
        .frise > li::before {
            content: "";
            position: absolute; left: 0; top: 1.5rem;
            width: 16px; height: 16px;
            border-radius: 50%;
            background: var(--fond);
            border: 3px solid var(--couleur);
        }
        .frise .panneau { padding: 1.3rem 1.4rem; }
        .frise .periode {
            display: inline-block;
            padding: .15rem .6rem;
            margin-bottom: .6rem;
            border-radius: 6px;
            border: 1px solid var(--bordure);
            background: var(--surface-2);
            font-size: .8rem;
            color: var(--texte-2);
        }
        .frise h3 { font-size: 1.05rem; color: var(--couleur); margin-bottom: .25rem; }
        .frise .structure { font-weight: 600; font-size: .92rem; margin-bottom: .4rem; }
        .frise ul { padding-left: 1.1rem; margin: .5rem 0 0; font-size: .94rem; }
        .frise ul li::marker { color: var(--couleur); }

        /* ============ Veille ============ */
        .actu { height: 100%; border-top: 4px solid var(--ambre); }
        .actu-tete { display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1rem; }
        .actu-tete h3 { font-size: 1.1rem; margin: 0 0 .3rem; }
        .actu h4 { font-size: .88rem; color: var(--turquoise); margin: 1.1rem 0 .5rem; }
        .points { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; gap: .5rem; }
        .points li { padding: .55rem .8rem; border-radius: 8px; background: var(--surface-2); border: 1px solid var(--bordure); font-size: .92rem; }
        .points strong { color: var(--turquoise); margin-right: .3rem; }
        .retenir h3 { font-size: 1rem; margin: .8rem 0 .4rem; }
        .retenir p { font-size: .93rem; color: var(--texte-2); margin: 0; }

        /* ============ Documents et contact ============ */
        .icone-ronde {
            flex: 0 0 46px; width: 46px; height: 46px;
            display: grid; place-items: center;
            border-radius: 12px;
            background: var(--turquoise-doux);
            color: var(--turquoise);
            font-size: 1.15rem;
        }
        .ligne-lien { display: flex; align-items: center; gap: 1rem; color: var(--texte); }
        a.ligne-lien:hover { color: var(--texte); text-decoration: none; }
        .ligne-lien .fleche { margin-left: auto; color: var(--turquoise); transition: transform .2s; }
        a.ligne-lien:hover .fleche { transform: translateX(4px); }
        .libelle { display: block; font-size: .78rem; color: var(--texte-2); }
        .indispo { opacity: .6; }

        footer { margin-top: 2rem; padding: 1.6rem 0 2rem; border-top: 1px solid var(--bordure); font-size: .88rem; color: var(--texte-2); }

        /* ============ Apparition douce au scroll ============
           Active uniquement si JS fonctionne (classe "js" sur <html>). */
        .js .apparition { opacity: 0; transform: translateY(18px); transition: opacity .6s ease, transform .6s ease; }
        .js .apparition.visible { opacity: 1; transform: none; }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            .forme, .badge-dispo::before { animation: none; }
            .js .apparition { opacity: 1; transform: none; transition: none; }
            .panneau, .tuile, .nav-barre a { transition: none; }
        }

        /* ============ Tablette / mobile : la barre devient un tiroir ============ */
        @media (max-width: 991.98px) {
            .barre { transform: translateX(-100%); box-shadow: var(--ombre); }
            body.menu-ouvert .barre { transform: none; }
            body.menu-ouvert .voile { display: block; }
            .bouton-menu { display: grid; place-items: center; transition: left .3s ease; }
            body.menu-ouvert .bouton-menu { left: calc(var(--largeur-barre) + .75rem); }
            main { margin-left: 0; padding-top: 4.5rem; }
            #accueil { min-height: calc(100vh - 6rem); }
        }
        @media (max-width: 575.98px) {
            section { padding-block: 2.5rem; }
            .panneau { padding: 1.2rem; }
            .tuiles { grid-template-columns: repeat(auto-fill, minmax(96px, 1fr)); gap: .6rem; }
            .tuile { min-height: 96px; }
            .forme-1 { width: 170px; height: 210px; top: -70px; right: -60px; }
            .forme-2 { width: 140px; height: 140px; bottom: -50px; left: -50px; }
            .forme-3 { display: none; }
        }
    </style>
</head>

<body>

<!-- ================= BARRE LATÉRALE ================= -->
<button type="button" class="bouton-menu" aria-controls="barre" aria-expanded="false" aria-label="Ouvrir le menu">
    <i class="fa-solid fa-bars" aria-hidden="true"></i>
</button>
<div class="voile" aria-hidden="true"></div>

<aside class="barre" id="barre">
    <div class="barre-profil">
        <div class="theme-bascule" role="group" aria-label="Thème">
            <button type="button" class="vers-clair" data-theme-choix="clair" aria-label="Thème clair"><i class="fa-solid fa-sun" aria-hidden="true"></i></button>
            <button type="button" class="vers-sombre" data-theme-choix="sombre" aria-label="Thème sombre"><i class="fa-solid fa-moon" aria-hidden="true"></i></button>
        </div>
        <img src="<?= e($profil['photo']) ?>" alt="Photo de <?= e($nomComplet) ?>">
        <p class="nom"><?= e($nomComplet) ?></p>
        <p class="sous-titre"><?= e($profil['formation']) ?></p>
    </div>

    <nav aria-label="Menu principal">
        <ul class="nav-barre">
            <?php foreach ($menu as $ancre => $entree): ?>
                <li>
                    <a href="#<?= e($ancre) ?>"><i class="<?= e($entree[1]) ?>" aria-hidden="true"></i><?= e($entree[0]) ?></a>
                    <?php if (!empty($entree[2])): ?>
                        <ul class="sous-nav">
                            <?php foreach ($entree[2] as $sousAncre => [$libelle, $icone]): ?>
                                <li><a href="#<?= e($sousAncre) ?>"><i class="<?= e($icone) ?>" aria-hidden="true"></i><?= e($libelle) ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <div class="reseaux">
        <?php
        // Icône active si le lien est renseigné, grisée sinon
        $reseaux = [
            ['E-mail',   $lienMail,           'fa-solid fa-envelope'],
            ['GitHub',   $profil['github'],   'fa-brands fa-github'],
            ['LinkedIn', $profil['linkedin'], 'fa-brands fa-linkedin'],
        ];
        foreach ($reseaux as [$nomReseau, $lien, $icone]): ?>
            <?php if ($lien): ?>
                <a href="<?= e($lien) ?>" aria-label="<?= e($nomReseau) ?>" title="<?= e($nomReseau) ?>" <?= str_starts_with($lien, 'http') ? 'target="_blank" rel="noopener"' : '' ?>><i class="<?= e($icone) ?>" aria-hidden="true"></i></a>
            <?php else: ?>
                <span title="<?= e($nomReseau) ?>"><i class="<?= e($icone) ?>" aria-hidden="true"></i></span>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="barre-pied">
        © <?= date('Y') ?> <?= e($nomComplet) ?><br>
        BTS SIO SLAM · <?= e($profil['etablissement']) ?>
    </div>
</aside>

<main>
<div class="contenu">

    <!-- ================= 1. ACCUEIL ================= -->
    <section id="accueil">
        <span class="forme forme-1" aria-hidden="true"></span>
        <span class="forme forme-2" aria-hidden="true"></span>
        <span class="forme forme-3" aria-hidden="true"></span>

        <p class="badge-dispo apparition"><?= e($profil['disponibilite']) ?></p>
        <h1 class="hero-nom apparition"><?= e($nomComplet) ?></h1>
        <p class="hero-sous-titre apparition"><?= e($profil['formation']) ?> · <?= e($profil['etablissement']) ?></p>
        <p class="hero-accroche apparition"><?= t($profil['accroche']) ?></p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4 apparition">
            <a href="#projets" class="btn btn-accent"><i class="fa-solid fa-code me-2" aria-hidden="true"></i>Voir mes projets</a>
            <a href="#contact" class="btn btn-contour"><i class="fa-solid fa-envelope me-2" aria-hidden="true"></i>Me contacter</a>
        </div>
    </section>

    <!-- ================= 2. À PROPOS ================= -->
    <section id="a-propos">
        <h2 class="titre-section apparition">À propos</h2>
        <div class="panneau apparition">
            <div class="row g-4 align-items-center">
                <div class="col-md-4 text-center">
                    <img src="<?= e($profil['photo']) ?>" alt="Photo de <?= e($nomComplet) ?>" class="photo-profil">
                </div>
                <div class="col-md-8">
                    <?php foreach ($aPropos as $paragraphe): ?>
                        <p><?= t($paragraphe) ?></p>
                    <?php endforeach; ?>
                    <h3 class="h6 mt-4 mb-3 texte-2">Ce qui m'intéresse</h3>
                    <?php foreach ($interets as [$interet, $icone]): ?>
                        <span class="pastille"><i class="<?= e($icone) ?>" aria-hidden="true"></i><?= e($interet) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php
        // Chiffres clés : calculés automatiquement à partir des tableaux du haut
        $chiffres = [
            [2,                                         'ans de formation'],
            [count($projets),                           'projets présentés'],
            [count($stages),                            'stages effectués'],
            [count($competences['Langages']['items']), 'langages utilisés'],
        ];
        ?>
        <div class="row g-3 mt-1">
            <?php foreach ($chiffres as [$nombre, $libelle]): ?>
                <div class="col-6 col-lg-3 apparition">
                    <div class="panneau chiffre h-100"><strong><?= (int) $nombre ?></strong><span><?= e($libelle) ?></span></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 3. COMPÉTENCES ================= -->
    <section id="competences">
        <h2 class="titre-section apparition">Compétences</h2>
        <div class="d-flex flex-column gap-4">
            <?php foreach ($competences as $categorie => $groupe): ?>
                <div class="panneau apparition">
                    <h3 class="panneau-titre"><i class="<?= e($groupe['icone']) ?>" aria-hidden="true"></i><?= e($categorie) ?></h3>
                    <div class="tuiles">
                        <?php foreach ($groupe['items'] as [$nomComp, $icone]): ?>
                            <div class="tuile"><i class="<?= e($icone) ?>" aria-hidden="true"></i><span><?= t($nomComp) ?></span></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="panneau apparition">
                <h3 class="panneau-titre"><i class="fa-solid fa-user-check" aria-hidden="true"></i>Savoir-être</h3>
                <div class="savoir-etre">
                    <?php foreach ($savoirEtre as [$qualite, $icone]): ?>
                        <div><i class="<?= e($icone) ?>" aria-hidden="true"></i><?= e($qualite) ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 3b. CERTIFICATIONS ================= -->
    <section id="certifications">
        <h2 class="titre-section apparition">Certifications</h2>
        <div class="row g-4">
            <?php foreach ($certifications as $c):
                $classeStatut = $c['statut'] === 'Obtenue' ? 'obtenue' : 'en-cours'; ?>
                <div class="col-md-6 col-xl-4 apparition">
                    <article class="panneau survol certif">
                        <span class="icone-ronde"><i class="<?= e($c['icone']) ?>" aria-hidden="true"></i></span>
                        <div>
                            <h3><?= t($c['titre']) ?></h3>
                            <p class="organisme"><?= t($c['organisme']) ?> · <?= t($c['date']) ?></p>
                            <span class="statut <?= $classeStatut ?>"><?= e($c['statut']) ?></span>
                            <?php if ($c['lien']): ?>
                                <a href="<?= e($c['lien']) ?>" class="small ms-2" target="_blank" rel="noopener">Voir la preuve <i class="fa-solid fa-arrow-up-right-from-square ms-1" aria-hidden="true"></i></a>
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 4. PROJETS ================= -->
    <section id="projets">
        <h2 class="titre-section apparition">Projets</h2>
        <p class="intro-section apparition"><?= count($projets) ?> projets que j'ai réalisés. Cliquez sur « Voir le détail » pour le contexte, mon rôle et le résultat.</p>
        <div class="row g-4">
            <?php foreach ($projets as $p): ?>
                <div class="col-md-6 col-xl-4 apparition">
                    <article class="panneau survol projet">
                        <img src="<?= e($p['captures'][0]['src']) ?>" alt="<?= e($p['captures'][0]['alt']) ?>" loading="lazy">
                        <div class="corps">
                            <p class="projet-cadre"><?= t($p['cadre']) ?></p>
                            <h3><?= e($p['titre']) ?></h3>
                            <p class="texte-2"><?= t($p['resume']) ?></p>
                            <div class="mb-3">
                                <?php foreach ($p['technos'] as $techno): ?>
                                    <span class="etiquette"><?= t($techno) ?></span>
                                <?php endforeach; ?>
                            </div>
                            <button type="button" class="btn btn-contour mt-auto align-self-start"
                                    data-bs-toggle="modal" data-bs-target="#modal-<?= e($p['id']) ?>">
                                Voir le détail <i class="fa-solid fa-arrow-right ms-1" aria-hidden="true"></i>
                            </button>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 4b. MES STAGES ================= -->
    <section id="stages">
        <h2 class="titre-section apparition">Mes stages</h2>
        <p class="intro-section apparition">Les deux stages réalisés pendant mon BTS.</p>
        <div class="row g-4">
            <?php foreach ($stages as $st): ?>
                <div class="col-lg-6 apparition">
                    <article class="panneau survol stage">
                        <div class="stage-tete">
                            <span class="icone-ronde"><i class="<?= e($st['icone']) ?>" aria-hidden="true"></i></span>
                            <div>
                                <h3><?= e($st['entreprise']) ?></h3>
                                <span class="lieu"><i class="fa-solid fa-location-dot me-1" aria-hidden="true"></i><?= t($st['lieu']) ?></span>
                            </div>
                        </div>
                        <div>
                            <span class="puce-info"><i class="fa-regular fa-calendar" aria-hidden="true"></i><?= t($st['periode']) ?></span>
                            <span class="puce-info"><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i><?= t($st['annee']) ?></span>
                        </div>
                        <p class="texte-2 mb-0"><?= t($st['description']) ?></p>

                        <h4>Mes missions</h4>
                        <ul class="liste-puces">
                            <?php foreach ($st['missions'] as $mission): ?>
                                <li><?= t($mission) ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <h4>Technologies</h4>
                        <div>
                            <?php foreach ($st['technos'] as $techno): ?>
                                <span class="etiquette"><?= t($techno) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 5. PARCOURS (scolaire + professionnel) ================= -->
    <section id="parcours">
        <h2 class="titre-section apparition">Parcours</h2>
        <div class="row gx-4 gy-5 gx-lg-5">
            <div class="col-lg-6">
                <h3 class="colonne-titre scolaire apparition"><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>Parcours scolaire</h3>
                <ol class="frise">
                    <?php foreach ($formations as $f): ?>
                        <li class="apparition">
                            <div class="panneau">
                                <?php if ($f['periode']): ?><span class="periode"><?= t($f['periode']) ?></span><?php endif; ?>
                                <h3><?= t($f['titre']) ?></h3>
                                <p class="structure"><?= t($f['structure']) ?></p>
                                <?php if ($f['details']): ?><p class="texte-2 mb-0 small"><?= t($f['details']) ?></p><?php endif; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
            <div class="col-lg-6" id="experiences">
                <h3 class="colonne-titre pro apparition"><i class="fa-solid fa-briefcase" aria-hidden="true"></i>Parcours professionnel</h3>
                <ol class="frise pro">
                    <?php foreach ($experiences as $xp): ?>
                        <li class="apparition">
                            <div class="panneau">
                                <?php if ($xp['periode']): ?><span class="periode"><?= t($xp['periode']) ?></span><?php endif; ?>
                                <h3><?= e($xp['structure']) ?></h3>
                                <p class="structure texte-2"><?= t($xp['poste']) ?></p>
                                <ul>
                                    <?php foreach ($xp['missions'] as $mission): ?>
                                        <li><?= t($mission) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </section>

    <!-- ================= 6. VEILLE ================= -->
    <section id="veille">
        <h2 class="titre-section apparition">Veille technologique</h2>
        <p class="intro-section apparition"><?= t($veille['pourquoi']) ?></p>

        <!-- Sujets, sources, outils -->
        <div class="row g-4">
            <?php
            $blocsVeille = [
                ['Sujets suivis',    'fa-solid fa-bullseye',       $veille['sujets']],
                ['Sources',          'fa-solid fa-newspaper',      $veille['sources']],
                ['Outils de veille', 'fa-solid fa-satellite-dish', $veille['outils']],
            ];
            foreach ($blocsVeille as [$titreBloc, $icone, $liste]): ?>
                <div class="col-md-4 apparition">
                    <div class="panneau h-100">
                        <h3 class="panneau-titre"><i class="<?= e($icone) ?>" aria-hidden="true"></i><?= e($titreBloc) ?></h3>
                        <ul class="liste-puces">
                            <?php foreach ($liste as $element): ?><li><?= t($element) ?></li><?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Actualités -->
        <h3 class="h5 mt-5 mb-3 apparition">Les actualités</h3>
        <div class="row g-4">
            <?php foreach ($veille['actualites'] as $actu): ?>
                <div class="col-lg-6 apparition">
                    <article class="panneau actu">
                        <div class="actu-tete">
                            <span class="icone-ronde"><i class="<?= e($actu['icone']) ?>" aria-hidden="true"></i></span>
                            <div>
                                <h3><?= e($actu['titre']) ?></h3>
                                <span class="puce-info"><i class="fa-regular fa-calendar" aria-hidden="true"></i><?= e($actu['date']) ?></span>
                            </div>
                        </div>
                        <h4>Ce qu'il s'est passé</h4>
                        <p><?= e($actu['texte']) ?></p>
                        <h4>Points clés</h4>
                        <ul class="points">
                            <?php foreach ($actu['points'] as [$libelle, $texte]): ?>
                                <li><strong><?= e($libelle) ?></strong><?= e($texte) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if ($actu['source']): ?>
                            <a href="<?= e($actu['source']) ?>" class="d-inline-block mt-3" target="_blank" rel="noopener">Lire la source <i class="fa-solid fa-arrow-up-right-from-square ms-1" aria-hidden="true"></i></a>
                        <?php endif; ?>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Ce qu'il faut retenir -->
        <h3 class="h5 mt-5 mb-3 apparition">Ce qu'il faut retenir</h3>
        <div class="row g-4">
            <?php foreach ($veille['aRetenir'] as [$titreIdee, $texteIdee, $icone]): ?>
                <div class="col-md-4 apparition">
                    <div class="panneau survol retenir h-100">
                        <span class="icone-ronde"><i class="<?= e($icone) ?>" aria-hidden="true"></i></span>
                        <h3><?= e($titreIdee) ?></h3>
                        <p><?= e($texteIdee) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (is_file(__DIR__ . '/' . $veille['presentation'])): ?>
            <a href="<?= e($veille['presentation']) ?>" class="btn btn-contour mt-4 apparition" download>
                <i class="fa-solid fa-file-powerpoint me-2" aria-hidden="true"></i>Télécharger ma présentation de veille
            </a>
        <?php endif; ?>
    </section>

    <!-- ================= 8. DOCUMENTS ================= -->
    <section id="documents">
        <h2 class="titre-section apparition">Documents</h2>
        <div class="row g-4">
            <?php foreach ($documents as $doc):
                $dispo = is_file(__DIR__ . '/' . $doc['fichier']); ?>
                <div class="col-md-6 apparition">
                    <?php if ($dispo): ?>
                        <a href="<?= e($doc['fichier']) ?>" class="panneau survol ligne-lien" download>
                            <span class="icone-ronde"><i class="<?= e($doc['icone']) ?>" aria-hidden="true"></i></span>
                            <span><span class="libelle"><?= e(strtoupper(pathinfo($doc['fichier'], PATHINFO_EXTENSION))) ?></span><?= e($doc['titre']) ?></span>
                            <i class="fa-solid fa-download fleche" aria-hidden="true"></i>
                        </a>
                    <?php else: ?>
                        <div class="panneau ligne-lien indispo">
                            <span class="icone-ronde"><i class="<?= e($doc['icone']) ?>" aria-hidden="true"></i></span>
                            <span><span class="libelle"><?= e(strtoupper(pathinfo($doc['fichier'], PATHINFO_EXTENSION))) ?></span><?= e($doc['titre']) ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 9. CONTACT ================= -->
    <section id="contact">
        <h2 class="titre-section apparition">Contact</h2>
        <p class="intro-section apparition">Une question sur un projet, une proposition de stage ou d'alternance ? Écrivez-moi.</p>
        <?php
        // Moyens de contact : [libellé, valeur affichée, lien, icône]
        $contacts = [
            ['E-mail',       $profil['email'],        $lienMail, 'fa-solid fa-envelope'],
            ['Téléphone',    $profil['telephone'],    $profil['telephone'] ? 'tel:' . preg_replace('/[^0-9+]/', '', $profil['telephone']) : '', 'fa-solid fa-phone'],
            ['Localisation', $profil['localisation'], '', 'fa-solid fa-location-dot'],
            ['GitHub',       $profil['github'],       $profil['github'],   'fa-brands fa-github'],
            ['LinkedIn',     $profil['linkedin'],     $profil['linkedin'], 'fa-brands fa-linkedin'],
        ];
        foreach ($infos as [$libelle, $valeur, $icone]) {
            $contacts[] = [$libelle, $valeur, '', $icone];
        }
        ?>
        <div class="row g-4">
            <?php foreach ($contacts as [$libelle, $valeur, $lien, $icone]): ?>
                <div class="col-md-6 col-xl-4 apparition">
                    <?php if ($lien): ?>
                        <a class="panneau survol ligne-lien h-100" href="<?= e($lien) ?>" <?= str_starts_with($lien, 'http') ? 'target="_blank" rel="noopener"' : '' ?>>
                    <?php else: ?>
                        <div class="panneau ligne-lien h-100">
                    <?php endif; ?>
                            <span class="icone-ronde"><i class="<?= e($icone) ?>" aria-hidden="true"></i></span>
                            <span><span class="libelle"><?= e($libelle) ?></span><?= t($valeur) ?></span>
                            <?php if ($lien): ?><i class="fa-solid fa-arrow-right fleche" aria-hidden="true"></i><?php endif; ?>
                    <?= $lien ? '</a>' : '</div>' ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 10. PIED DE PAGE ================= -->
    <footer class="d-flex flex-wrap justify-content-between gap-2">
        <span>© <?= date('Y') ?> <?= e($nomComplet) ?> · Portfolio BTS SIO option SLAM</span>
        <a href="#accueil">Retour en haut <i class="fa-solid fa-arrow-up ms-1" aria-hidden="true"></i></a>
    </footer>

</div>
</main>

<!-- Modales de détail des projets (une par projet) -->
<?php foreach ($projets as $p): ?>
    <div class="modal fade" id="modal-<?= e($p['id']) ?>" tabindex="-1" aria-labelledby="titre-<?= e($p['id']) ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title h5" id="titre-<?= e($p['id']) ?>"><?= e($p['titre']) ?></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <?php foreach ($p['captures'] as $capture): ?>
                        <img src="<?= e($capture['src']) ?>" alt="<?= e($capture['alt']) ?>" class="mb-3" loading="lazy">
                    <?php endforeach; ?>

                    <h4><i class="fa-solid fa-compass" aria-hidden="true"></i>Contexte</h4>
                    <p><?= t($p['contexte']) ?></p>

                    <h4><i class="fa-solid fa-bullseye" aria-hidden="true"></i>Objectif</h4>
                    <p><?= t($p['objectif']) ?></p>

                    <h4><i class="fa-solid fa-layer-group" aria-hidden="true"></i>Technologies</h4>
                    <div>
                        <?php foreach ($p['technos'] as $techno): ?>
                            <span class="etiquette"><?= t($techno) ?></span>
                        <?php endforeach; ?>
                    </div>

                    <h4><i class="fa-solid fa-list-check" aria-hidden="true"></i>Mes tâches</h4>
                    <ul class="liste-puces">
                        <?php foreach ($p['taches'] as $tache): ?>
                            <li><?= t($tache) ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <h4><i class="fa-solid fa-flag-checkered" aria-hidden="true"></i>Résultat</h4>
                    <p class="mb-0"><?= t($p['resultat']) ?></p>
                </div>
                <div class="modal-footer justify-content-start">
                    <?php if ($p['demo']): ?>
                        <a href="<?= e($p['demo']) ?>" class="btn btn-accent" target="_blank" rel="noopener">Voir la démo</a>
                    <?php endif; ?>
                    <?php if ($p['github']): ?>
                        <a href="<?= e($p['github']) ?>" class="btn btn-contour" target="_blank" rel="noopener"><i class="fa-brands fa-github me-2" aria-hidden="true"></i>Code sur GitHub</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Bootstrap JS (modales). Voir le commentaire dans <head> pour le passer en local. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // ---------- Thème clair / sombre (mémorisé dans le navigateur) ----------
    document.querySelectorAll('[data-theme-choix]').forEach((bouton) => {
        bouton.addEventListener('click', () => {
            const theme = bouton.dataset.themeChoix;
            document.documentElement.dataset.theme = theme;
            try { localStorage.setItem('theme', theme); } catch (e) {}
        });
    });

    // ---------- Menu latéral en tiroir (tablette / mobile) ----------
    const boutonMenu = document.querySelector('.bouton-menu');
    function basculerMenu(ouvrir) {
        document.body.classList.toggle('menu-ouvert', ouvrir);
        boutonMenu.setAttribute('aria-expanded', ouvrir);
        boutonMenu.setAttribute('aria-label', ouvrir ? 'Fermer le menu' : 'Ouvrir le menu');
        boutonMenu.innerHTML = ouvrir
            ? '<i class="fa-solid fa-xmark" aria-hidden="true"></i>'
            : '<i class="fa-solid fa-bars" aria-hidden="true"></i>';
    }
    boutonMenu.addEventListener('click', () => basculerMenu(!document.body.classList.contains('menu-ouvert')));
    document.querySelector('.voile').addEventListener('click', () => basculerMenu(false));
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') basculerMenu(false); });
    document.querySelectorAll('.nav-barre a').forEach((lien) => lien.addEventListener('click', () => basculerMenu(false)));

    // ---------- Apparition douce des blocs quand ils entrent à l'écran ----------
    const blocs = document.querySelectorAll('.apparition');
    if ('IntersectionObserver' in window) {
        const observateur = new IntersectionObserver((entrees) => {
            entrees.forEach((entree) => {
                if (entree.isIntersecting) {
                    entree.target.classList.add('visible');
                    observateur.unobserve(entree.target); // une seule fois
                }
            });
        }, { threshold: 0.12 });
        blocs.forEach((bloc) => observateur.observe(bloc));
    } else {
        blocs.forEach((bloc) => bloc.classList.add('visible'));
    }

    // ---------- Menu : met en évidence la section en cours de lecture ----------
    const liensMenu = document.querySelectorAll('.nav-barre a');
    const sections = [...document.querySelectorAll('main section[id]')];
    function marquerSectionActive() {
        const repere = window.innerHeight * 0.35;
        const enBas = window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 2;
        let active = enBas ? sections[sections.length - 1] : null;
        if (!active) sections.forEach((s) => { if (s.getBoundingClientRect().top <= repere) active = s; });
        liensMenu.forEach((lien) => {
            const estActif = !!active && lien.hash === '#' + active.id;
            lien.classList.toggle('active', estActif);
            estActif ? lien.setAttribute('aria-current', 'true') : lien.removeAttribute('aria-current');
        });
    }
    window.addEventListener('scroll', marquerSectionActive, { passive: true });
    window.addEventListener('load', marquerSectionActive);
    marquerSectionActive();
</script>
</body>
</html>
