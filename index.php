<?php 
    session_start();

    //Fonctions photos et noms apparaissant dans le comité 
    include 'PHP/fonction.php';

    //Vérification du transfère d'erreur
    $chiffre = '/[0-9]/';
    if(isset($_GET['erreur']) && preg_match($chiffre,$_GET['erreur'])){
        $erreur = $_GET['erreur'];
    }
?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
        <base href="http://lamouscronnoise.be/19072018/index.php"/>
		<title>La Mouscronnoise</title>
        <link rel="shortcut icon" href="../Shared/images/logo_msc.svg" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <script src="https://www.google.com/recaptcha/api.js"></script>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

	<!-- Wrapper -->
		<div id="wrapper">	

        <!-- Header -->
            <header id="header">
            <!--<div class="logo">-->
                <a href="#blason"><img src="../Shared/images/logo_msc.svg" width="90" alt="" /></a>
            <!--</div>-->
                <div class="content">
                    <div class="inner">
                        <h1>La Mouscronnoise</h1>
                        <p>Bienvenue sur le site de la plus conviviale des régionale de l'UCL<br />
                        Et les Hurlus? Au fût!</p>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a href="#status">La régionale</a></li>
                        <li><a href="#activites">Activités et classements</a></li>
                        <li><a href="#comite">Le comité</a></li>
                    </ul>
                    <ul>
                        <li><a href="#folklore">Le folklore</a></li>
                        <li><a href="#histoire">L'histoire</a></li>
                        <li><a href="#sponsors">Nos sponsors</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </header>

        <!-- Main -->
            <div id="main">
                                            
            <!-- Blason -->
                <article id="blason">
                    <h2 class="major">Blason</h2>
                    <span class="image main"><img src="../Shared/images/logo_msc.svg" alt="Blason Mouscron" /></span>
                    <p>Blason de la ville de Mouscron, se lit en Héraltique :</p>
                    <p>"Ecartelé aux 1 et 4 de gueules au chevalier armé de toutes pièces d'azur monté sur un cheval cabré d'argent et brandissant une épée de même, aux 2 et 3 d'argent à une barre hérissée de flammes de gueules, sur le tout, d'or à l'aigle bicéphale de sable, becquée, langée, membrée et diadémée de gueules, surmontée de la couronne impériale."</p>
                </article>

            <!-- Status -->
                <article id="status">
                    <h2 class="major">Les statuts</h2>
					<p>C'est durant l'année académique 1992 - 1993 que La Mouscronnoise est devenue ce que nous connaissons actuellement. En effet, les seuls statuts qui étaient restés à travers le temps dataient de 1937. Ils se référaient, à l'époque, à la Flandre Wallonne et non à La Mouscronnoise. De plus, la vie estudiantine d'avant-guerre était assez différente de celle d'aujourd'hui. Les statuts de la Mouscronnoise ont donc été rédigés cette année là par Catherine Dendoncker, dite Dindon, présidente 1990-1991 et Grand-Maîtresse 1992-1993.</p>
                    <p>La révision des statuts actuels a été effectuée durant l’année académique 2011-2012. Cela n’avait plus été effectué depuis 1993. L’idée de la modification trainait dans nos têtes depuis quelques années. Le passage de notre association en Association Sans But Lucratif, ASBL, et sa création de statuts officiels nous encouragea à passer à l’acte. Ce document est le résultat de nombreuses réunions où anciens et membres du comité confrontèrent les anciens statuts au vécu d’aujourd’hui.</p>
                    <p>Ces statuts se veulent être un outil de référence pour les Grands-Maîtres et présidents afin de perpétuer notre folklore aux générations futures.</p>

                                Nous vous souhaitons bonne lecture de la présente.

                                Nous, Julien Lebleu, Président de la Mouscronnoise, déclarons avoir collégialement modifié les statuts conformément aux articles 82 et suivants des statuts de 1993,
                                Promulguons et sanctionnons ceux-ci,
                                Ordonnons qu’ils entrent en vigueur après lecture publique.

                                Fait à Louvain-La-Neuve, le 1er mai 2012.
                                
                                <ul>
                                    <li><a href="#Généralités">Généralités</a></li>
                                    <li><a href="#Les_membres">Les Membres</a></li>
                                    <li><a href="#Les_postes">Les Postes</a></li>
                                    <li><a href="#Acti">Activités, Représentations et Expressions</a></li>
                                    <li><a href="#Coronae">Les Coronae</a></li>
                                    <li><a href="#Dispo">Des dispositons internes</a></li>
                                    <li><a href="#revisions">Révision des statuts</a></li>
                                    <li><a href="#dispos_finales">Dispositions finales</a></li>
                                </ul>

                                <!-- Généralités -->
                                
                                <h3 id="Généralités">Titre 1: Généralités</h3>
                                
                                <em>Art.1</em> 
                                «L’association Royale des étudiants de Mouscron-Comines-Warneton de l’UCL» communément appelée «La Mouscronnoise» ou «MSC» a été fondée en 1906 par Clotaire Stock et est une régionale reconnue par l’Université Catholique de Louvain sur le site de Louvain-La-Neuve.<br />

                                <em>Art.2</em> 
                                La Mouscronnoise reprend le caractère associatif (cfr. Art 4) de feue la Flandre-Wallonne dont elle a assuré et assure toujours la continuité, d’abord sur le site de Leuven et depuis 1975 sur le site de Louvain-La-Neuve.<br />

                                <em>Art.3</em> 
                                La Flandre Wallonne obtint le titre de «;Royale» le 8 février 1957. Le Cabinet du Roi fit savoir au cours de l’année académique 1986-1987 que le titre de «Royale» restait acquis à «La Mouscronnoise».<br />

                                <em>Art.4</em> 
                                La Mouscronnoise est une régionale organisée au sein de la Fédération Wallonne des Régionales des étudiants de Louvain&nbsp;». Elle a pour objet de favoriser les contacts entre les étudiants de Mouscron-Comines-Warneton, de créer une entente cordiale, d’entretenir parmi eux une atmosphère de convivialité estudiantine et de perpétuer le folklore estudiantin. D’autre part, elle veillera à promouvoir les traditions et spécificités de Mouscron-Comines-Warneton auprès des autres étudiants.<br />

                                <em>Art. 5</em> 
                                La Mouscronnoise s’est inspirée du chant officiel de la ville de Mouscron, à savoir le «Bé qu’in est fir d’et’ Mouscronnôs» et de sa devise "Jusqu'à porter s'besace". (Cfr. Annexe)<br />

                                <em>Art. 6</em> 
                                Le «Hurlu», symbole de la ville de Mouscron est également celui de la Mouscronnoise. L’insigne le représentant doit être placé, pour les membres de la régionale, à l’avant senestre de la calotte entre le croisillon et les lettres. Tout autre étudiant couvre-cheffé en qui un membre de la Mouscronnoise reconnaît les valeurs défendues par celle-ci peut se voir offrir le «Hurlu». Dans ce cas, il devra être placé dans la partie folklorique de son couvre-chef.<br />

                                <em>Art. 7</em> 
                                Le blason de la ville de Mouscron fait office d’emblème de la Mouscronnoise et est donc présent sur le drapeau officiel de la régionale. En héraldique, le blason se lit de la manière suivante: écartelé aux 1 et 4 de gueules au chevalier armé de toutes pièces d'azur monté sur un cheval cabré d'argent et brandissant une épée du même, aux 2 et 3 d'argent à une barre hérissée de flammes de gueules; sur le tout, d'or à l'aigle bicéphale de sable, becquée, languée, membrée et diadémée de gueules, surmontée de la couronne impériale.<br />
                               
                                <!-- Les membres -->
                                <h3 id="Les_membres" >Titre 2: Des membres</h3>

                                <em>Art. 8</em> Peut devenir membre de la Mouscronnoise, tout étudiant qui fait ou a fait géographiquement partie de la région de Mouscron-Comines-Warneton c’est-à-dire qui est originaire d’une des communes suivantes: Mouscron, Comines-Warneton ou Estaimpuis. Tout autre étudiant se reconnaissant dans les valeurs défendues par la Mouscronnoise peut, avec l’accord du président et de son comité, en devenir membre.
                                <ul>
                                    <li>Le titre de membre est porté à vie.</li>
                                    <li>Est membre, tout baptisé et/ou calotté et/ou lettré et/ou ayant fait partie du comité.</li>
                                    <li>Est sympathisant, toute personne se reconnaissant dans les valeurs défendues par la Mouscronnoise.</li>
                                    <li>Le Grand-Maître ou le Président doivent être au moins originaire des communes de Mouscron, Comines-Warneton et Estaimpuis.</li>
                                    <li>50% des membres du comité doivent également être originaire de ces communes.</li>
                                </ul>
                                <em>Art. 9</em> Le comité édite chaque année une carte de membre. Outre le sceau de Mouscron et l'année académique, celle-ci comporte le nom et prénom du membre en regard du poste dont il a la charge. En outre, la carte de membre confère le droit de voter à l'élection des membres du comité. Elle sera fournie au début d'année pour le prix symbolique d'un euro.<br />

                                <em>Art. 10</em> Tout membre du comité de la Mouscronnoise s’engage à répondre aux exigences et responsabilités relatives à son poste. En cas de manquement grave, le président, en accord avec son comité, est en droit de destituer la personne concernée.Tout grief envers le président sera porté à la connaissance du Grand-Maître qui organisera une réunion pour consulter le comité. Si la majorité des 2/3 des présents parmi les 2/3 des membres du comité est atteinte, le président sera destitué.<br />

                                <!-- Les postes -->
                                <h3 id="Les_postes">Titre 3 : Des postes</h3>
                                <em>Art. 11</em> 
                                <p>Des postes:</p>
                                <ul>
                                    <li style="text-decoration: underline;">Le Grand-Maître</li>
                                </ul>
                                <p>Le Grand-Maître est responsable de la perpétuation de l'esprit folklorique et de toutes les activités guindaillantes de la régionale: dépucelages de calottes, passage de lettres, bibitives. Il a le devoir d'inviter les calottés aux Coronae mouscronnoises (En conséquence, il a aussi le droit d'en refuser l'accès aux indésirables). Le Grand-Maître a le devoir d'instruire les impétrants à l'esprit de la calotte et de veiller à ce que ceux-ci soient prêts avant de se présenter devant la Corona (dans la négative, il différera leurs présentations). Il est responsable du bon déroulement du dépucelage de calottes et de l'organisation des élections du Comité. Il est la référence en matière de connaissance du folklore et des traditions estudiantines et mouscronnoises. Il se doit d'être présent à un maximum de réunions dans la mesure du possible.</p>
                                <p>Comme le Grand-Maître est un membre du Comité qui a fait ses preuves, il occupe une place prépondérante dans la régionale. En cas de litige au sein du comité, il a voix délibérative en accord avec le président.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le Substitut</li>
                                </ul>
                                <p >Le Substitut a pour fonction de rédiger le rapport de l'activité guindaillante et de remplacer le Grand-Maître en cas d'incapacité ou d'empêchements. Il suppléera également le Censeur dans son rôle de garant du bon fonctionnement et de l'ordre dans toutes activités guindaillantes.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le Censeur</li>
                                </ul>
                                <p>Le Censeur a pour fonction de veiller au bon fonctionnement et à l'ordre dans toutes activités guindaillantes. Il a le droit d'imposer le silence, un certain nombre d'à-fonds et d'expulser quiconque troublerait le bon déroulement de l'activité. Au sein du Praesidium, le Censeur s'occupe principalement des camarades tandis que le Grand-Maître, principalement des impétrants.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le Président</li>
                                </ul>
                                <p>Le président convoque, dirige et prépare toutes les réunions. Il est responsable, organise et coordonne les activités de la régionale. Il est le représentant officiel de la régionale et veillera à la représenter à toutes activités des autres régionales et auprès de la Fédération Wallonne des Régionales. Le président, en accord avec le Grand-Maître, a voix délibérative en cas de litige. Il doit être baptisé et calotté/lettré à la Mouscronnoise. Il aura à cœur de préparer une réunion de bilan à la fin de chaque quadrimestre. Lors de la première, il rectifiera le tir par rapport aux remarques de son comité. Lors de la seconde, son successeur prendra note du bilan final afin de créer un dossier analytique et prévisionnel dans lequel il consignera les améliorations à apporter et les lignes conductrices pour son futur mandat.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le Vice-président</li>
                                </ul>
                                <p>Le vice-président supplée le président dans toutes ses tâches. Il doit pouvoir toucher à tous les domaines et réagir en cas de problème. Il a également un rôle important de représentation. Une présence à la majorité des activités de la régionale ainsi qu’une présence aux activités extérieures et officielles est requise. Il doit également assurer une cohésion au niveau des relations intra-comité.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le trésorier</li>
                                </ul>
                                <p>Le trésorier est chargé de tenir les comptes de la régionale. Après chaque activité, il fera un bilan qu'il présentera au comité. Il a aussi la charge de remplir les formulaires de demandes de subsides et coordonne la recherche de sponsors. Il communiquera à tout membre du comité qui le demanderait l'état des finances de la régionale. Un budget et un bilan sera présenté respectivement en début et fin d'année.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le secrétaire</li>
                                </ul>
                                <p>Le secrétaire s’occupe de la prise de note lors de chaque réunion et communique ensuite les comptes rendus. Il est également chargé d’envoyer les invitations des différentes activités de la MSC au comité, aux anciens et aux extérieurs. Il doit également mettre à jour une liste avec les coordonnées des anciens membres de la MSC. Le secrétaire est aussi chargé de conserver les archives et de transmettre ce qu'il y a lieu aux archives de l'U.C.L. au nom de la Mouscronnoise.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le responsable bar</li>
                                </ul>
                                <p>Le responsable bar est responsable du bar pendant les soirées. Il organise et prépare la soirée, en détermine le responsable. &nbsp;Il s’occupe des états des lieux, du fonctionnement du matériel (pompes, fûts, lumières, etc.). Il est également responsable de la commande, de la réception des fûts lors de livraisons et des services bar.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le responsable des décors</li>
                                </ul>
                                <p>Le responsable décor est responsable de la réalisation des décors pour les évènements importants comme les 24H, le carnaval Fédé, la semaine Fédé, etc. Il doit également gérer la répartition des tâches, les horaires de travail, l’achat du matériel en accord avec le trésorier, etc.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le responsable de l’estafette</li>
                                </ul>
                                <p>Le responsable de l’estafette fait la publicité de l’évènement auprès des extérieurs à Louvain-la-Neuve ainsi qu’aux extérieurs du site. Il se doit également de gérer le déroulement du jour de l’estafette.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le responsable des relations extérieures</li>
                                </ul>
                                <p>Le responsable relex a un rôle de représentation de la régionale auprès des organisations extérieures. Il coordonnera les tours de régionales (personnes, affiches, etc.).</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le responsable animation et culture</li>
                                </ul>
                                <p>Le responsable anim-culture met différentes activités internes au comité sur pied comme le week-end comité, le souper comité ou autres. Il organise des activités pour les extérieurs comme la semaine culturelle, le killer, l’exposition, le souper, etc.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le président de baptême</li>
                                </ul>
                                <p>Le président de baptême s’assure du bon déroulement du baptême. Il veille à la réalisation du carnet de bleu et supervise l’ensemble des activités. Il veille à la sécurité de tous et assure la qualité de chaque activité. Il s’engage également auprès des instances civiles et institutionnelles en signant la charte de baptême. Le président de baptême doit être baptisé depuis au moins un an lors de sa prise de fonction.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le vice-président de baptême</li>
                                </ul>
                                <p>Le vice-président de baptême assiste le président de baptême dans toutes ses tâches.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le responsable clash</li>
                                </ul>
                                <p>Le responsable clash organise les clashs avant chaque évènement important (soirées, etc.)</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le responsable rhéto</li>
                                </ul>
                                <p>Le responsable rhéto a un rôle de faire connaître la MSC aux rhétos de notre région via la journée rhétos, via des soirées rhétos sur Mouscron ou Comines, ou via tout autre moyen efficace.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le responsable presse</li>
                                </ul>
                                <p>Le responsable presse recueille et met en forme des articles écrits par nos membres dans le but de sortir au moins 2 Ch'ti par quadrimestre.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le responsable web</li>
                                </ul>
                                <p>Le responsable web gère et met à jour le site et le forum de la Mouscronnoise.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le responsable sport</li>
                                </ul>
                                <p>Le responsable sport organise les éventuels tournois sportifs organisés par la MSC et assure une présence minimale aux activités sportives des autres régionales et institutionnelles.</p>

                                <ul>
                                    <li style="text-decoration: underline;">Le responsable photo</li>
                                </ul>
                                <p>Le responsable photo doit être présent aux activités culturelles et folkloriques de la Mouscronnoise afin de garder des archives iconographiques et les publiera sur le web. Il veillera à respecter le droit à l'image dans la diffusion de celles-ci.</p>
                                <br/>

                                <em>Art. 12</em> Le responsable de chaque poste peut déterminer en accord avec le président des délégués.<br />

                                <em>Art. 12bis</em> Le Haut Comité est défini par les membres du conseil d'administration de l'ASBL La Mouscronnoise. Les 3 postes suivants sont obligés de faire partie du Haut Comité: le président, le trésorier et le secrétaire.<br />

                                <em>Art. 13</em> Les postes sont cumulables. Les responsabilités sont essentielles à la vie courante de la Mouscronnoise mais leur dénomination est sujette à modification.<br />

                                <!-- Les activités -->
                                <h3 id="Acti">Titre 4 : Des activités, représentations et expressions</h3>

                                <em>Art. 14</em> Pour l'ouverture, les étudiants de Mouscron-Comines-Warneton de Louvain-la-Neuve et des autres sites, les élus communaux, la Fédé, les autres régionales, le G.C.L., les autres cercles et la G.A.M. sont conviés par le secrétaire. Le comité veillera à avoir une tenue vestimentaire soignée (tenue de ville "costume") et des capes impeccables. Le comité aura soin de prévenir les délégations des sites extérieurs du port d'une tenue correcte (pas de tabliers, pas de polos de guindaille) afin d'éviter tout débordement.<br />

                                <em>Art. 15</em> Le championnat de Belgique d'Estafette est une activité traditionnelle de la Mouscronnoise. Le comité veillera à l'organiser une fois par an. (voir annexe, règlement de l'estafette)<br />

                                <em>Art. 16</em> Le souper Pierrot, qui représente la spécialité culinaire de la régionale, veillera à être organisé par le comité, une fois par an. Il sera composé de saucisses, haricots/compote et purée. Tous les extérieurs et les anciens seront conviés à cet événement.<br />

                                <em>Art. 17</em> La semaine culturelle représente la région de Mouscron – Comines-Warneton sur le site de Louvain-la-Neuve. Le comité veillera à en organiser au moins une par an et visera à valoriser l'image de Mouscron vis-à-vis des extérieurs.<br />

                                <em>Art. 18</em> Le comité veillera à organiser au moins une activité qui se déroulera sur les communes de la régionale.<br />

                                <em>Art. 19</em> Le comité veillera à organiser des activités internes afin d'entretenir les liens entre comitards et intégrer les nouveaux.<br />

                                <em>Art. 20</em> Les membres de la G.A.M. et les associations étudiantes associées au folklore mouscronnois sont les bienvenues à tous les bars et activités de la Mouscronnoise. Le secrétaire n'oubliera pas de les inviter.<br />

                                <em>Art. 21</em> Le Grand-Maître organise au moins 2 bibitives par an. Les anciens y sont traditionnellement invités.<br />
                                <p><span style="text-decoration: underline;">Des attributs</span></p>
                                <em>Art. 22</em> Les règles concernant les capes sont d’applications telles que le Président, Président de Baptême et le Grand-Maître portent une cape à bords rouges, le(s) vice-président(s), une cape à bords jaunes. Le(s) vice-président(s) de baptême porte(nt) une cape à bords blancs. Les capes se transmettent d'année en année lors du rachat et appartiennent à la Mouscronnoise.<br />

                                <em>Art. 23</em> Le band reprend les couleurs de la ville de Mouscron qui sont gueule en partie supérieure et argent en partie inférieure. Il part de l'épaule droite et aboutit à la hanche gauche. Il porte le blason brodé de la ville de Mouscron.<br />

                                <em>Art. 24</em> Le Président recevra, lors des élections, de son prédécesseur un band large représentant sa fonction. Le Haut Comité portera un band étroit. Sa confection est à charge personnelle et il en est propriétaire pour l'avenir.<br />

                                <em>Art. 25</em> La cape de Président et Vice-président sera portée au minimum lors de toute activité officielle. La cape de Président de baptême et de Vice-président de baptême sera portée uniquement lors de toute activité de baptême.<br />

                                <em>Art. 26</em> Le band sera porté au minimum lors de toute activité officielle.<br />

                                <em>Art. 27</em> Tout manquement à son poste peut entrainer un retrait du droit de port des attributs.<br />
                                <p ><span style="text-decoration: underline;">Des organes d’expression</span></p>
                                <em>Art. 28</em> L'organe d'expression de la Mouscronnoise est <em>Le Ch'ti</em>.<br />

                                <em>Art. 29</em> Tout étudiant de la régionale possédant la carte de membre reçoit <em>Le Ch'ti</em> gratuitement. Le rédacteur en chef veillera à ce que les anciens reçoivent une version électronique. Il en sera également l'éditeur responsable.<br />

                                <em>Art. 30</em> Le site internet veillera à être la vitrine de la Mouscronnoise et mettra en lumière les activités à venir. Le webmaster s'occupe de mettre le site à jour.<br />

                                <!-- Coronae -->
                                <h3 id="Coronae">Titre 5 : Des coronae</h3>

                                <em>Art. 31</em> Les valeurs de la Calotte sont d'application dans toutes Coronae Mouscronnoises. Les articles ci-dessous visent surtout à décrire les spécificités des dépucelages de calottes et bibitives.<br />
                                <p style="padding-left: 30px;"><span style="text-decoration: underline;">Des membres de la Corona</span></p>
                                <em>Art. 32</em> Tout calotté Mouscronnoise est invité de plein droit aux Coronae Mouscronnoise.<br />

                                <em>Art. 33</em> Tout membre de la Corona vient couvert de ses attributs (Couvre-chef, bands, cape, … sauf exception cfr. article 25), dispose de son Petit Bitu et porte de préférence le polo Mouscronnoise.<br />

                                <em>Art. 34</em> Le camarade qui n'a pas sa calotte en ordre (insignes manquants, port d'insignes non reconnus…) se verra sanctionné par le Grand-Maître.<br />

                                <em>Art. 35</em> Sur décision du Grand-Maître, certaines bibitives pourront être réputées "ouvertes" aux sympathisants Mouscronnois non calottés et se muniront d'un couvre-chef de leur choix. Par contre, les dépucelages de Calotte seront <span style="text-decoration: underline;">toujours</span> des séances réputées "<span style="text-decoration: underline;">fermées</span>", sans aucune exceptions.<br />

                                <em>Art. 36</em> Le Grand-Maître s'engage à ne jamais organiser à des dépucelages de calottes "pirates".<br />
                                <p><span style="text-decoration: underline;">Des impétrants</span></p>
                                <em>Art. 37</em> L'impétrant est une personne qui souhaite passer sa calotte. Le Grand-Maître veillera à ce que le nombre d'impétrants par séance ne dépasse pas trois.<br />

                                <em>Art. 38</em> Les Roi et Reine des Bleus de la Mouscronnoise sont les seuls impétrants à pouvoir passer leurs Calotte en première année sur le site. Ils n'y sont cependant pas obligés. Ce dépucelage ne peut s'organiser qu'au deuxième quadrimestre.<br />

                                <em>Art. 39</em> Le port de la cape étant subordonné au port de la calotte, tout membre du nouveau comité fraîchement élu, qui portera la cape l'année suivante, doit passer sa calotte dans les plus brefs délais. Il appartient au Grand-Maître de veiller à l'organisation de ce dépucelage.<br />

                                <em>Art. 40</em> Les impétrants souhaitant passer leur calotte présenteront leurs demandes écrites au Grand-Maître. Elle sera présentée uniquement au Praesidium et parrains. La version finale sera présentée au plus tard 15 jours avant le dépucelage. L'ordre d'arrivée de ces lettres détermine l'ordre de passage. Toutefois, les impétrants en dernière année seront prioritaires de droit (pour autant qu'ils aient respecté la procédure). Le Grand-Maître prendra contact avec les impétrants en temps voulu.<br />

                                <em>Art. 41</em> Les impétrants sont responsables de la location (réservation, états des lieux,…) et de la mise en place de la salle.<br />

                                <em>Art. 42</em> Les impétrants peuvent être amenés à se représenter devant une Corona pour différentes raisons:
                                <ul>
                                    <li>La non présentation totale des épreuves pour une cause de force majeure.</li>
                                    <li>L'ajournement</li>
                                    <li>La perte de la calotte</li>
                                    <li>L'échec dans l'épreuve finale</li>
                                </ul>
                                <em>Art. 43</em> Ces différentes raisons donnent lieu à des suites différenciées qui sont explicitées ci-dessous.<br />

                                <em>Art. 44</em> Il appartient au Grand-Maître de veiller à ce que les impétrants soient capables de présenter les épreuves jusqu'au bout. Il peut charger une personne de ce rôle. Si l'impétrant n'est plus en état de continuer les épreuves à un point tel qu'il ne peut plus articuler ou qu'il s'est littéralement "écroulé", le Grand-Maître peut lui permettre de reprendre la présentation des épreuves là où il l'avait laissé. En effet, il sera injuste que l'impétrant soit pénalisé à cause de l'erreur d'appréciation du Grand-Maître.<br />

                                <em>Art. 45</em> Un impétrant qui est amené à se représenter devant une Corona devra uniquement représenter les épreuves non réussies qui seront explicitées par le Grand-Maître lors de la fin de la Corona précédente.<br />

                                <em>Art. 46</em> Au sujet des motivations, en aucun cas l'impétrant ne pourra se prévaloir de son état éthylique pour qu'on lui reconnaisse l'application du présent article alors que ses motivations auraient été insuffisantes. Le fait même qu'il ait pu les présenter prouve qu'il était capable de parler et suffit à les valider.<br />

                                <em>Art. 47</em> Quand, suite à la perte de sa calotte, un camarade se représente devant la Corona, il est tenu de représenter toutes les épreuves. Généralement, on le dispense de l'épreuve externe. Ce dépucelage est un dépucelage à part entière, lui, comme les autres impétrants, est susceptible de se voir ajourné.<br />

                                <em>Art. 48</em> Un impétrant qui, après délibérations, a réussi sa calotte mais qui échoue dans l'épreuve finale (récitation correcte du Fifrelin et à-fonds dans la calotte), repassera cette dernière épreuve lors du dépucelage suivant.<br />

                                <em>Art. 49</em> Le Praesidium décide des droits de vote. Ils seront accordés aux calottés qui ont assisté à l'entièreté de la Corona. Les votants attendront d'avoir participé à 3 Coronaes <span style="text-decoration: underline;">complètes</span> dont une de la régionale pour pouvoir voter. Le Grand-Maître a la décision finale après consultation des votes et des autres membres de son Praesidium.<br />
                                <p><span style="text-decoration: underline;">Des dispositions pratiques</span></p>
                                <em>Art. 50</em> Les plus jeunes calottés sont affectés au service. Si le nombre de camarades le justifie, les calottés des deux dernières années peuvent être affectés au service.<br />

                                <em>Art. 51</em> Le Sénat se situera à droite du Praesidium.<br />
                                <p><span style="text-decoration: underline;">Des spécificités mouscronnoises</span></p>
                                <em>Art. 52</em> En Corona, le chant de la Mouscronnoise est lancé par le Président. Le nombre de couplets est à l'appréciation du Président.<br />

                                <em>Art. 53</em> L'ordre des chants à respecter est le suivant: Gaudeamus Igitur, Brabançonne, Chant des Wallons, Bê qu'in est firs d'êt’ Mouscronnôs.<br />

                                <em>Art. 54</em> Lors de l'épreuve finale (après délibérations et avant de boire dans sa calotte), il est de tradition que chaque impétrant récite son Fifrelin correctement sous peine d'ajournement de l'épreuve.<br />

                                <em>Art. 55</em> Les calottés ayant passé leur calotte à la Mouscronnoise sont autorisés à apposer les lettres "MSC" sous les lettres "UCL" sur leur calotte.<br />

                                <em>Art. 56</em> Les sympathisants calottés de la Mouscronnoise peuvent passer leur lettres «&nbsp;MSC&nbsp;» à la Mouscronnoise lors d’une corona. Celles-ci seront disposées sous leurs lettres d’origine.<br />

                                <em>Art. 57</em> Toute candidature au passage de lettres «MSC» est soumis à l’appréciation du Grand-Maître.<br />
                                
                                
                                <h3 id="Dispo">Titre 6 : Des dispositons internes</h3>
                                
                                <p><span style="text-decoration: underline;">Dispositions générales</span></p>
                                <em>Art. 58</em> Les élections se déroulent durant la fin du deuxième quadrimestre.<br />

                                <em>Art. 59</em> Une élection officielle est organisée avant Pâques afin de déterminer les responsables de l’association vis-à-vis de l’UCL pour l’année académique suivante.<br />

                                <em>Art. 60</em> Un rachat de postes sera organisé en fin d’année académique afin d’assurer la transmission des pouvoirs. Un Ch’ti spécial sortira à cette occasion.<br />

                                <p><span style="text-decoration: underline;">Conditions d’admission des candidatures</span></p>
                                <em>Art. 61</em> Tous les postes sont ouverts aux candidats et aux candidates sous réserve de répondre aux exigences détaillées au titre «Des postes».<br />

                                <em>Art. 62</em> Le poste de Grand-Maître n’est pas soumis aux élections. Celui-ci nomme son successeur en fonction des qualités et des connaissances de celui-ci pour le poste en question. Il doit avoir au moins 4 étoiles et être calotté depuis au moins trois ans.<br />

                                <em>Art. 63</em> Pour postuler au poste de président, le candidat aura au minimum 3 étoiles au moment de sa présidence et aura un an d’expérience dans le comité.<br />

                                <em>Art. 64</em> En ce qui concerne les autres postes, les candidats doivent avoir au minimum 2 étoiles.<br />

                                <p><span style="text-decoration: underline;">De la procédure des élections</span></p>
                                <em>Art. 65</em> Le Grand-Maître sortant ainsi que son praesidium président les élections et proclament les résultats.<br />

                                <em>Art. 66</em> Les candidats à la présidence doivent se faire connaître au minimum une semaine avant la date des élections.<br />

                                <em>Art. 67</em> Deux procédures sont possibles en fonction des circonstances particulières du moment:
                                <ul>
                                    <li>Procédure 1: si plusieurs candidats souhaitent se présenter au poste de Président, une élection officielle aura lieu. Chaque candidat présentera son programme et répondra aux questions des votants. L’élection se déroulera avec un minimum de 2/3 des personnes habilitées à voter. Le vainqueur sera déterminé à la majorité des 2/3 des votants. Si cette majorité n’est pas atteinte, un deuxième tour à majorité des 2/3 sans abstention aura lieu. Si cette majorité n’est toujours pas atteinte, un troisième tour à la majorité simple sans abstention aura lieu. Le vote s’effectue à bulletin secret. Le détail des résultats ne sera pas dévoilé.Peuvent voter à l’élection: les membres du comité sortant possédant une carte de membre ainsi que les sympathisants ayant participé à au moins 50% des réunions de l’année académique.Les votes par procuration sont autorisés moyennant présentation de la carte de membre de la Mouscronnoise. L’absent devra se justifier de son absence auprès du Grand-Maître qui jugera de la recevabilité de la procuration.</li>
                                </ul>
                                <ul>
                                    <li>Procédure 2: si un seul candidat se présente au poste de Président, celui-ci sera considéré comme élu d’office s’il respecte les critères.</li>
                                </ul>
                                Le cumul de plusieurs postes par un seul candidat n’est possible que si aucun autre candidat sérieux ne se propose pour un poste déterminé. Le choix sera à discrétion du nouveau président.

                                <p><span style="text-decoration: underline;">De la transmission des pouvoirs</span></p>
                                <em>Art. 68</em> La transmission des pouvoirs se déroule lors du rachat de postes. Le comité fera preuve d’originalité dans la préparation de cette soirée (liste bidon, oscars, etc.)<br />

                                <em>Art. 69</em> Le comité rentrant est responsable de l’organisation et du bon déroulement de la soirée de concert avec le comité sortant.<br />

                                <em>Art. 70</em> L’achat de chaque poste s’effectue en affonant un nombre de bières proportionnel à l’importance du poste. Les barèmes seront déterminés conjointement par le comité sortant et entrant.<br />

                                <em>Art. 71</em> Le président sortant invite le nouveau président sur scène et l’habille de sa cape et du band. Les vice-présidents font de même avec la leur. Le Président nouvellement élu entame le chant de la Mouscronnoise.<br />

                                <em>Art. 72</em> Le Grand-Maître proclame son successeur et remet sa cape lors de la bibitive de fermeture de l’année académique. Le Grand-Maître entrant compose lui-même son praesidium qui entrera en fonction en même temps que lui.<br />

                                <em>Art. 73</em> Le nouveau comité entre en fonction officiellement le 1<sup>er</sup> juillet et officieusement lors du rachat de postes.<br />

                                <!-- Revision -->
                                <h3 id="revisions">Titre 7: De la révision des statuts</h3>

                                <em>Art. 74</em> Le Grand-Maître et le président ont droit d’initiative. Cependant, tout membre du Comité peut suggérer une modification à ceux-ci.<br />

                                <em>Art. 75</em> Les projets de modification des statuts seront portés à connaissance des membres du Comité et d’un maximum d’anciens ayant fait preuve d’expérience suffisante à la Mouscronnoise. Cela dans un délai raisonnable préalable à la première réunion où ils seront délibérés.<br />

                                <em>Art. 76</em> Les réunions lors desquelles les modifications seront débattues comprendront au minimum&nbsp;: le président, le grand-maître ainsi qu’au moins deux anciens présidents ou grand maîtres.<br />

                                <em>Art. 77</em> Le secrétaire envoie un exemplaire des modifications proposées à tous les membres du comité, ainsi qu’aux anciens. Une semaine de délai sera laissée pour toute remarque. Le cas échéant, les personnes ayant œuvrés aux modifications examineront la pertinence de celle-ci et agiront en conséquence.<br />

                                <em>Art. 78</em> Les personnes ayant œuvré à la révision signeront le document. Celui-ci doit être contresigné par au moins deux anciens présidents ou grand-maîtres.<br />

                                <em>Art. 79</em> En cas de contestation dans l’interprétation des statuts, le Grand-Maître contactera les anciens. En cas de litige, il a les pleins pouvoirs.<br />

                                <!-- Disposition Finales -->
                                <h3 id="dispos_finales">Titre 8: Des dispositions finales</h3>

                                <em>Art. 80</em> Les ordres académiques de la Flandre Wallonne étaient:
                                <ul>
                                    <li>L'ordre du Ries</li>
                                    <li>Les Magister Guindaillerum</li>
                                    <li>L'Erectum Primum</li>
                                </ul>
                                Seuls leurs noms subsistent.

                                Un futur Grand-Maître peut décider de leur redonner vie.

                                <em>Art. 81</em> Si dans l'avenir, des ordres académiques ou décorations honorifiques ont cours au sein de la régionale, les principes qui régissent feront l'objet d'un titre 9.<br />

                                <em>Art. 81bis</em> Un nouvel ordre académique ou décoration honorifique ne peut être mis en place qu'avec l'aval d'au moins trois anciens Grand-Maîtres.<br />

                                <em>Art. 82</em> Une copie des présents statuts sera donnée d'office à tous les membres du Comité au début d'année et aux impétrants. Toute personne qui en fait la demande peut en obtenir copie.<br />

                                <em>Art. 83</em> Un exemplaire des présents statuts a été remis aux Archives de l'Université Catholique de Louvain.<br />

							</article>

                        <!-- Histoire -->
                            <article id="histoire">
								<h2 class="major">Notre histoire</h2>
                                <h3>Histoire</h3>
                                <p>La Mouscronnoise de Louvain fut fondée en 1906 par Clothaire Stock. Elle s'appelait alors la Flandre-Wallone et était sur le site de Leuven, sa fonction d'alors peut se deviner par son nom. En effet, rappelons qu'à cette époque Mouscron appartenait encore à la Flandre occidentale. La population étant majoritairement francophone, leur but était donc tout logiquement d'être rattaché à la Wallonie. On y retrouve un groupe d'étudiants actifs dont les membres proviennent surtout du patro ou d'autres mouvements de jeunesse mouscronnois formant ainsi une continuité entre l'enseignement secondaire et l'université.</p>
                                <p>La Flandre-Wallone connaît des hauts et des bas. Elle disparaît momentanément pendant la guerre pour renaître en 1947. Elle monte des canulars d'envergure nationale et obtient même le titre de Royal le 8 février 1957. Ce titre sera confirmé par le cabinet du Roi Baudouin Ier lors de la redéfinition des statuts de la Mouscronnoise en 1986-1987.</p>
                                <p>Le but de la Flandre Wallonne fut atteint en 1963. Mouscron fait alors partie intégrante de la province du Hainaut. Le combat est gagné et cette année concorde avec la fin provisoire de la régionale.</p>
                                <p>Il faudra attendre 1975 pour voir une première refondation de la  Mouscronnoise  à Louvain-la-Neuve cette fois, par Benoît Kesteloot. Cependant, la régionale n'est alors qu'un groupe d'amis et le recrutement se fait difficilement. La mouscronnoise s'éteint à nouveau avec la fin des études de la bande.</p>
                                <p>C'est en 1984 que la Mouscronnoise sera refondée pour de bon, par un groupe d'amis encore : Gregoire Michaux, Olivier Delbecq, Pierre Saintes, Jean Claux et Bouli.</p>
                                <h3>Le kot Mouscronnoise</h3> 
                                <p>Le kot fut obtenu grâce à Catherine Dendoncker (Dindon), présidente de la Mouscronnoise en 1990 ainsi qu'à Jürgen en 2004-2005.<p>
                                <p>Lorsque la mouscronnoise a perdu le kot de la rue des Blancs Chevaux au profit de la BW 4, l'ancien kot binchois fut utilisé. Par la suite, grâce au classement de Jonathan Brel (Darco), président 2006-2007, le kot au 24 rue des Blancs Chevaux fut récupéré.
                                </p>
                                SRC : Synthèse des documents de Corona MSC, Nicolas Roisin
                            </article>

						<!-- Activités -->
							<article id="activites">
								<h2 class="major">Nos activités et classements</h2>
                                <h3>Nos classements fédé</h3>
                                <div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Activité</th>
													<th>Notre thème</th>
													<th>Classement</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>24H</td>
													<td>Les allumoirs</td>
													<td>3<sup>ème</sup></td>
												</tr>
												<tr>
													<td>Carnaval</td>
													<td>Le train à vapeur</td>
													<td>2<sup>ème</sup></td>
												</tr>
												<tr>
													<td>Semaine fédé</td>
													<td>Le Bossu de Notre-Dame</td>
													<td>4<sup>ème</sup></td>
												</tr>
                                                <tr>
													<td>Cabaret</td>
													<td>La Tournaisienne</td>
													<td>6<sup>ème</sup></td>
												</tr>
											</tbody>
											<tfoot>
                                            php.validate.executablePath								<tr>
													<td colspan="2">Classement Fédé</td>
													<td>3<sup>ème</sup></td>
												</tr>
											</tfoot>
										</table>
									</div>
                                
								<h3>Règles du jeu du killer inter-régionales</h3>
                                <p>But du jeu: Killer un maximum de joueurs. (il n’y a pas d’élimination)</p>
                                <ul>
                                    <li>+1 point à chaque fois que vous killez un joueur</li>
                                    <li>- 1 point à chaque fois que vous vous faites killer</li>
                                </ul>

                                <h4>Début de la partie</h4>
                                <p>Chaque participant disposera de 3 cartes représentant les joueurs à killer, ainsi que sa carte d’identité personnelle.
                                    Comment Killer?</p>

                                <p>Vous devez effectuer la mission qui sera inscrite sur la carte. Ces missions, basées sur l’humour et l’ingéniosité, sont souvent en rapport avec la personne à killer.
                                    Exemple explicatif: vous devez tuer Thibault (carte de droite), si vous réussissez la mission, Thibault doit vous donner le mot de passe de SA carte d’identité correspondant au numéro de la votre carte « mission » (voir flèche). Notez le mot de passe au dos de votre carte « mission » (carte de droite) ainsi que votre prénom+régionale et donnez-la au kot MSC ou à un des responsables killers afin qu’on enregistre votre kill et qu’on vous donne deux nouvelles cartes!</p>

                                <h4>Comment se procurer de nouvelles cartes?</h4>

                                <p>Dés que vous avez réussi UNE mission et que vous avez le mot de passe de votre victime, venez au kot MSC avec votre carte « mission », on vous donnera DEUX nouvelles cartes « missions » afin de stimuler le jeu et de récompenser les joueurs qui jouent à fond.</p>

                                <p>Si vous ne réussissez pas à killer après quelques jours, vous pouvez échanger vos cartes « missions » au kot MSC!</p>

                                <p>Trois règles indispensables pour le bon fonctionnement du jeu !</p>
                                <ol>
                                    <li>Vous devez TOUJOURS avoir votre carte d’identité sur vous en soirée.</li>
                                    <li>Le fair-play et le respect des règles du jeu sont indispensables au bon fonctionnement du jeu et à l’amusement de tout le monde.</li>
                                    <li>Echange de carte interdit entre joueurs.</li>
                                </ol>

                                <h4>Et les kills de jour dans tout ça ?</h4>

                                <p>Ils s'effectuent entre 8h et 20h, hors salles d'animation et hors auditoires (et alentours). Contrairement au kills normaux, les kills de jour consistent essentiellement en des missions que vous devez effectuer vous même sur la victime. Exemple : Asperger votre victime de riz.</p>


                                <h3>Killer par équipes</h3>

                                <h4>But du jeu</h4>

                                <p>L’équipe gagnante est celle qui aura killé le plus de participants en 2 semaines et en perdant le moins de vies possibles. Personne n’est éliminé dans ce jeu, mais se faire killer trop souvent compromet fortement la victoire à la fin du jeu.</p>

                                <p>Vous avez reçu 20 cartes killer dans votre enveloppe. L’intérêt de jouer en équipe est de vous répartir les missions entre vous suivant votre habilité à killer. A vous de vous organiser pour killer au mieux (en groupe, faire une mise en scène,…).</p>

                                <p>Des missions pour killer une équipe entière (cartes oranges) vous seront données prochainement, elles rapporteront 3 points.

                                <p>Chaque fois que vous killez une personne (une équipe), ça vous rapporte 1 point (3 points).</p>

                                <p>Chaque fois que vous vous faites killer, vous perdez 1 point, idem pour un kill d’équipe (3 points).</p>

                                <h4>Début de la partie</h4>

                                <p>Chaque équipe disposera de 20 cartes, dès que vous avez réussi une mission, vous pouvez venir en chercher UNE nouvelle au kot MSC. Une permanence sera effectuée entre 12h45 et 14h00 mais vous pouvez passer en dehors des heures, il se peut que les responsables s’y trouvent.</p>

                                <p>Les cartes seront numérotées et comporteront le nom, le prénom de la personne à killer, la régionale dans laquelle elle se trouve, ainsi que la mission à effectuer.</p>

                                <p>Chaque membre de l'équipe aura une carte d'identité à son nom avec ses mots-de-passe ainsi qu'avec les mots-de-passe des kills d'équipe. Pour le bon fonctionnement du jeu, il est indispensable que chaque membre de l’équipe ait sa carte d’identité sur lui.</p>

                                <h4>Comment Killer?</h4>

                                <p>Vous devez effectuer la mission qui sera inscrite sur la carte. Ces missions, basées sur l’humour et l’ingéniosité, sont souvent en rapport avec la personne à killer. Une fois que vous avez réussi la mission, la personne que vous avez tuée DOIT vous fournir son mot de passe associé au numéro de la carte killer. Le plus facile est d’enregistrer votre mot de passe dans votre GSM ainsi que le numéro de carte correspondant.</p>

                                <h4>Comment comptabiliser vos kills et obtenir d’autres cartes ?</h4>

                                <p>Soit vous passez à notre kot, soit vous venez nous rencontrer en soirée (les membres de l'équipe killer auront toujours des cartes sur eux). Une carte killée rendue, deux nouvelles cartes données.</p>

                                <p>Vous DEVEZ avoir votre mot de passe, nous n’encoderons plus de kill sans les mots-de-passe (comme cela a pu être le cas durant le killer individuel)!</p>

                                <p>L’échange de carte de kill entre équipes est interdit et punissable d’exclusion !</p>
                                <p>Trois règles indispensables pour le bon fonctionnement de jeu :</p>
                                <ol>
                                    <li>Vous devez toujours avoir vos cartes sur vous de jour comme de nuit.</li>
                                    <li>Le fair-play et le respect des règles du jeu sont indispensables au bon fonctionnement du jeu.</li>
                                    <li>Le secret s’impose quant aux missions et personnes que vous devez killer car l’alcool va certainement répandre vos secrets jusqu’aux intéressés en question, donc ne dites rien concernant vos missions.</li>
                                </ol>
                                <p>Nous nous réservons le droit de disqualifier toute personne ne respectant pas les règles du jeu. En espérant vous voir nombreux à participer à cette nouvelle activité de la Mouscronnoise, recevez l’expression de nos sentiments les plus alcooliques. Bon amusement !</p>
                                <p>L'équipe Killer.</p>
                                </article>

                        <!-- Comités -->
                            <article id="comite">
								<h2 class="major">Comité</h2>
                                <h3>Le haut-comité</h3>
                                <div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Présidente</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("thomas"); ?>" width="140"  alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td><?php echo Fun_nom("thomas"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Vice-présidente</th>
                                                    <th>Vice-présidente</th>
                                                    <th>Trésorière</th>
                                                    <th>Secrétaire</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("cindy"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Léa"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("sarah"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("ana"); ?>" width="120"   alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td><?php echo Fun_nom("cindy"); ?></td>
                                                    <td><?php echo Fun_nom("Léa R"); ?></td>
                                                    <td><?php echo Fun_nom("sarah"); ?></td>
                                                    <td><?php echo Fun_nom("ana"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Chefs bar</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("aj"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("pauline"); ?>" width="120"   alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td><?php echo Fun_nom("aj"); ?></td>
                                                    <td><?php echo Fun_nom("pauline"); ?></td>
												</tr>
											</tfoot>
										</table>
                                    <h3>Comité</h3>
                                        <table>
											<thead>
												<tr>
													<th>Anims</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("Apolline"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Laure"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Anne"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Louise"); ?>" width="115"  alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td><?php echo Fun_nom("Apolline"); ?></td>
                                                    <td><?php echo Fun_nom("Laure"); ?></td>
                                                    <td><?php echo Fun_nom("Anne"); ?></td>
                                                    <td><?php echo Fun_nom("Louise"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Cultures</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="115"  alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td><?php echo Fun_nom("Inconnu"); ?><Inconnu/td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Décors</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("responsable"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("cindy"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="115"  alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td><?php echo Fun_nom("responsable"); ?></td>
                                                    <td><?php echo Fun_nom("cindy"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Bars</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("willsmith"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("cindy"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("ysa"); ?>" width="120"   alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td><?php echo Fun_nom("willsmith"); ?></td>
                                                    <td><?php echo Fun_nom("cindy"); ?></td>
                                                    <td><?php echo Fun_nom("ysa"); ?></td>
												</tr>
											</tfoot>
                                        </table>
                                        <table>
                                            <tbody>
												<tr>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="120"   alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Relation intérieur</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("caderonas"); ?>" width="120"   alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td><?php echo Fun_nom("Inconnu"); ?></td>
                                                    <td><?php echo Fun_nom("caderonas"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Relation exterieurs</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("responsable"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("caderonas"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="120"   alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td><?php echo Fun_nom("responsable"); ?></td>
                                                    <td><?php echo Fun_nom("caderonas"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Photos</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="120"   alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Sport</th>
                                                    <th>Web</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("raph"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("caderonas"); ?>" width="120"   alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
                                                    <td><?php echo Fun_nom("raph"); ?></td>
                                                    <td><?php echo Fun_nom("caderonas"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Ch'ti</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("responsable"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("ysa"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="120"   alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
                                                    <td><?php echo Fun_nom("responsable"); ?></td>
                                                    <td><?php echo Fun_nom("ysa"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Rhétos</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("willsmith"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("raph"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("juju"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="115"  alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
                                                    <td><?php echo Fun_nom("willsmith"); ?></td>
                                                    <td><?php echo Fun_nom("raph"); ?></td>
                                                    <td><?php echo Fun_nom("juju"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
												</tr>
											</tfoot>
										</table>
                                    <h3>Comité de baptême</h3>
                                        <table>
											<thead>
												<tr>
													<th>Président de baptême</th>
                                                    <th>Vices-président de baptême</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("chef-bar-forever"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="120"   alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="120"   alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
                                                    <td><?php echo Fun_nom("chef-bar-forever"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
												</tr>
											</tfoot>
										</table>
                                        <table>
											<thead>
												<tr>
													<th>Délégués baptême</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("willsmith"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("raph"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("ysa"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="115"  alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
                                                    <td><?php echo Fun_nom("willsmith"); ?></td>
                                                    <td><?php echo Fun_nom("raph"); ?></td>
                                                    <td><?php echo Fun_nom("ysa"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
												</tr>
											</tfoot>
										</table>
                                    <h3>Comité de corona</h3>
                                        <table>
											<thead>
												<tr>
													<th>Grand-maître</th>
                                                    <th>Censeur</th>
                                                    <th>Substitut</th>
                                                    <th>Cantor primus</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("chef-bar-forever"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="115"  alt="*Photos*" /></td>
                                                    <td><img src="<?php echo Fun_photo("Inconnu"); ?>" width="115"  alt="*Photos*" /></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
                                                    <td><?php echo Fun_nom("chef-bar-forever"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
                                                    <td><?php echo Fun_nom("Inconnu"); ?></td>
												</tr>
											</tfoot>
										</table>
                                </div>
								
							</article>
                        
                        <!-- Folklore -->          
                            <article id="folklore">
								<h2 class="major">Folklore</h2>
                                
                                <p>Voici une citation provenant de Achille Jeune, ethnologue, dans son recueil « Drôles d’us », paru en 1996 qui pourrait assez bien décrire une des particularités des mouscronnois :</p>

                                <p>(… dans cette) contrée située à la croisée des cultures, entre monde latin et germanique, où l’urbain (nous sommes au centre d’un triangle formé par Londres - Paris - Bruxelles) rencontre le rural (à deux pas de Tombroek, St Denijs et Bellegem), où les frontières n’existent que par leur nom et sont sans cesse franchies, il existe une ville, Mouscron, dont la population, pour se saluer – pendant une courte période à la fin de l’année – délaisse les formules conventionnelles comme « au revoir », « bonjour chez vous », … pour un étonnant « UN BON RESTE ». Il semblerait que le sens de cette expression se perde dans la nuit des temps (…). (Elle) procure au destinataire un sentiment de félicité et d’appartenance à un même groupe, dans certains cas elle peut engendrer l’euphorie, voire même l’hilarité (…)</p>

                                <p>Bien entendu ce n’est pas tout, le mouscronnois est quelqu’un d’extrêmement accueillant, toujours prêt à rendre service. Le mouscronnois aime également boire une coup de temps en temps comme en témoignent les nombreux cafés qui parsèment la ville.</p>

                                <p>Sur Louvain-La-Neuve, c’est pareil. Vous trouverez le Mouscronnois partout puisque, bien qu’étant logé depuis maintenant quelques années à la rue des Blancs-Chevaux au numéro 24 mais n’aillant pas de salle pour organiser ses propres soirées, il ère partout, rencontrant des gens à droite et à gauche et buvant ou affonant une chope (ou plusieurs) souvent plus rapidement que son ombre. Approchez-le, n’ayez pas peur vous ne serez pas déçus.</p>

                                <h4>La Mouscronnoise sur Louvain-la-Neuve :</h4>

                                <p>La Mouscronnoise de Louvain fut fondée en 1906 par Clothaire Stock. Elle s’appelait alors la Flandre-Wallone, sa fonction d’alors peut se deviner par son nom. En effet, rappelons qu’à cette époque Mouscron appartenait encore à la Flandre occidentale. La population étant majoritairement francophone, leur but était donc tout logiquement d’être rattaché à la Wallonie. On y retrouve un groupe d’étudiants actifs dont les membres proviennent surtout du patro ou d’autres mouvements de jeunesse mouscronnois formant ainsi une continuité entre l’enseignement secondaire et l’université.</p>

                                <p>La Flandre-Wallone connaît des hauts et des bas. Elle disparaît momentanément pendant la guerre pour renaître en 1947. Elle monte des canulars d’envergure nationale et obtient même le titre de « Royal » qui sera reconfirmé lors de la recréation de la régionale et la redéfinition des statuts.</p>

                                <p>Leur but fut atteint dès 1963. Mouscron fait alors partie intégrante de la province du Hainaut. Le combat est gagné et cette année concorde avec la fin provisoire de la régionale.</p>

                                <p>Il faudra attendre 1975 pour voir une première refondation de la « Mouscronnoise » cette fois, par Benoît Kesteloot. Cependant, la régionale n’est alors qu’un groupe d’amis et le recrutement se fait difficilement. La mouscronnoise s’éteint à nouveau avec la fin des études de la bande.</p>

                                <p>C’est en 1984 que la Mouscronnoise sera refondée pour de bon, par un groupe d’amis encore : Gregoire Michaux, Olivier Delbecq, Pierre Saintes, Jean Claux et Bouli. Dès lors, la régionale se développera avec le recrutement de moultes membres, mouscronnois ou non.</p>

                                <p>Plusieurs activités ont depuis pris place au sein de la Mouscronnoise pour devenir traditionnelles et ainsi être organisées chaque année.</p>

                                <p>Pensons notamment au championnat de Belgique d’Estafette, initié par François Boudlet dit Boud, Président 2002-2003. Le principe est le suivant : dans la mesure du possible, une invitation est envoyée au maximum de campus belges (néerlandophones y compris) afin d’avoir une représentation nationale. Chaque équipe est composée de cinq personnes avec la présence de minimum une fille. Une fois ces conditions présentes, le concours peut commencer ; deux équipes s’affrontent, chaque personne possède un certain nombre de bières devant lui (le nombre dépend du tour où ils se trouvent), les filles gardent les mains sur les seins, les garçons gardent les mains sur la nuque jusqu’au moment où ils aphonent leur bière. L’affond se fait à tour de rôle et le suivant ne peut commencer qu’à partir du moment où le précédant dépose son verre vidé sur la table. Chaque glette ou croute est sanctionnée par un demi aphond de pénitence pour le dernier.</p>

                                <p>Depuis l’année de Jonathan Brel dit Darco, Président en 2006-2007, nous organisons également le souper pierrot, plat traditionnellement de notre région et composé de purée de pomme de terre, de saucisse et de haricots sauce tomate. Ce repas que nous organisons depuis est ouvert à tout membre de régionale, de cercle ou encore d’ordre sur réservation préalable.</p>

                                <p>La Mouscronnoise participe également depuis plusieurs années à la traditionnelle fête des Hurlus, cortège organisé par la ville de Mouscron en l’honneur de l’emblème de notre cité. Le rôle de la Mouscronnoise y est de défiler, habillé en Hurlus pendant le cortège tout en fabriquant des petites tresses qui serviront à désigner le chef des Hurlus. A la fin de ce cortège, le chef est désigné (traditionnellement le président de la Mouscronnoise) afin de déloger le curé Adin de son clocher et d’aller combattre le chef des espagnols lors de joutes épiques et ce afin de récupérer les clés de la ville de Mouscron, afin d’assurer un an de bonheur à notre belle ville.</p>

                                <p>Durant l'année de Julien Lebleu, Président en 2011-2012, nous avons organisé pour la première fois la fête des Hurlus à Louvain-la-Neuve. Cet événement est une retranscription de la Fête des Hurlus ayant lieu tous les ans à Mouscron.</p>
                                
                                <h3>Chant :  Bé! Qu'in est fir d'êt Mouscronnôs!</h3>
                                <blockquote>
                                In intind souvint dir' que Mouscron ch't'é beau pat'lin,<br/>
                                Cha s'dit d'tous les côtés, faut croir' que ch'est vrai.<br/>
                                Dins l't'temps ch'n'étot foque un grand villach', mais tcheu tchang'mint.<br/>
                                Tchand qu'in va dins les ru's, in n's'erconnot plus.<br/>
                                Et v'là pourquo qu'in tchant' tout partout à la rant' :<br/>
                                <br/>
                                Refrain :<br/>
                                    
                                Bé! Qu'in est fir d'êt Mouscronnôs!<br/>
                                Pus hiards que nousaut's, y n'd'a pos!<br/>
                                In peut faire l'tour de la terre,<br/>
                                Ch'est bin Mouscron qu'tertous préfère!<br/>
                                Mouscron, qu'in vot si volintis,<br/>
                                Quin n'tchang'rot pos, mêm' pour Paris!<br/>
                                Y'a pos in est heureux comm' des pichons dins l'eau.<br/>
                                Bé! Qu'in est fir d'êt Mouscronnôs! Oh! Oh!<br/>
                                <br/>
                                Tertous sait qu'les vrais Mouscronnôs, ch'est tous des brav's gins,<br/>
                                I-ont tertous é bon tchoeur, toudis d'bonne humeur!<br/>
                                Z-étringis i sont bénalch's de not' timpéramint,<br/>
                                Tchand qu'i vinn'tent nou vir, i n'veutent pus partir.<br/>
                                Et pour êt à la mot', i tchantent avec nousaut's :<br/>
                                <br/>
                                Pour êt heureux y'a des gins qui n'sait' pos dù theurir,<br/>
                                Nd'a qui vont in Afriqu', d'z autes in Amériqu'!<br/>
                                Mais les Mouscronnôs, ch'est des veinrds, cha in peut d'dire<br/>
                                Pasque dins leu p'tit' vill', i sont fin tintchill's!<br/>
                                I-ont v'vrai bonheur su plach', et i tchantent à tout âch':<br/>
                                <br/>
                                Tchand qu'les Mouscronnôs i sont invos pour fair' é tour,<br/>
                                Pins les tchamps, à la mer, histoire de print' l'air.<br/>
                                In vélo, in autocar, au train, tout l'long du jour,<br/>
                                I-ont toudis t'tchoeur joyeux, ch'est des innimeux!<br/>
                                Tchand qu'in les vot passer, i tchantent à tout casser:<br/>
                                <br/>
                                Tchand qu'é Mouscronnôs i arrife à l'port' du paradis,<br/>
                                Comm' ch'est un bon garchon, pas b'zon d'cop d'piston!<br/>
                                Sint-Pirre i s'erdèche, inn' fos qui l'a bin erxetti,<br/>
                                Z'li dit in patos: "Va, much' foqu tout drot !"<br/>
                                Et sans faire de fachon, l'aute rinte in tchantant:<br/>
                                <br/>
                                Pour que nou z'indrot i continue à prospérer,<br/>
                                Ch'est facile à comprint', tertous dot s'intint'!<br/>
                                In s'mettant d'accord, ch'est l'seul moyen d'y arriver,<br/>
                                Et Mouscron, deven'ra ch'in qu'in décid'ré!<br/>
                                Si tertous fait sin d'voir, in peut dir' plein d'espoir:<br/>

                                Cri :

                                Et les Hurlus ?
                                Au fût! (3X)
                                </blockquote>
                                [Source : Le Bitu Magnifique]
                                
                                <h3>La géographie et l’histoire</h3>

                                <p>Voici, pour ceux qui ne connaissent pas encore notre formidable ville, un bref descriptif de notre région et de notre association. Beaucoup de personnes ne connaissent rien de notre ville, pas même sa localisation !! Si c’est ton cas, profites-en bien, en espérant que tu y apprennes des choses intéressantes.</p>

                                <h4>La géographie</h4>

                                <p>Mouscron est située à l’extrême ouest du Hainaut et appartient donc à la Wallonie et ce depuis 1963, date à laquelle elle quitte la Flandre occidentale. Elle chevauche la frontière française et flamande. Cette position singulière lui confère la particularité d’être une commune dite « à facilités ». Voici la localisation, en rouge sur la carte, de l’arrondissement de la ville de Mouscron.</p>

                                <p>Comines et Warneton font également parti de l’arrondissement de Mouscron, les deux villes sont enclavées dans la Flandre occidentale (gris foncé sur la carte) mais font bel et bien parti du Hainaut. Leur enclavement est effectif dès 1988 alors que les querelles linguistiques allaient de bon train, le passage des fourons aux flamands fut compensé par le passage de Comines-Warneton à la Wallonie. Aujourd’hui Mouscron compte plus de 53.000 habitants.</p>

                                <h4>L’histoire</h4>

                                <p>Durant tout le Moyen Age, Mouscron ne fut qu’un petit village partagé entre différentes seigneuries. Touché par les guerres de religion du XVème siècle, c’est à cette période que prit place le contexte des fameux « hurlus ». Ces derniers furent un groupe de bandits locaux qui vivaient de vols et d’exactions, ils s’illustrèrent pendant ces guerres par la prise du château des Comtes pendant une courte période.</p>

                                <p>Ce n’est qu’au cours du XIXème siècle, lors de la révolution industrielle que la ville explosa démographiquement. Dans un premier temps, les populations flamandes s’installèrent à Mouscron, plus proche des industries textiles françaises et surtout moins coûteux. Ce n’est que par après que de nombreuses industries textiles prirent place à Mouscron permettant ainsi un développement économique sans précédant dont la ville garde encore des traces aujourd’hui.</p>

                                <p>Dès 1977 se produit la fusion des communes. Désormais, Mouscron, Dottignies, Herseaux et Luingne ne forment plus qu’une seule et même commune.</p>

							</article>
                        
                        <!-- Sponsors -->
                            <article id="sponsors">
								<h2 class="major">Sponsors</h2>
                                <h4>Nos sponsors 2017-2018, merci à eux pour leur soutien !</h4>
								<span class="image main"><img src="../Shared/images/sponso/1.png" alt="" /></span>
                                <span class="image main"><img src="../Shared/images/sponso/2.jpg" alt="" /></span>
                                <span class="image main"><img src="../Shared/images/sponso/3.png" alt="" /></span>
                                <span class="image main"><img src="../Shared/images/sponso/4.jpg" alt="" /></span>
                                <span class="image main"><img src="../Shared/images/sponso/5.jpg" alt="" /></span>
                                <span class="image main"><img src="../Shared/images/sponso/6.png" alt="" /></span>
                                <span class="image main"><img src="../Shared/images/sponso/7.jpg" alt="" /></span>
                                
							</article>

						<!-- Contact -->
							<article id="contact">
                                <h2 class="major">Contact </h2>
                                <style type="text/css" scoped>
                                    my-email::after {
                                        content: attr(data-domain);
                                    }
                                    my-email::before {
                                        content: attr(data-user) "\0040";
                                    }
                                </style>

                                <p>Pour nous contacter : <my-email data-user="mouscronnoiseucl" data-domain="gmail.com"></my-email></p>
                               
                                <h2 class="major">Réseaux sociaux</h2>
                                <ul class="icons">
				                    <li><a href="https://www.facebook.com/Mouscronnoise-UCL-159383130796235/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
			                    </ul>
							</article>
                        
                        <!-- Connection -->
							<article id="connect">
								<h2 class="major">Connexion</h2>
                                <h3>
                                <?php 
                                    if(isset($erreur)){
                                        if($erreur == 4){echo "Surnom non reconnu";}
                                        elseif($erreur == 5){echo "Mot de passe incorrect";}
                                    }
                                ?>
                                </h3>
								<form method="post" action="PHP/main.php?fct=connect_session">
									<div class="field half first">
										<label for="name">Surnom</label>
										<input type="text" name="Surnom" id="username" required />
									</div>
									<div class="field half">
										<label for="Password">Mot de passe (<a href="#oublie">Oublié?</a>)</label>
										<input type="password" name="Password" id="Password" required />
                                    </div>
									<ul class="actions">
										<li><input type="submit" value="Connection" class="special" /></li>
									</ul>
								</form>
                                <h3>
                                <?php 
                                    if(isset($erreur)){
                                        if($erreur == 6){echo "Veuillez remplir tous les champs";}
                                        elseif($erreur == 7){echo "Les 2 mots de passe ne sont pas identiques";}
                                        elseif($erreur == 8){echo "Caractère(s) incorrect(s)";}
                                        elseif($erreur == 9){echo "Un compte est déjà associé à votre adresse email ou surnom";}
                                    }
                                ?>
                                </h3>
                                <h2 class="major">Inscription</h2>
                                <form method="post" action="PHP/main.php?fct=create_account">
									<div class="field half first">
										<label for="name">Nom</label>
										<input type="text" name="Nom" id="name" required />
									</div>
                                    <div class="field half">
										<label for="name">Prenom</label>
										<input type="text" name="Prenom" id="firstname" required />
									</div>
                                    <div class="field half first">
										<label for="name">Surnom</label>
										<input type="text" name="Surnom" id="byname" required />
									</div>
									<div class="field half">
										<label for="email">Email (UCL)</label>
										<input type="text" name="Email" id="email" required />
                                    </div>
                                    <div class="field half first">
										<label for="name">Mot de passe</label>
										<input type="password" name="Password" id="n_password" required />
									</div>
									<div class="field half">
										<label for="email">Confirmer mot de passe</label>
										<input type="password" name="Password1" id="n_password1" required />
                                    </div>
                                    <!-- CAPTACHA
									<ul class="actions">
                                        <li><div class="g-recaptcha" data-theme="dark" data-sitekey="<?php echo $ini['clepublique']; ?>"></div></li>
										<li><input type="submit" value="Inscription" class="special" /></li>
									</ul>-->
								</form>
							</article>

                            <!-- Mot de passe oublié -->
                            <article id="oublie">
                                    <h2 class="major">Récupération de compte</h2>
                                    <h3>
                                    <?php 
                                        if(isset($erreur)){
                                            if($erreur == 1){echo "Email envoyé";}
                                            elseif($erreur == 2){echo "Adresse email inconnue";}
                                        }
                                    ?>
                                    </h3>
                                    <form method="post" action="PHP/oublie.php">
                                        <div class="field">
                                            <label for="name">Adresse email</label>
                                            <input type="email" name="Email" id="Email" required />
                                        </div>
                                        <ul class="actions">
                                            <li><input type="submit" value="Envoyer" class="special" /></li>
                                        </ul>
                                    </form>
                                </article>

                        <?php   if(isset($_GET['token'])) {?>
                            <!-- Mot de passe oublié -->
                            <article id="recover">
                                    <h2 class="major">Récupération de mot de passe</h2>
                                    <form method="post" action="PHP/main.php?fct=update_passwordforgot&amp;token=<?php echo $_GET['token']; ?>">
                                        <div class="field">
                                            <label for="name">Nouveau mot de passe</label>
                                            <input type="text" name="Password" required />
                                        </div>
                                        <div class="field">
                                            <label for="name">Retaper mot de passe</label>
                                            <input type="text" name="Password1" required />
                                        </div>
                                        <ul class="actions">
                                            <li><input type="submit" value="Envoyer" class="special" required /></li>
                                        </ul>
                                    </form>
                                </article>
                        <?php }?>
                    </div>


				<!-- Footer -->
					<footer id="footer">
						<p class="copyright"> 
                            <?php if(!isset($_SESSION['ID'])){ ?> 
                            <a href="#connect">Se connecter/S'inscrire</a>. 
                            <?php }else{ ?> 
                            <a href="account.php">Mon compte</a> - <a href="PHP/main.php?fct=kill_session">Se déconnecter</a>. 
                            <?php } ?> Conception: Verhaeghe Loïc.&copy;</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
