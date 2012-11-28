
<div id="teaching">

  <h1>Enseignements</h1>

  <h2>GLIN102 - Concepts de base en informatique</h2>
  <h3>Ma première page web</h3>
  
  <p>Réalisez par groupe de deux ou trois, un site web de 2 pages sur le sujet de votre choix (de préférence un truc qui vous branche). 
  
  <h4>What is HTML?</h4>
  <p><cite>L’Hypertext Markup Language, généralement abrégé HTML, est le format 
  de données conçu pour représenter les pages web. C’est un langage de 
  balisage qui permet d’écrire de l’hypertexte, d’où son nom. HTML permet 
  également de structurer sémantiquement et de mettre en forme le contenu 
  des pages, d’inclure des ressources multimédias dont des images, des 
  formulaires de saisie, et des éléments programmables tels que des applets. 
  Il permet de créer des documents interopérables avec des équipements très 
  variés de manière conforme aux exigences de l’accessibilité du web. Il 
  est souvent utilisé conjointement avec des langages de programmation 
  (JavaScript) et des formats de présentation (feuilles de style en cascade). 
  HTML est initialement dérivé du Standard Generalized Markup Language (SGML).</cite> <span class="cite_source" >Wikipedia</span> </p>
  
  <img src="../img/structure_document_html.png" alt="Structure d'un document HTML"/>
  
  <h4>Les outils</h4>
    <ul>
      <li>Vous pouvez utiliser <a href="../downloads/html_skeleton.html" >ce squelette de page vierge</a>
      
       <span onClick="toggle_aid('aid_download_skeleton')" class="view_aid" href="">help?</span>
      <div id="aid_download_skeleton" class="aid">
        Clique droit -&gt; Enregistrer sous
      </div>
      </li>
      <li>
      Un éditeur de texte : kate (emacs, vim pour les fanatiques)
      <span onClick="toggle_aid('aid_traitement_texte')" class="view_aid" href="">Attention, un éditeur de texte n'est pas un traitement de text</span>
      <div id="aid_traitement_texte" class="aid">
        Un traitement de texte permet la mise en forme d'un document 
        (taille et couleur de police, insertion d'images…).<br/>
        Un éditeur de texte permet d'éditer un fichier de texte brute. 
        (Vous pouvez afficher le contenu d'un fichier de texte brute avec la commande <em>cat</em> sur un terminal UNIX)
      </div>
      </li>
      <li>Votre navigateur web préféré</li>
    </ul>
  
  <h4>Ce que vous devez savoir faire après ce TP</h4>
  
  Votre site internet devra contenir les élements suivant :</p>
  
  <ul>
    <li>h1, h2, h3,…</li>
    <li>p, a, img, br, hr</li>
    <li>em, strong</li>
    <li>table, ul, ol</li>
    <li>title, link</li>
    <li><a href="http://cfijdida.voila.net/siteweb/ancres_liens.htm#haut_page" target="_blank">des ancres</a></li>
    <li>des <i>&lt;!-- commentaires --&gt;</i></li>
  </ul>
  
  <p>Vous trouverez des informations sur ces <em>balises</em> à cette adresse : 
  <a href="http://www.w3schools.com/tags/default.asp" target="_blank">www.w3schools.com</a>. 
  Vous pouvez aussi consulter le code source d'un site web existant pour 
  vous en inspirer.
  <span onClick="toggle_aid('aid_view_source')" class="view_aid" href="">help?</span></p>
  
  <div id="aid_view_source" class="aid">clique droit sur une page web -&gt; Afficher le code source de la page</div>
  
  <h4>Dans un deuxième temps</h4>
    <ul>
      <li>Les attributs css: background-image, float</li>
      <li>Regardez comment modifier un élement particulier grâce aux attributs id et class des balises html et comment les modifier avec du css</li>
      <li>Utilisation de Open Office pour créer des pages Web</li>
    </ul>
  
  <h4>Best practices</h4>
    <dl>
      <dt>Indentation</dt><dd></dd>
      <dt>Sépartion fond (HTML) / forme (CSS)</dt><dd></dd>
  </dl>
  
  
  <h4>ressources diverses</h4>
    <ul>
      <li><a href="http://www.siteduzero.com/tutoriel-3-13666-apprenez-a-creer-votre-site-web-avec-html5-et-css3.html" target="_blank">www.siteduzero.com</a></li>
      <li><a href="http://www.w3schools.com/" target="_blank">www.w3schools.com</a></li>
      <li><a href="http://xhtml.developpez.com/cours/" target="_blank">xhtml.developpez.com/cours/</a></li>
      <li><a href="http://css.developpez.com/cours/" target="_blank">css.developpez.com/cours/</a></li>
      <li><a href="http://duckduckgo.com/" target="_blank">Votre moteur de recherche préféré</a></li>
    </ul>
    
  <h5>Pour allez plus loin</h5>
    <ul>
      <li>javascript</li>
      <li>HTML5/css3</li>
      <li>php/mysql</li>
      <li>xml</li>
    </ul>
    
  <script type="text/javascript">
    var elements = document.getElementsByClassName("aid");
    for (var i in elements)
      {
        var e = elements[i];
        e.style.display="none";
      }
      
    function toggle_aid(id)
    {
      var e = document.getElementById(id);
      if( e == null )
        {}
      else
      { 
        if(e.style.display=="block")
          e.style.display="none";
        else 
          e.style.display="block";
      }

    }
      
    
  </script>
</div>
