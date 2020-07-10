<?php
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('user/layouts/header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('user/layouts/footer', $vars, $return);

        return $content;
    else:
        $this->view('user/layouts/header', $vars);
        $this->view($template_name, $vars);
        $this->view('user/layouts/footer', $vars);
    endif;
	}
	
	public function admintemplate($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('admin/layouts/header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('admin/layouts/footer', $vars, $return);

        return $content;
    else:
        $this->view('admin/layouts/header', $vars);
        $this->view($template_name, $vars);
        $this->view('admin/layouts/footer', $vars);
    endif;
    }
}
?>
