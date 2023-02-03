<?php namespace ProcessWire;
use Media;

/**
 * ProcessWire “Hello world” demonstration module
 *
 * Demonstrates the Module interface and how to add hooks.
 * This version of Helloworld requires ProcessWire 3.0 or newer.
 * 
 * Copyright [year] by [your name]
 * This module licensed under [choose your license: MPL 2.0 or MIT]
 * 
 * Below we use phpdoc syntax to identify the configurable properties
 * from our Helloworld.config.php file. This is optional, but may be
 * helpful if you are using an editor that recognizes phpdoc syntax.
 * These properties will be automatically populated to your module, regardless
 * of whether or not you mention them here. See the Helloworld.config.php file.
 * 
 * MODULE CONFIGURATION PROPERTIES
 * ===============================
 * @property string $helloMessage The hello world message to display
 * @property int $useHello Whether or not our hello message is enabled
 *
 */

class Webengine extends WireData implements Module, ConfigurableModule {

	/**
	 * Construct
	 * 
	 * This is often used to set default values for configuration settings
	 * 
	 */

	public $engine;
	public $templater;

	public $site_context_urls;

	public $router_page;
	public $web_root_page;
	public $web_root_page_real_url;
	public $current_page;
	public $current_page_real_url;

	public $site_path;
	public $webengine_path;


		// i.e. do something that only applies users in the admin



	public function __construct() {
		parent::__construct();
		$this->set('helloMessage', 'Hello World');
		$this->set('useHello', 0);
		// you may remove this method if you do not need it		
	}

	/**
	 * Initialize the module (optional)
	 *
	 * ProcessWire calls this method when the module is loaded. At this stage, all
	 * module configuration values have been populated.  
	 * 
	 * For “autoload” modules, this will be called before ProcessWire’s API is ready. 
	 * This is a good place to attach hooks (as is the “ready” method).
	 *
	 */
	public function init() {

		$this->wire()->set("webengine", $this);				
		//$this->engine = new Media\WebengineAlone($this->wire());				
		$this->addHookBefore('Page::render', $this, 'pageRenderEngineProcess');
		

	}

	public function preparePagesForNavigation($pages){
		$new_pages = $pages;
		foreach($new_pages as $page){
			$page = $this->preparePageForNavigation($page);
		}
		return $new_pages;
	}

	public function preparePageForNavigation($page){
		
		//bd($this->site_context_urls);


		
		$url_arr = explode("/",$page->url);
		//bd($url_arr);
		$sliced = array_slice($url_arr,3,-1);
		//bd($sliced);
		$final = "/".implode("/",$sliced);
		//bd($final);

		if($this->site_context_urls){
			if($final == "/home"){
				$page->page_url = "/";
			}
			else{
				$page->page_url = $final;
			}
			
		}
		else{
			$page->page_url = $page->url;
		}

		return $page;
		
	}

	/**
	 * Called when ProcessWire’s API is ready (optional)
	 * 
	 * This optional method is similar to that of init() except that it is called
	 * after the current $page has been determined and the API is fully ready to use.
	 * Use this method instead of (or in addition to) the init() method if your 
	 * initialization requires that the `$page` API variable is available.
	 * 
	 */

	 public function getOriginPage(){

	 }

	public function ready() {


		include "templater/xc_template_engine.php";
		
		$page = $this->wire()->page; 
		$user = $this->wire()->user; 

		if(wire()->input->urlSegment1() || wire()->input->urlSegmentStr==""){
			$this->site_context_urls = true; 
		}
		else{
			$this->site_context_urls = false;
		}

        
		if($page->template->name != 'admin' && true) {
			
			//$this->addHookAfter('Page::renderValue("url")', $this, 'pageUrlChanger');

			$this->router_page = wire()->pages->findOne("template=webengine_router");	
			$this->web_root_page = $this->resolveSite();

			$this->site_path =  wire()->config->paths->root."sites/".$this->web_root_page->name."/";
			$this->webengine_path = wire()->config->paths->root."site/modules/webengine/";

			$uri = $_SERVER["REQUEST_URI"];

			$real_page_url = "/".$this->router_page->name."/".$this->web_root_page->name.$uri;
						
			//bd($webengine_router_page);
			//bd($website_root_page);

			if(!$this->web_root_page){
				wire()->error("Neexistující web s napojením na tuto doménu.");
			}

			$this->current_page = wire()->pages->get($real_page_url);

			if(!$this->current_page->id){
				wire()->error("Neexistující stránka na webu s touto doménou.");
			}
			else{			
				if($this->current_page->template=="webengine_website"){
					$this->current_page = wire()->page= $this->current_page->child();
				}		
				//wire()->page= $this->current_page;
			}

		}
		// Examples of a URL hooks (requires ProcessWire 3.0.173+):
		// https://processwire.com/blog/posts/pw-3.0.173/
		
		// This example outputs "Hello World" when you access the URL /hello/world/
		$this->addHook('/hello/world/', function(HookEvent $event) {
			return __('Hello World');
		});
		
		// Access URL /hello/planet/earth, /hello/planet/mars, or /hello/planet/jupiter
		$this->addHook('/hello/planet/(earth|mars|jupiter)', function(HookEvent $event) {
			return "Hello " . $event->arguments(1);
		});
		
		// Example of using named arguments: try accessing /hello/neptune, etc.
		$this->addHook('/hello/{planet}', function(HookEvent $event) {
			$planet = $event->arguments('planet'); // get the argument by name
			$planet = wire()->sanitizer->word($planet); // reduce to just 1st word
			return "Hello $planet";
		});

		

	}

	public function resolveSite(){		
        $server_name = $_SERVER['SERVER_NAME'];
        $page = wire()->pages->findOne("xcf_domains.xcf_domain=$server_name");
        return $page;
	}

	public function getAppConfigPath(){
		return wire()->config->paths->root."site/apps/".$this->appname."/app.config.php";
	}

	/**
	 * Hook after $pages->save() method 
	 * 
	 * Hooks into the $pages->save() method and displays a notice every time a page is saved.
	 * 
	 * @param HookEvent $event
	 *
	 */
	public function pageSaveHookExample(HookEvent $event) {
		
		// We ask for the first argument passed to the $pages->save($page) method, which is argument 0. 
		// If preferred, you can also ask for an argument by name, i.e. $event->arguments('page'); 
		
		$page = $event->arguments(0); 
		$this->message($this->helloMessage . ' - ' . sprintf($this->_('You saved %s'), $page->path)); 
	}

	/**
	 * Hook after Page::render()
	 * 
	 * Hooks into every page after it's rendered and adds your hello message text at the bottom.
	 * 
	 * Interesting note: Page::render() is itself a hook, added by /wire/modules/PageRender.module,
	 * so this method is actually hooking to a hook! But everything works the same as if the
	 * method actually existed in the Page class, so you don't even need to know this. 
	 * 
	 * @param HookEvent $event
	 *
	 */
	public function pageRenderEngineProcess(HookEvent $event) {

		// The $event->object is always the object hooked to, in this case a Page object,
		// since the hook is to Page::render.
		
		$page = $event->object; /** @var Page $page */
		
		$site_spec_template_path = $this->site_path."templates/page_templates/".$page->template->name.".php";
		$webengine_spec_template_path = $this->webengine_path."templates/page_templates/".$page->template->name.".php";
		bd($site_spec_template_path);
		/*bd($webengine_spec_template_path);
		bd(file_exists($site_spec_template_path));
		bd(file_exists($webengine_spec_template_path));
*/
		
		if($page->xcf_custom_template){
			$template_arr = explode(">",$page->xcf_custom_template);
			if($template_arr[0]=="webengine"){
				$custom_template_path = $this->config->paths->root."site/modules/webengine/templates/page_templates/".$template_arr[1];
			}
			elseif($template_arr[0]=="site"){
				$custom_template_path = $this->config->paths->root."sites/pwmd.local/templates/".$template_arr[1];
			}

			if(file_exists($custom_template_path)){
				$page->template->setFilename($custom_template_path);
			}
			
		}

		elseif(file_exists($site_spec_template_path)){
			$page->template->setFilename($site_spec_template_path);
		}
		elseif(file_exists($webengine_spec_template_path)){
			$page->template->setFilename($webengine_spec_template_path);
		}


		/*if($this->view){
			

			bd($this->config->paths->templates);

			$location = $this->config->paths->root.'site/apps/'.strtolower($this->appname).'/controllers/';
			$template = $this->getView().".tpl.php";
			bd($template);
			$fullpath = $location.$template;
			bd("Fullpath = $fullpath");
			if(file_exists($fullpath)){
				$this->config->setLocation('templates', $location);
				$page->template->setFilename($template);
			}
			else{
				bd("neexistuje".file_exists($location.$template));	
			}

			bd($this->config->paths->templates);

			
		}*/
		
		
	}

	public function pageUrlChanger(HookEvent $event) {

		// The $event->object is always the object hooked to, in this case a Page object,
		// since the hook is to Page::render.
		
		

		/*$page = $event->object; 
		$page->page_link = "/dadsa"; // TODO !!!
		
*/
		$event->return = "/google";

		bd("A");
		//bd($event->object);
		
		//$page->path = "/dsadasdas/dsadas";

		/*return $page;*/

	}


	/**
	 * Hook to Page::hello
	 * 
	 * This adds a hello() method (not property) to every Page object. When accessed, via 
	 * $page->hello(); (where $page is any Page) it simply returns the string "Hello World".
	 * 
	 * If you pass an argument to it, it will include that in the hello message.
	 * 
	 * @param HookEvent $event
	 *
	 */
	public function pageHelloHookExample(HookEvent $event) {
	
		// determine the page that our method hook was called on
		$page = $event->object; /** @var Page $page */
		
		// return our configurable hello message, along with some text indicating what the page is
		$event->return = $this->helloMessage . ' - ' . sprintf($this->_('This is page %s'), $page->path);
		
		if($event->arguments(0)) {
			// if the method call had an argument, append it in the return value, just to
			// demonstrate how your hook methods can use arguments. 
			$event->return .= " - " . $event->arguments(0);
		}
	}

	/**
	 * Build module configuration inputs
	 * 
	 * If you prefer configuration can also be specified more declaratively with a PHP 
	 * array in an external configuration file. See the /extras/Helloworld.config.php 
	 * file included in this module’s files for an example. 
	 * 
	 * @param InputfieldWrapper $inputfields
	 * 
	 */
	public function getModuleConfigInputfields(InputfieldWrapper $inputfields) {
		$modules = $this->wire()->modules;

		/** @var InputfieldText $f */
		$f = $modules->get('InputfieldText');
		$f->attr('name', 'helloMessage');
		$f->label = $this->_('Your hello world message');
		$f->description = $this->_('This is here as an example of a configurable module property.');
		$f->val($this->helloMessage);
		$f->required = true;
		$f->icon = 'smile-o';
		$inputfields->add($f);

		/** @var InputfieldToggle $f */
		$f = $modules->get('InputfieldToggle');
		$f->attr('name', 'useHello');
		$f->label = $this->_('Use hello world message?');
		$f->description = $this->_('This will make your hello world message display at the bottom of every page.');
		$f->notes = $this->_('The hello message will only be shown to users with edit access to the page.');
		$f->val($this->useHello);
		$inputfields->add($f);
	}

	/**
	 * Optional method that is called when the module version is upgraded
	 * 
	 * @param string $fromVersion From version string i.e. '1.2.3'
	 * @param string $toVersion To version string i.e. '1.2.4'
	 * 
	 */
	public function ___upgrade($fromVersion, $toVersion) {
		// you may remove this method if you do not need it
		if(version_compare($fromVersion, '0.0.3', '<=')) {
			// user upgraded from version 3 or prior
			$this->message("Congratulations on upgrading to version $toVersion"); 
		}
	}

	/**
	 * Optional method called when the module is installed
	 * 
	 * This method is typically used to create DB tables or install files
	 * in the correct location, etc. Should the installation need to fail
	 * for some reason, it should `throw new WireException('error description');`
	 * 
	 */
	public function ___install() {
		// Example of creating a DB table (example only, we don’t use it for anything)
		// you may remove this method if you do not need it
		$sql = "
			CREATE TABLE hello_world (
				id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
				name VARCHAR(128)
			) ENGINE={$this->config->dbEngine} DEFAULT CHARSET={$this->config->dbCharset}
		";
		try {
			$this->wire()->database->exec($sql);
		} catch(\Exception $e) {
			$this->error($e->getMessage());
		}
	}

	/**
	 * Optional method called when the module is uninstalled
	 *
	 * This method undoes anything that the install() method did.
	 * For instance, remove installed DB tables, files, etc.
	 *
	 */
	public function ___uninstall() {
		// Example of dropping a DB table:  
		// you may remove this method if you do not need it
		try {
			$this->wire()->database->exec("DROP TABLE hello_world");
		} catch(\Exception $e) {
			$this->error($e->getMessage());
		}
	}

	

		
}
