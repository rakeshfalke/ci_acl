<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//use models\Entities\Posts;
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$em = $this->doctrine->em->getConnection();
		//$this->load->library('access');
		 // create a new user object
    $posts = new Entities\Posts;
    $posts->setTitle('Rakesh\'s blog');
    $posts->setBody('This is really exciting! Not.');
    $posts->setModified(new DateTime());
    $posts->setCreated(new DateTime());
    //$this->doctrine->em->persist($posts);
    //$this->doctrine->em->flush();
    $menu = new Entities\Menu;
    $menu->setMenuSegment('posts/index');
    $menu->setMenuName('Rakesh\'s blog');
    $menu->setMenuRoles('1,3,5');
    ////$this->doctrine->em->persist($menu);
    //$this->doctrine->em->flush();

		$blogs = $em->executeQuery('SELECT * FROM posts WHERE 1')->fetchAll();
		$this->load->library('parser');
		$data = array(
              'blog_title'   => 'My Blog Title',
              'blog_heading' => 'My Blog Heading',
              'blog_entries' => $blogs,
            );
		$this->parser->parse('welcome_message', $data);
		$this->output->cache(100);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */