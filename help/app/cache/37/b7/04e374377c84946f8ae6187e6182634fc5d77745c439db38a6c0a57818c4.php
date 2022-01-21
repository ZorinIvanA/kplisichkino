<?php

/* client.navbar.view.tmpl */
class __TwigTemplate_37b704e374377c84946f8ae6187e6182634fc5d77745c439db38a6c0a57818c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wrapper\">

               <header class=\"main-header\">
             <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["index_page"]) ? $context["index_page"] : null), "html", null, true);
        echo "\" class=\"logo\">
            
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["img_logo_small"]) ? $context["img_logo_small"] : null), "html", null, true);
        echo "\">
                 ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo "
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["EXT_toggle_nav"]) ? $context["EXT_toggle_nav"] : null), "html", null, true);
        echo "</span>
          </a>
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">


";
        // line 20
        if (((isset($context["main_portal_active"]) ? $context["main_portal_active"] : null) == "true")) {
            // line 21
            echo "<li class=\"dropdown messages-menu\">
<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["PORTAL_title"]) ? $context["PORTAL_title"] : null), "html", null, true);
            echo "</a>
</li>
";
        }
        // line 25
        echo "
                    
                    
                         
                        
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"glyphicon glyphicon-user\"></i>
                                <span>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["namemy"]) ? $context["namemy"] : null), "html", null, true);
        echo " <i class=\"caret\"></i></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header bg-light-blue\">
                                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["usr_img"]) ? $context["usr_img"] : null), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                                    <p>
                                        ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["usr_fio"]) ? $context["usr_fio"] : null), "html", null, true);
        echo "
                                        <small>";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["usr_posada"]) ? $context["usr_posada"] : null), "html", null, true);
        echo "</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                    
                                        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "profile\" class=\"btn btn-default btn-flat\"> <i class=\"fa fa-user\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_profile"]) ? $context["NAVBAR_profile"] : null), "html", null, true);
        echo "</a>
                                    </div>
                                    <div class=\"pull-right\">
                                    
                                        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "logout\" class=\"btn btn-default btn-flat\"> <i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_logout"]) ? $context["NAVBAR_logout"] : null), "html", null, true);
        echo "</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        
        <div class=\"\">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <!-- Sidebar user panel -->
                    <div class=\"user-panel\">
                        <div class=\"pull-left image\">
                            <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["usr_img"]) ? $context["usr_img"] : null), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                        </div>
                        <div class=\"pull-left info\">
                            <p>";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["EXT_hello"]) ? $context["EXT_hello"] : null), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["usr_name"]) ? $context["usr_name"] : null), "html", null, true);
        echo "</p>

                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "list\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input name=\"t\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["LIST_find_button"]) ? $context["LIST_find_button"] : null), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["LIST_find_ph"]) ? $context["LIST_find_ph"] : null), "html", null, true);
        echo "\"/>
                            <span class=\"input-group-btn\">
                                <button type='submit' name='find' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    
                    
                    
                    
                    <ul class=\"sidebar-menu\">
                        <li ";
        // line 99
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "dashboard")) {
            echo " class=\"active\" ";
        }
        echo " >
                            <a  href=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "dashboard\">
                                <i class=\"fa fa-dashboard\"></i> <span>";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["DASHBOARD_TITLE"]) ? $context["DASHBOARD_TITLE"] : null), "html", null, true);
        echo "</span>
                            </a>
                        </li>
                        
                        <li ";
        // line 105
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "create")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "create\"><i class=\"fa fa-tag\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_create_ticket"]) ? $context["NAVBAR_create_ticket"] : null), "html", null, true);
        echo "</a></li>
                        
                 
                        
                                               
                        
                        
            <li ";
        // line 112
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "list")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "list\"><i class=\"fa fa-list-alt\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_list_ticket"]) ? $context["NAVBAR_list_ticket"] : null), "html", null, true);
        echo " ";
        echo (isset($context["newtickets"]) ? $context["newtickets"] : null);
        echo "</a></li>
            
            
            

            <li ";
        // line 117
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "messages")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "messages\"><i class=\"fa fa-comments\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["MESSAGES_navbar"]) ? $context["MESSAGES_navbar"] : null), "html", null, true);
        echo " </a></li>
            
            
            
            
            <li ";
        // line 122
        if (((isset($context["cur_file_name"]) ? $context["cur_file_name"] : null) == "helper")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
        echo "helper\"><i class=\"fa fa-globe\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["NAVBAR_helper"]) ? $context["NAVBAR_helper"] : null), "html", null, true);
        echo "</a></li>
            
                                                
                        
                        
                        
                        
                                            </ul>
                </section>
                <!-- /.sidebar -->
            </aside>


            <!-- Right side column. Contains the navbar and content of the page -->
<div class=\"content-wrapper\" >
<div class=\"main_i\" style=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["style_hide"]) ? $context["style_hide"] : null), "html", null, true);
        echo "\">";
    }

    public function getTemplateName()
    {
        return "client.navbar.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 137,  243 => 122,  229 => 117,  213 => 112,  197 => 105,  190 => 101,  186 => 100,  180 => 99,  162 => 86,  157 => 84,  146 => 78,  140 => 75,  116 => 56,  107 => 52,  95 => 43,  91 => 42,  86 => 40,  78 => 35,  66 => 25,  58 => 22,  55 => 21,  53 => 20,  44 => 14,  35 => 8,  31 => 7,  24 => 4,  19 => 1,);
    }
}
