
<div id="teaching" >

  <h1>Enseignements</h1>
  <h2>GLIN102 - Concepts de base en informatique</h2>
  
  <h3>Ma première page web</h3>
  
  <p>Réalisez par groupe de deux ou trois, un site web de 2 pages sur le sujet de votre choix (de préférence un truc qui vous branche).</p>


  <h4>What is HTML?</h4>
  <p>
    <cite>L’Hypertext Markup Language, généralement abrégé HTML, est le format 
    de données conçu pour représenter les pages web. C’est un langage de 
    balisage qui permet d’écrire de l’hypertexte, d’où son nom. HTML permet 
    également de structurer sémantiquement et de mettre en forme le contenu 
    des pages, d’inclure des ressources multimédias dont des images, des 
    formulaires de saisie, et des éléments programmables tels que des applets. 
    Il permet de créer des documents interopérables avec des équipements très 
    variés de manière conforme aux exigences de l’accessibilité du web. Il 
    est souvent utilisé conjointement avec des langages de programmation 
    (JavaScript) et des formats de présentation (feuilles de style en cascade). 
    HTML est initialement dérivé du Standard Generalized Markup Language (SGML).</cite> 
    <span class="cite_source" >[Wikipedia 2012]</span> 
  </p>
  
  <!-- @todo ajouter une vision arborescente du code html présent dans l'image -->
  <img id="img_struct_doc_html" class="center" src="../img/structure_document_html.png" alt="Structure d'un document HTML"/>
  <div class="legend" >Structure d'un document HTML [Wikipedia 2012]</div>

  
  <h4>Les outils</h4>

    <ul>
      <li>
        Vous pouvez utiliser <a href="../downloads/html_skeleton.html" >ce squelette de page vierge</a>
        <span onClick="toggle_aid('aid_download_skeleton')" class="view_aid" href="">help?</span>
        <div id="aid_download_skeleton" class="aid">
          Clique droit -&gt; Enregistrer sous
        </div>
      </li>
      <li>
        Un éditeur de texte : kate (emacs, vim pour les fanatiques)
        <span onClick="toggle_aid('aid_traitement_texte')" class="view_aid" href="">
          Attention, un éditeur de texte n'est pas un traitement de texte
        </span>
        <div id="aid_traitement_texte" class="aid">
          Un traitement de texte permet la mise en forme d'un document 
          (taille et couleur de police, insertion d'images…).<br/>
          Un éditeur de texte permet d'éditer un fichier de texte brute. 
          (Vous pouvez afficher le contenu d'un fichier de texte brute 
          avec la commande <em>cat</em> sur un terminal UNIX)
        </div>
      </li>
      <li>Votre navigateur web préféré</li>
    </ul>
  
  
  <h4>Ce que vous devez savoir faire après ce TP</h4>
  
  <p>Votre site internet devra contenir les élements suivant :</p>
  
  <ul>
    <li>h1, h2, h3,…</li>
    <li>p, a, img, br, hr</li>
    <li>em, strong</li>
    <li>table, ul, ol</li>
    <li>title, link</li>
    <li><a href="http://cfijdida.voila.net/siteweb/ancres_liens.htm#haut_page" target="_blank">des ancres</a></li>
    <li>des <i>&lt;!-- commentaires --&gt;</i></li>
  </ul>
  
  <p>
    Vous trouverez des informations sur ces <em>balises</em> à cette 
    adresse : <a href="http://www.w3schools.com/tags/default.asp" 
    target="_blank">www.w3schools.com</a>. Vous pouvez aussi consulter le 
    code source d'un site web existant pour vous en inspirer.
    <span onClick="toggle_aid('aid_view_source')" class="view_aid" href="">help?</span>
  </p>
  
  <div id="aid_view_source" class="aid">
    clique droit sur une page web -&gt; Afficher le code source de la page
  </div>
  
  
  <h4>Dans un deuxième temps</h4>
    
    <ul>
      <li>
        Associer un fichier css à votre site web 
        <span onClick="toggle_aid('aid_link_css')" class="view_aid" href="">help?</span>
        <div id="aid_link_css" class="aid"> 
          Inserer la balise suivante dans l'entête de votre page web. <br/>
          &lt;link rel="stylesheet" type="text/css" href="style.css" /&gt; <br/>
          Vous pouvez utiliser <a href="../downloads/style.css" >ce fichier css d'exemple</a>.
        </div>
      </li>
      <li>Regarder les attributs css suivants : <em>color, font, text-align, margin, background-image, float, etc…</em></li>
      <li>Regarder les attributs id et class des balises html et comment y faire référence depuis un fichier css
      <span onClick="toggle_aid('aid_id_class')" class="view_aid" href="">help?</span>
        <div id="aid_id_class" class="aid"> 
          <ul>
            <li><a href="http://css.mammouthland.net/selecteurs-css-class-id.php" target="_blank" >Sélecteurs CSS class et id</a></li>
            <li><a href="http://www.w3schools.com/css/css_id_class.asp" target="_blank" >w3schools.com</a></li>
          </ul>
        </div>
      </li> 
      <li>Utilisation de Open Office pour créer des pages Web</li>
    </ul>
  
  
  <h4>Best practices</h4>
    
    <ul>
      <li><a href="http://net.tutsplus.com/tutorials/html-css-techniques/30-html-best-practices-for-beginners/" target="_blank">30 HTML Best Practices for Beginners</a></li>
      <li><a href="http://fr.wikipedia.org/wiki/Style_d%27indentation" target="_blank">Indenter</a> votre code</li>
      <li>Sépartion fond (HTML) / forme (CSS) <!-- @todo link needed --></li>
    </ul>
    
    
  <h4>Pour allez plus loin</h4>
    
    <ul>
      <li>javascript</li>
      <li>HTML5/css3</li>
      <li>php/mysql</li>
      <li>xml</li>
    </ul>
    
  <h4>Ressources diverses</h4>
    
    <ul>
      <li><a href="http://fr.wikiversity.org/wiki/HTML" target="_blank">Wikiversité</a></li>
      <li><a href="http://www.siteduzero.com/tutoriel-3-13666-apprenez-a-creer-votre-site-web-avec-html5-et-css3.html" target="_blank">siteduzero.com</a></li>
      <li><a href="http://www.w3schools.com/" target="_blank">w3schools.com</a></li>
      <li><a href="http://xhtml.developpez.com/cours/" target="_blank">xhtml.developpez.com/cours/</a></li>
      <li><a href="http://css.developpez.com/cours/" target="_blank">css.developpez.com/cours/</a></li>
      <li><a href="http://duckduckgo.com/" target="_blank">Votre moteur de recherche préféré</a></li>
    </ul>
    
    
  <h4>Informations</h4>
    
    <p>
      <strong>Auteurs : </strong>Walid BENGHARIT, Clément SIPIETER<br/>
      <strong>Source du cours : </strong> <a href="https://github.com/sipi/glin102_teaching/" >https://github.com/sipi/glin102_teaching/</a><br/>
      <strong>Licence : </strong> <a href="http://www.gnu.org/licenses/fdl-1.3-standalone.html" >GNU Free Documentation License</a>
    </p>
    
    
  <script type="text/javascript">
    
    init();
    
    function init()
    {
      var elements = document.getElementsByClassName("aid");
      for (var i in elements)
        {
          var e = elements[i];
          e.style.display="none";
        }
    }
      
    function toggle_aid(id)
    {
      var e = document.getElementById(id);
      if( e != null )
      { 
        if(e.style.display=="block")
          e.style.display="none";
        else 
          e.style.display="block";
      }
    }
    
  </script>
</div>
