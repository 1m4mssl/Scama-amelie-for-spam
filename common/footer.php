<footer class="wlp-bighorn-footer" role="contentinfo">
        <div class="wlp-bighorn-layout wlp-bighorn-layout-flow">
            <div class="wlp-bighorn-layout-cell wlp-bighorn-layout-flow-horizontal wlp-bighorn-layout-flow-first" style="height: 0px;line-height:0px;">
                <div></div>
                <div class="wlp-bighorn-theme wlp-bighorn-theme-borderless">
                    <div id="Footer" class="wlp-bighorn-window  ">
                        <div class="wlp-bighorn-window-content">

                            <div class="footer-connexion">

                                <div class="footer-version">
                                    <span>
				Version :
				<span id="numeroVersion">21.13.03</span>
                                    </span>
                                </div>

                                <ul>
                                    <li>
                                        <a class="logo-footer" href="" title="Accéder à l'accueil">
                                            <img src="https://assure.ameli.fr/PortailAS/framework/skins/assure/images/refonte/footer/footer_logo_ameli.png" class="logoam" alt="Logo du régime d'assurance maladie">
                                        </a>
                                    </li>

                                    <li>
                                        <a id="id_lien_info_legales" target="aideAmeli" href="http://didacticiel.ameli.fr/assures/cgu_mentionslegales/#conditions-generales-dutilisation" title="Mentions légales et CGU">
				                            Mentions légales et CGU
			                            </a>
                                    </li>

                                    <li>
                                        <a id="id_lien_accessibilite" target="aideAmeli" href="http://didacticiel.ameli.fr/assures/cgu_mentionslegales/#accessibilite" title="Aide et Accessibilité">
				                            Aide et Accessibilité
			                            </a>
                                    </li>

                                    <li>
                                        <a id="id_lien_recommandations_securite" href="http://didacticiel.ameli.fr/assures/cgu_mentionslegales/#recommandations-de-securite" title="Recommandations de sécurité" target="aideAmeli">
				                            Recommandations de sécurité
			                            </a>
                                    </li>

                                    <li>
                                        <a id="id_lien_protection" target="aideAmeli" href="http://didacticiel.ameli.fr/assures/cgu_mentionslegales/#conditions-generales-dutilisation" title="Protection des données personnelles">
				                            Protection des données personnelles
			                            </a>
                                    </li>

                                    <li>
                                        <a id="id_lien_site_ameli.fr" href="https://www.ameli.fr/" title="Site Ameli" target="aideAmeli">
				                            Site Ameli
			                            </a>
                                    </li>

                                </ul>
                            </div>

                            <script type="text/javascript">
                                if (window.addEventListener)  // W3C DOM
                                  window.addEventListener('load', function() {formatterVersionPortail('VU211303X');});
                                else if (window.attachEvent) { // IE DOM
                                  window.attachEvent("on"+'load', function() {formatterVersionPortail('VU211303X');});
                                }
                            </script>

                            <script type="text/javascript">
                                window.addEvent('domready', function(event) {    
                                	$$('div.wlp-bighorn-menu-menu-panel > ul > li').each(function(liMenu){
                                		if(liMenu.getElements('ul').length > 0){
                                			if(liMenu.hasClass('menuGrand')){
                                				liMenu.getElements('ul>li>ul>li>a').each(function(aMenu){
                                					aMenu.addEvent('focus', function(){
                                						liMenu.getElements('ul>li>ul').each(function(ulMenu){
                                							ulMenu.setStyles({
                                								left: 'inherit',
                                								height: 'inherit',
                                								width: 'auto',
                                								top: 'inherit',
                                								position: 'inherit',
                                								lineHeight: 'inherit'	
                                							});
                                						});
                                						liMenu.getElements('ul')[0].setStyles({
                                							left: '0',
                                							height: 'inherit',
                                							width: '100%',
                                							maxWidth: 'none',
                                							top: '38px',
                                							lineHeight: 'inherit'	
                                						});
                                						liMenu.getElements('a')[0].setStyles({
                                							color: 'white',
                                							backgroundColor: '#27aae1'
                                						});
                                					});
                                					aMenu.addEvent('blur', function(){
                                						liMenu.getElements('ul>li>ul')[0].removeProperty('style');
                                						liMenu.getElements('ul')[0].removeProperty('style');
                                						liMenu.getElements('a')[0].removeProperty('style');
                                					});
                                				});
                                			} else {
                                				liMenu.getElements('ul>li>a').each(function(aMenu){
                                					aMenu.addEvent('focus', function(){
                                						liMenu.getElements('ul')[0].setStyles({
                                							left: 'inherit',
                                							height: 'inherit',
                                							width: 'auto',
                                							top: '38px',
                                							lineHeight: 'inherit'	
                                						});
                                						liMenu.getElements('a')[0].setStyles({
                                							color: 'white',
                                							backgroundColor: '#27aae1'
                                						});
                                					});
                                					aMenu.addEvent('blur', function(){
                                						liMenu.getElements('ul')[0].removeProperty('style');
                                						liMenu.getElements('a')[0].removeProperty('style');
                                					});
                                				});
                                			}
                                		}
                                	});
                                ;});
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>