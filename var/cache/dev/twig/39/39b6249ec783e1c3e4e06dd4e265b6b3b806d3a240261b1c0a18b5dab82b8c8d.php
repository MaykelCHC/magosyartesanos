<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_650d3d43844d2884a3503a922d77493ee28ab7946dee2d36d94674572dfb3f7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'pagescript' => [$this, 'block_pagescript'],
            'body' => [$this, 'block_body'],
            'page' => [$this, 'block_page'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 11
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "</head>


";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 1328
        echo "

</html>






";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenidos";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- daterange picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">

        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
        <!-- overlayScrollbars -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">

        <!-- Google Font: Source Sans Pro -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!-- overlayScrollbars -->
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
        <!-- date-range-picker -->
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-mapael/maps/usa_states.min.js"), "html", null, true);
        echo "\"></script>
        <!-- ChartJS -->
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

        <!-- PAGE SCRIPTS -->
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/pages/dashboard2.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 55
        $this->displayBlock('pagescript', $context, $blocks);
        // line 57
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_pagescript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagescript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagescript"));

        // line 56
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "    <body class=\"hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
    <div class=\"wrapper\">
        <!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
            <!-- Left navbar links -->
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
                </li>

                <li>
                    <a href=\"#\" class=\"brand-link\">
                        <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/MagosArtesanos.png"), "html", null, true);
        echo "\" alt=\"Logo Sitio\"
                             class=\"brand-image\">

                    </a>
                </li>


            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                        <i class=\"fa fa-sign-out-alt\"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
            <!-- Brand Logo -->
            <a href=\"#\" class=\"brand-link\">
                <span class=\"brand-text font-weight-light\"><marquee>Magos y Artesanos</marquee></span>
            </a>

            <!-- Sidebar -->
            <div class=\"sidebar\">
                <!-- Sidebar user panel (optional) -->
                <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    <div class=\"image\">
                        <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/usuarioanonimo.png"), "html", null, true);
        echo "\" style=\"background-color: white;\"
                             class=\"img-circle elevation-2\"
                             alt=\"User Image\">
                    </div>
                    <div class=\"info\">
                        <a href=\"#\" class=\"d-block\">";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["nombrecliente"]) || array_key_exists("nombrecliente", $context) ? $context["nombrecliente"] : (function () { throw new RuntimeError('Variable "nombrecliente" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\"
                        data-accordion=\"false\">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        ";
        // line 119
        if ((0 === twig_compare((isset($context["resumen"]) || array_key_exists("resumen", $context) ? $context["resumen"] : (function () { throw new RuntimeError('Variable "resumen" does not exist.', 119, $this->source); })()), 1))) {
            // line 120
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                    <p>
                                        Resumen
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 129
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 130
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resumen");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                    <p>
                                        Resumen
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 138
        echo "                        ";
        if ((0 === twig_compare((isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 138, $this->source); })()), 1))) {
            // line 139
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 140
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ranking_usuarios");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-star\"></i>
                                    <p>
                                        Ranking de Usuarios
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 148
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 149
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ranking_usuarios");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-star\"></i>
                                    <p>
                                        Ranking de Usuarios
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 157
        echo "                        ";
        if ((0 === twig_compare((isset($context["historial"]) || array_key_exists("historial", $context) ? $context["historial"] : (function () { throw new RuntimeError('Variable "historial" does not exist.', 157, $this->source); })()), 1))) {
            // line 158
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 159
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historial_pagos");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-credit-card\"></i>
                                    <p>
                                        Historial de Pagos
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 167
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 168
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historial_pagos");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-credit-card\"></i>
                                    <p>
                                        Historial de Pagos
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 176
        echo "                        ";
        if ((0 === twig_compare((isset($context["royalties"]) || array_key_exists("royalties", $context) ? $context["royalties"] : (function () { throw new RuntimeError('Variable "royalties" does not exist.', 176, $this->source); })()), 1))) {
            // line 177
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 178
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_oyalties_acumulados");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-tree\"></i>
                                    <p>
                                        Royalties Acumulados
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 186
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 187
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_r_oyalties_acumulados");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-tree\"></i>
                                    <p>
                                        Royalties Acumulados
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 195
        echo "                        ";
        if ((0 === twig_compare((isset($context["servicioacum"]) || array_key_exists("servicioacum", $context) ? $context["servicioacum"] : (function () { throw new RuntimeError('Variable "servicioacum" does not exist.', 195, $this->source); })()), 1))) {
            // line 196
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 197
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_royalties_acum_servicio");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-tree\"></i>
                                    <p>
                                        Royalties Acumulados por Servicio
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 205
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 206
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_royalties_acum_servicio");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-tree\"></i>
                                    <p>
                                        Royalties Acumulados por Servicio
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 214
        echo "                        ";
        if ((0 === twig_compare((isset($context["ventas"]) || array_key_exists("ventas", $context) ? $context["ventas"] : (function () { throw new RuntimeError('Variable "ventas" does not exist.', 214, $this->source); })()), 1))) {
            // line 215
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 216
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ventas");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-shopping-cart\"></i>
                                    <p>
                                        Mis Ventas
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 224
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 225
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ventas");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-shopping-cart\"></i>
                                    <p>
                                        Mis Ventas
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 233
        echo "                        ";
        if ((0 === twig_compare((isset($context["asignar"]) || array_key_exists("asignar", $context) ? $context["asignar"] : (function () { throw new RuntimeError('Variable "asignar" does not exist.', 233, $this->source); })()), 1))) {
            // line 234
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 235
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignar_producto");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fa fa-list-alt\"></i>
                                    <p>
                                        Asignar Productos a Usuarios
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 243
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 244
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignar_producto");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fa fa-list-alt\"></i>
                                    <p>
                                        Asignar Productos a Usuarios
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 252
        echo "                        ";
        if ((0 === twig_compare((isset($context["recogida"]) || array_key_exists("recogida", $context) ? $context["recogida"] : (function () { throw new RuntimeError('Variable "recogida" does not exist.', 252, $this->source); })()), 1))) {
            // line 253
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 254
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                    <p>
                                        Solicitudes de Recogidas
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 262
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 263
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                    <p>
                                        Solicitudes de Recogidas
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 271
        echo "                        ";
        if ((0 === twig_compare((isset($context["usuar"]) || array_key_exists("usuar", $context) ? $context["usuar"] : (function () { throw new RuntimeError('Variable "usuar" does not exist.', 271, $this->source); })()), 1))) {
            // line 272
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 273
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-users\"></i>
                                    <p>
                                        Gestionar Usuarios
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 281
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 282
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-users\"></i>
                                    <p>
                                        Gestionar Usuarios
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 290
        echo "                        ";
        if ((0 === twig_compare((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 290, $this->source); })()), 1))) {
            // line 291
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 292
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-copy\"></i>
                                    <p>
                                        Gestionar Productos
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 300
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 301
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-copy\"></i>
                                    <p>
                                        Gestionar Productos
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 309
        echo "                        ";
        if ((0 === twig_compare((isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 309, $this->source); })()), 1))) {
            // line 310
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 311
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicios_index");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-wrench\"></i>
                                    <p>
                                        Gestionar Servicios
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 319
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 320
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicios_index");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-wrench\"></i>
                                    <p>
                                        Gestionar Servicios
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 328
        echo "                        ";
        if ((0 === twig_compare((isset($context["buy"]) || array_key_exists("buy", $context) ? $context["buy"] : (function () { throw new RuntimeError('Variable "buy" does not exist.', 328, $this->source); })()), 1))) {
            // line 329
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 330
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formade_pago_index");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fa fa-credit-card\"></i>
                                    <p>
                                        Gestionar Forma de Pago
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 338
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 339
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formade_pago_index");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fa fa-credit-card\"></i>
                                    <p>
                                        Gestionar Forma de Pago
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 347
        echo "                        ";
        if ((0 === twig_compare((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 347, $this->source); })()), 1))) {
            // line 348
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 349
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_producto_index");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-table\"></i>
                                    <p>
                                        Gestionar Venta por Producto
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 357
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 358
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_producto_index");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-table\"></i>
                                    <p>
                                        Gestionar Venta por Producto
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 366
        echo "                        ";
        if ((0 === twig_compare((isset($context["vs"]) || array_key_exists("vs", $context) ? $context["vs"] : (function () { throw new RuntimeError('Variable "vs" does not exist.', 366, $this->source); })()), 1))) {
            // line 367
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 368
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_servicio_index");
            echo "\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-table\"></i>
                                    <p>
                                        Gestionar Venta por Servicio
                                    </p>
                                </a>
                            </li>
                        ";
        } else {
            // line 376
            echo "                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
            // line 377
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venta_servicio_index");
            echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-table\"></i>
                                    <p>
                                        Gestionar Venta por Servicio
                                    </p>
                                </a>
                            </li>
                        ";
        }
        // line 385
        echo "                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        ";
        // line 391
        $this->displayBlock('page', $context, $blocks);
        // line 1314
        echo "        <!-- Control Sidebar -->
        <aside class=\"control-sidebar control-sidebar-dark\">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class=\"main-footer\">
            <strong>Copyright &copy; 2021 </strong> Todos los Derechos Reservados.
        </footer>
    </div>
    <!-- ./wrapper -->
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 391
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 392
        echo "            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">

                <!-- Content Header (Page header) -->
                <div class=\"content-header\">
                    <div class=\"container-fluid\">

                        <div class=\"row mb-2\">
                            <div class=\"col-sm-6\">
                                <h1 class=\"m-0 text-dark\">Dashboard v2</h1>
                            </div><!-- /.col -->
                            <div class=\"col-sm-6\">
                                <ol class=\"breadcrumb float-sm-right\">
                                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                    <li class=\"breadcrumb-item active\">Dashboard v2</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class=\"content\">
                    <div class=\"container-fluid\">
                        <!-- Info boxes -->
                        <div class=\"row\">
                            <div class=\"col-12 col-sm-6 col-md-3\">
                                <div class=\"info-box\">
                                    <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-cog\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">CPU Traffic</span>
                                        <span class=\"info-box-number\">
                  10
                  <small>%</small>
                </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class=\"col-12 col-sm-6 col-md-3\">
                                <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-danger elevation-1\"><i
                                                class=\"fas fa-thumbs-up\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Likes</span>
                                        <span class=\"info-box-number\">41,410</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <!-- fix for small devices only -->
                            <div class=\"clearfix hidden-md-up\"></div>

                            <div class=\"col-12 col-sm-6 col-md-3\">
                                <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-success elevation-1\"><i
                                                class=\"fas fa-shopping-cart\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Sales</span>
                                        <span class=\"info-box-number\">760</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class=\"col-12 col-sm-6 col-md-3\">
                                <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-warning elevation-1\"><i
                                                class=\"fas fa-users\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">New Members</span>
                                        <span class=\"info-box-number\">2,000</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h5 class=\"card-title\">Monthly Recap Report</h5>

                                        <div class=\"card-tools\">
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <div class=\"btn-group\">
                                                <button type=\"button\" class=\"btn btn-tool dropdown-toggle\"
                                                        data-toggle=\"dropdown\">
                                                    <i class=\"fas fa-wrench\"></i>
                                                </button>
                                                <div class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                                                    <a href=\"#\" class=\"dropdown-item\">Action</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Another action</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Something else here</a>
                                                    <a class=\"dropdown-divider\"></a>
                                                    <a href=\"#\" class=\"dropdown-item\">Separated link</a>
                                                </div>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-8\">
                                                <p class=\"text-center\">
                                                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                                </p>

                                                <div class=\"chart\">
                                                    <!-- Sales Chart Canvas -->
                                                    <canvas id=\"salesChart\" height=\"180\"
                                                            style=\"height: 180px;\"></canvas>
                                                </div>
                                                <!-- /.chart-responsive -->
                                            </div>
                                            <!-- /.col -->
                                            <div class=\"col-md-4\">
                                                <p class=\"text-center\">
                                                    <strong>Goal Completion</strong>
                                                </p>

                                                <div class=\"progress-group\">
                                                    Add Products to Cart
                                                    <span class=\"float-right\"><b>160</b>/200</span>
                                                    <div class=\"progress progress-sm\">
                                                        <div class=\"progress-bar bg-primary\" style=\"width: 80%\"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->

                                                <div class=\"progress-group\">
                                                    Complete Purchase
                                                    <span class=\"float-right\"><b>310</b>/400</span>
                                                    <div class=\"progress progress-sm\">
                                                        <div class=\"progress-bar bg-danger\" style=\"width: 75%\"></div>
                                                    </div>
                                                </div>

                                                <!-- /.progress-group -->
                                                <div class=\"progress-group\">
                                                    <span class=\"progress-text\">Visit Premium Page</span>
                                                    <span class=\"float-right\"><b>480</b>/800</span>
                                                    <div class=\"progress progress-sm\">
                                                        <div class=\"progress-bar bg-success\" style=\"width: 60%\"></div>
                                                    </div>
                                                </div>

                                                <!-- /.progress-group -->
                                                <div class=\"progress-group\">
                                                    Send Inquiries
                                                    <span class=\"float-right\"><b>250</b>/500</span>
                                                    <div class=\"progress progress-sm\">
                                                        <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- ./card-body -->
                                    <div class=\"card-footer\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-6\">
                                                <div class=\"description-block border-right\">
                                                    <span class=\"description-percentage text-success\"><i
                                                                class=\"fas fa-caret-up\"></i> 17%</span>
                                                    <h5 class=\"description-header\">\$35,210.43</h5>
                                                    <span class=\"description-text\">TOTAL REVENUE</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class=\"col-sm-3 col-6\">
                                                <div class=\"description-block border-right\">
                                                    <span class=\"description-percentage text-warning\"><i
                                                                class=\"fas fa-caret-left\"></i> 0%</span>
                                                    <h5 class=\"description-header\">\$10,390.90</h5>
                                                    <span class=\"description-text\">TOTAL COST</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class=\"col-sm-3 col-6\">
                                                <div class=\"description-block border-right\">
                                                    <span class=\"description-percentage text-success\"><i
                                                                class=\"fas fa-caret-up\"></i> 20%</span>
                                                    <h5 class=\"description-header\">\$24,813.53</h5>
                                                    <span class=\"description-text\">TOTAL PROFIT</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class=\"col-sm-3 col-6\">
                                                <div class=\"description-block\">
                                                    <span class=\"description-percentage text-danger\"><i
                                                                class=\"fas fa-caret-down\"></i> 18%</span>
                                                    <h5 class=\"description-header\">1200</h5>
                                                    <span class=\"description-text\">GOAL COMPLETIONS</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Main row -->
                        <div class=\"row\">
                            <!-- Left col -->
                            <div class=\"col-md-8\">
                                <!-- MAP & BOX PANE -->
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">US-Visitors Report</h3>

                                        <div class=\"card-tools\">
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body p-0\">
                                        <div class=\"d-md-flex\">
                                            <div class=\"p-1 flex-fill\" style=\"overflow: hidden\">
                                                <!-- Map will be created here -->
                                                <div id=\"world-map-markers\" style=\"height: 325px; overflow: hidden\">
                                                    <div class=\"map\"></div>
                                                </div>
                                            </div>
                                            <div class=\"card-pane-right bg-success pt-2 pb-2 pl-4 pr-4\">
                                                <div class=\"description-block mb-4\">
                                                    <div class=\"sparkbar pad\" data-color=\"#fff\">90,70,90,70,75,80,70
                                                    </div>
                                                    <h5 class=\"description-header\">8390</h5>
                                                    <span class=\"description-text\">Visits</span>
                                                </div>
                                                <!-- /.description-block -->
                                                <div class=\"description-block mb-4\">
                                                    <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63
                                                    </div>
                                                    <h5 class=\"description-header\">30%</h5>
                                                    <span class=\"description-text\">Referrals</span>
                                                </div>
                                                <!-- /.description-block -->
                                                <div class=\"description-block\">
                                                    <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63
                                                    </div>
                                                    <h5 class=\"description-header\">70%</h5>
                                                    <span class=\"description-text\">Organic</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div><!-- /.card-pane-right -->
                                        </div><!-- /.d-md-flex -->
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <!-- DIRECT CHAT -->
                                        <div class=\"card direct-chat direct-chat-warning\">
                                            <div class=\"card-header\">
                                                <h3 class=\"card-title\">Direct Chat</h3>

                                                <div class=\"card-tools\">
                                                    <span data-toggle=\"tooltip\" title=\"3 New Messages\"
                                                          class=\"badge badge-warning\">3</span>
                                                    <button type=\"button\" class=\"btn btn-tool\"
                                                            data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-tool\" data-toggle=\"tooltip\"
                                                            title=\"Contacts\"
                                                            data-widget=\"chat-pane-toggle\">
                                                        <i class=\"fas fa-comments\"></i></button>
                                                    <button type=\"button\" class=\"btn btn-tool\"
                                                            data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class=\"card-body\">
                                                <!-- Conversations are loaded here -->
                                                <div class=\"direct-chat-messages\">
                                                    <!-- Message. Default to the left -->
                                                    <div class=\"direct-chat-msg\">
                                                        <div class=\"direct-chat-infos clearfix\">
                                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class=\"direct-chat-img\"
                                                             src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"message user image\">
                                                        <!-- /.direct-chat-img -->
                                                        <div class=\"direct-chat-text\">
                                                            Is this template really for free? That's unbelievable!
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                    <!-- Message to the right -->
                                                    <div class=\"direct-chat-msg right\">
                                                        <div class=\"direct-chat-infos clearfix\">
                                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class=\"direct-chat-img\"
                                                             src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"message user image\">
                                                        <!-- /.direct-chat-img -->
                                                        <div class=\"direct-chat-text\">
                                                            You better believe it!
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                    <!-- Message. Default to the left -->
                                                    <div class=\"direct-chat-msg\">
                                                        <div class=\"direct-chat-infos clearfix\">
                                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class=\"direct-chat-img\"
                                                             src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"message user image\">
                                                        <!-- /.direct-chat-img -->
                                                        <div class=\"direct-chat-text\">
                                                            Working with AdminLTE on a great new app! Wanna join?
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                    <!-- Message to the right -->
                                                    <div class=\"direct-chat-msg right\">
                                                        <div class=\"direct-chat-infos clearfix\">
                                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class=\"direct-chat-img\"
                                                             src=\"";
        // line 769
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"message user image\">
                                                        <!-- /.direct-chat-img -->
                                                        <div class=\"direct-chat-text\">
                                                            I would love to.
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                </div>
                                                <!--/.direct-chat-messages-->

                                                <!-- Contacts are loaded here -->
                                                <div class=\"direct-chat-contacts\">
                                                    <ul class=\"contacts-list\">
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"";
        // line 788
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\"
                                                                     alt=\"user\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Count Dracula
                                <small class=\"contacts-list-date float-right\">2/28/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">How have you been? I was...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"";
        // line 805
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user7-128x128.jpg"), "html", null, true);
        echo "\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Sarah Doe
                                <small class=\"contacts-list-date float-right\">2/23/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">I will be waiting for...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"";
        // line 821
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Nadia Jolie
                                <small class=\"contacts-list-date float-right\">2/20/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">I'll call you back at...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"";
        // line 837
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user5-128x128.jpg"), "html", null, true);
        echo "\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Nora S. Vans
                                <small class=\"contacts-list-date float-right\">2/10/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">Where is your new...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"";
        // line 853
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user6-128x128.jpg"), "html", null, true);
        echo "\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                John K.
                                <small class=\"contacts-list-date float-right\">1/27/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">Can I take a look at...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"";
        // line 869
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user8-128x128.jpg"), "html", null, true);
        echo "\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Kenneth M.
                                <small class=\"contacts-list-date float-right\">1/4/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">Never mind I found...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                    </ul>
                                                    <!-- /.contacts-list -->
                                                </div>
                                                <!-- /.direct-chat-pane -->
                                            </div>
                                            <!-- /.card-body -->
                                            <div class=\"card-footer\">
                                                <form action=\"#\" method=\"post\">
                                                    <div class=\"input-group\">
                                                        <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\"
                                                               class=\"form-control\">
                                                        <span class=\"input-group-append\">
                          <button type=\"button\" class=\"btn btn-warning\">Send</button>
                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.card-footer-->
                                        </div>
                                        <!--/.direct-chat -->
                                    </div>
                                    <!-- /.col -->

                                    <div class=\"col-md-6\">
                                        <!-- USERS LIST -->
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h3 class=\"card-title\">Latest Members</h3>

                                                <div class=\"card-tools\">
                                                    <span class=\"badge badge-danger\">8 New Members</span>
                                                    <button type=\"button\" class=\"btn btn-tool\"
                                                            data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-tool\"
                                                            data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class=\"card-body p-0\">
                                                <ul class=\"users-list clearfix\">
                                                    <li>
                                                        <img src=\"";
        // line 925
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                                                        <span class=\"users-list-date\">Today</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"";
        // line 931
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Norman</a>
                                                        <span class=\"users-list-date\">Yesterday</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"";
        // line 937
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Jane</a>
                                                        <span class=\"users-list-date\">12 Jan</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"";
        // line 943
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">John</a>
                                                        <span class=\"users-list-date\">12 Jan</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"";
        // line 949
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Alexander</a>
                                                        <span class=\"users-list-date\">13 Jan</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"";
        // line 955
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Sarah</a>
                                                        <span class=\"users-list-date\">14 Jan</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"";
        // line 961
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Nora</a>
                                                        <span class=\"users-list-date\">15 Jan</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"";
        // line 967
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Nadia</a>
                                                        <span class=\"users-list-date\">15 Jan</span>
                                                    </li>
                                                </ul>
                                                <!-- /.users-list -->
                                            </div>
                                            <!-- /.card-body -->
                                            <div class=\"card-footer text-center\">
                                                <a href=\"javascript:\">View All Users</a>
                                            </div>
                                            <!-- /.card-footer -->
                                        </div>
                                        <!--/.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- TABLE: LATEST ORDERS -->
                                <div class=\"card\">
                                    <div class=\"card-header border-transparent\">
                                        <h3 class=\"card-title\">Latest Orders</h3>

                                        <div class=\"card-tools\">
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table m-0\">
                                                <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Item</th>
                                                    <th>Status</th>
                                                    <th>Popularity</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><a href=\"#\">OR9842</a></td>
                                                    <td>Call of Duty IV</td>
                                                    <td><span class=\"badge badge-success\">Shipped</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">
                                                            90,80,90,-70,61,-83,63
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR1848</a></td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class=\"badge badge-warning\">Pending</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">
                                                            90,80,-90,70,61,-83,68
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR7429</a></td>
                                                    <td>iPhone 6 Plus</td>
                                                    <td><span class=\"badge badge-danger\">Delivered</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">
                                                            90,-80,90,70,-61,83,63
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR7429</a></td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class=\"badge badge-info\">Processing</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#00c0ef\" data-height=\"20\">
                                                            90,80,-90,70,-61,83,63
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR1848</a></td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class=\"badge badge-warning\">Pending</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">
                                                            90,80,-90,70,61,-83,68
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR7429</a></td>
                                                    <td>iPhone 6 Plus</td>
                                                    <td><span class=\"badge badge-danger\">Delivered</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">
                                                            90,-80,90,70,-61,83,63
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR9842</a></td>
                                                    <td>Call of Duty IV</td>
                                                    <td><span class=\"badge badge-success\">Shipped</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">
                                                            90,80,90,-70,61,-83,63
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class=\"card-footer clearfix\">
                                        <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-info float-left\">Place New
                                            Order</a>
                                        <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-secondary float-right\">View
                                            All Orders</a>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->

                            <div class=\"col-md-4\">
                                <!-- Info Boxes Style 2 -->
                                <div class=\"info-box mb-3 bg-warning\">
                                    <span class=\"info-box-icon\"><i class=\"fas fa-tag\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Inventory</span>
                                        <span class=\"info-box-number\">5,200</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <div class=\"info-box mb-3 bg-success\">
                                    <span class=\"info-box-icon\"><i class=\"far fa-heart\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Mentions</span>
                                        <span class=\"info-box-number\">92,050</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <div class=\"info-box mb-3 bg-danger\">
                                    <span class=\"info-box-icon\"><i class=\"fas fa-cloud-download-alt\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Downloads</span>
                                        <span class=\"info-box-number\">114,381</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <div class=\"info-box mb-3 bg-info\">
                                    <span class=\"info-box-icon\"><i class=\"far fa-comment\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Direct Messages</span>
                                        <span class=\"info-box-number\">163,921</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->

                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">Browser Usage</h3>

                                        <div class=\"card-tools\">
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"><i
                                                        class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i
                                                        class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-8\">
                                                <div class=\"chart-responsive\">
                                                    <canvas id=\"pieChart\" height=\"150\"></canvas>
                                                </div>
                                                <!-- ./chart-responsive -->
                                            </div>
                                            <!-- /.col -->
                                            <div class=\"col-md-4\">
                                                <ul class=\"chart-legend clearfix\">
                                                    <li><i class=\"far fa-circle text-danger\"></i> Chrome</li>
                                                    <li><i class=\"far fa-circle text-success\"></i> IE</li>
                                                    <li><i class=\"far fa-circle text-warning\"></i> FireFox</li>
                                                    <li><i class=\"far fa-circle text-info\"></i> Safari</li>
                                                    <li><i class=\"far fa-circle text-primary\"></i> Opera</li>
                                                    <li><i class=\"far fa-circle text-secondary\"></i> Navigator</li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class=\"card-footer bg-white p-0\">
                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    United States of America
                                                    <span class=\"float-right text-danger\">
                        <i class=\"fas fa-arrow-down text-sm\"></i>
                        12%</span>
                                                </a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    India
                                                    <span class=\"float-right text-success\">
                        <i class=\"fas fa-arrow-up text-sm\"></i> 4%
                      </span>
                                                </a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    China
                                                    <span class=\"float-right text-warning\">
                        <i class=\"fas fa-arrow-left text-sm\"></i> 0%
                      </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.footer -->
                                </div>
                                <!-- /.card -->

                                <!-- PRODUCT LIST -->
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">Recently Added Products</h3>

                                        <div class=\"card-tools\">
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body p-0\">
                                        <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                                            <li class=\"item\">
                                                <div class=\"product-img\">
                                                    <img src=\"";
        // line 1234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/default-150x150.png"), "html", null, true);
        echo "\"
                                                         alt=\"Product Image\"
                                                         class=\"img-size-50\">
                                                </div>
                                                <div class=\"product-info\">
                                                    <a href=\"javascript:void(0)\" class=\"product-title\">Samsung TV
                                                        <span class=\"badge badge-warning float-right\">\$1800</span></a>
                                                    <span class=\"product-description\">
                        Samsung 32\" 1080p 60Hz LED Smart HDTV.
                      </span>
                                                </div>
                                            </li>
                                            <!-- /.item -->
                                            <li class=\"item\">
                                                <div class=\"product-img\">
                                                    <img src=\"";
        // line 1249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/default-150x150.png"), "html", null, true);
        echo "\"
                                                         alt=\"Product Image\"
                                                         class=\"img-size-50\">
                                                </div>
                                                <div class=\"product-info\">
                                                    <a href=\"javascript:void(0)\" class=\"product-title\">Bicycle
                                                        <span class=\"badge badge-info float-right\">\$700</span></a>
                                                    <span class=\"product-description\">
                        26\" Mongoose Dolomite Men's 7-speed, Navy Blue.
                      </span>
                                                </div>
                                            </li>
                                            <!-- /.item -->
                                            <li class=\"item\">
                                                <div class=\"product-img\">
                                                    <img src=\"";
        // line 1264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/default-150x150.png"), "html", null, true);
        echo "\"
                                                         alt=\"Product Image\"
                                                         class=\"img-size-50\">
                                                </div>
                                                <div class=\"product-info\">
                                                    <a href=\"javascript:void(0)\" class=\"product-title\">
                                                        Xbox One <span class=\"badge badge-danger float-right\">
                        \$350
                      </span>
                                                    </a>
                                                    <span class=\"product-description\">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                      </span>
                                                </div>
                                            </li>
                                            <!-- /.item -->
                                            <li class=\"item\">
                                                <div class=\"product-img\">
                                                    <img src=\"";
        // line 1282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/default-150x150.png"), "html", null, true);
        echo "\"
                                                         alt=\"Product Image\"
                                                         class=\"img-size-50\">
                                                </div>
                                                <div class=\"product-info\">
                                                    <a href=\"javascript:void(0)\" class=\"product-title\">PlayStation 4
                                                        <span class=\"badge badge-success float-right\">\$399</span></a>
                                                    <span class=\"product-description\">
                        PlayStation 4 500GB Console (PS4)
                      </span>
                                                </div>
                                            </li>
                                            <!-- /.item -->
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class=\"card-footer text-center\">
                                        <a href=\"javascript:void(0)\" class=\"uppercase\">View All Products</a>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div><!--/. container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1780 => 1282,  1759 => 1264,  1741 => 1249,  1723 => 1234,  1453 => 967,  1444 => 961,  1435 => 955,  1426 => 949,  1417 => 943,  1408 => 937,  1399 => 931,  1390 => 925,  1331 => 869,  1312 => 853,  1293 => 837,  1274 => 821,  1255 => 805,  1235 => 788,  1213 => 769,  1192 => 751,  1171 => 733,  1150 => 715,  825 => 392,  815 => 391,  792 => 1314,  790 => 391,  782 => 385,  771 => 377,  768 => 376,  757 => 368,  754 => 367,  751 => 366,  740 => 358,  737 => 357,  726 => 349,  723 => 348,  720 => 347,  709 => 339,  706 => 338,  695 => 330,  692 => 329,  689 => 328,  678 => 320,  675 => 319,  664 => 311,  661 => 310,  658 => 309,  647 => 301,  644 => 300,  633 => 292,  630 => 291,  627 => 290,  616 => 282,  613 => 281,  602 => 273,  599 => 272,  596 => 271,  585 => 263,  582 => 262,  571 => 254,  568 => 253,  565 => 252,  554 => 244,  551 => 243,  540 => 235,  537 => 234,  534 => 233,  523 => 225,  520 => 224,  509 => 216,  506 => 215,  503 => 214,  492 => 206,  489 => 205,  478 => 197,  475 => 196,  472 => 195,  461 => 187,  458 => 186,  447 => 178,  444 => 177,  441 => 176,  430 => 168,  427 => 167,  416 => 159,  413 => 158,  410 => 157,  399 => 149,  396 => 148,  385 => 140,  382 => 139,  379 => 138,  368 => 130,  365 => 129,  354 => 121,  351 => 120,  349 => 119,  336 => 109,  328 => 104,  305 => 84,  292 => 74,  278 => 62,  268 => 61,  258 => 56,  248 => 55,  238 => 57,  236 => 55,  232 => 54,  226 => 51,  221 => 49,  217 => 48,  213 => 47,  209 => 46,  202 => 42,  196 => 39,  191 => 37,  186 => 35,  181 => 33,  176 => 31,  172 => 29,  162 => 28,  147 => 22,  142 => 20,  137 => 18,  131 => 15,  126 => 12,  116 => 11,  97 => 7,  78 => 1328,  76 => 61,  71 => 58,  69 => 28,  66 => 27,  63 => 11,  57 => 7,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>{% block title %}Bienvenidos{% endblock %}</title>
    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
    {% block stylesheets %}
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- daterange picker -->
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/daterangepicker/daterangepicker.css') }}\">

        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/fontawesome-free/css/all.min.css') }}\">
        <!-- overlayScrollbars -->
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"{{ asset('dist/css/adminlte.min.css') }}\">

        <!-- Google Font: Source Sans Pro -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
    {% endblock %}

    {% block javascripts %}
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src=\"{{ asset('plugins/jquery/jquery.min.js') }}\"></script>
        <!-- Bootstrap -->
        <script src=\"{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
        <!-- overlayScrollbars -->
        <script src=\"{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}\"></script>
        <!-- AdminLTE App -->
        <script src=\"{{ asset('dist/js/adminlte.js') }}\"></script>
        <!-- date-range-picker -->
        <script src=\"{{ asset('plugins/daterangepicker/daterangepicker.js') }}\"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src=\"{{ asset('dist/js/demo.js') }}\"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src=\"{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}\"></script>
        <script src=\"{{ asset('plugins/raphael/raphael.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}\"></script>
        <!-- ChartJS -->
        <script src=\"{{ asset('plugins/chart.js/Chart.min.js') }}\"></script>

        <!-- PAGE SCRIPTS -->
        <script src=\"{{ asset('dist/js/pages/dashboard2.js') }}\"></script>
        {% block pagescript %}
        {% endblock %}
    {% endblock %}
</head>


{% block body %}
    <body class=\"hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
    <div class=\"wrapper\">
        <!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
            <!-- Left navbar links -->
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
                </li>

                <li>
                    <a href=\"#\" class=\"brand-link\">
                        <img src=\"{{ asset('dist/img/MagosArtesanos.png') }}\" alt=\"Logo Sitio\"
                             class=\"brand-image\">

                    </a>
                </li>


            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"{{ path('app_logout') }}\">
                        <i class=\"fa fa-sign-out-alt\"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
            <!-- Brand Logo -->
            <a href=\"#\" class=\"brand-link\">
                <span class=\"brand-text font-weight-light\"><marquee>Magos y Artesanos</marquee></span>
            </a>

            <!-- Sidebar -->
            <div class=\"sidebar\">
                <!-- Sidebar user panel (optional) -->
                <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    <div class=\"image\">
                        <img src=\"{{ asset('dist/img/usuarioanonimo.png') }}\" style=\"background-color: white;\"
                             class=\"img-circle elevation-2\"
                             alt=\"User Image\">
                    </div>
                    <div class=\"info\">
                        <a href=\"#\" class=\"d-block\">{{ nombrecliente }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\"
                        data-accordion=\"false\">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        {% if resumen == 1 %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_resumen') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                    <p>
                                        Resumen
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_resumen') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                                    <p>
                                        Resumen
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if ranking == 1 %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_ranking_usuarios') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-star\"></i>
                                    <p>
                                        Ranking de Usuarios
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_ranking_usuarios') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-star\"></i>
                                    <p>
                                        Ranking de Usuarios
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if historial == 1 %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_historial_pagos') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-credit-card\"></i>
                                    <p>
                                        Historial de Pagos
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_historial_pagos') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-credit-card\"></i>
                                    <p>
                                        Historial de Pagos
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if royalties == 1 %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_r_oyalties_acumulados') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-tree\"></i>
                                    <p>
                                        Royalties Acumulados
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_r_oyalties_acumulados') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-tree\"></i>
                                    <p>
                                        Royalties Acumulados
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if servicioacum == 1 %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_royalties_acum_servicio') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-tree\"></i>
                                    <p>
                                        Royalties Acumulados por Servicio
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_royalties_acum_servicio') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-tree\"></i>
                                    <p>
                                        Royalties Acumulados por Servicio
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if ventas == 1 %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_ventas') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-shopping-cart\"></i>
                                    <p>
                                        Mis Ventas
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_ventas') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-shopping-cart\"></i>
                                    <p>
                                        Mis Ventas
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if asignar == 1 %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_asignar_producto') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fa fa-list-alt\"></i>
                                    <p>
                                        Asignar Productos a Usuarios
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_asignar_producto') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fa fa-list-alt\"></i>
                                    <p>
                                        Asignar Productos a Usuarios
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if recogida == 1 %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_solicitar_recogida_index') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                    <p>
                                        Solicitudes de Recogidas
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_solicitar_recogida_index') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fas fa-paperclip\"></i>
                                    <p>
                                        Solicitudes de Recogidas
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if usuar == 1 %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_user_index') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-users\"></i>
                                    <p>
                                        Gestionar Usuarios
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_user_index') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-users\"></i>
                                    <p>
                                        Gestionar Usuarios
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if product == 1 %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_producto_index') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-copy\"></i>
                                    <p>
                                        Gestionar Productos
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_producto_index') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-copy\"></i>
                                    <p>
                                        Gestionar Productos
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if service == 1 %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_servicios_index') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-wrench\"></i>
                                    <p>
                                        Gestionar Servicios
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_servicios_index') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-wrench\"></i>
                                    <p>
                                        Gestionar Servicios
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if buy == 1 %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_formade_pago_index') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fa fa-credit-card\"></i>
                                    <p>
                                        Gestionar Forma de Pago
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_formade_pago_index') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fa fa-credit-card\"></i>
                                    <p>
                                        Gestionar Forma de Pago
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if vp == 1 %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_venta_producto_index') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-table\"></i>
                                    <p>
                                        Gestionar Venta por Producto
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_venta_producto_index') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-table\"></i>
                                    <p>
                                        Gestionar Venta por Producto
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                        {% if vs == 1 %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_venta_servicio_index') }}\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-table\"></i>
                                    <p>
                                        Gestionar Venta por Servicio
                                    </p>
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('app_venta_servicio_index') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-table\"></i>
                                    <p>
                                        Gestionar Venta por Servicio
                                    </p>
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        {% block page %}
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">

                <!-- Content Header (Page header) -->
                <div class=\"content-header\">
                    <div class=\"container-fluid\">

                        <div class=\"row mb-2\">
                            <div class=\"col-sm-6\">
                                <h1 class=\"m-0 text-dark\">Dashboard v2</h1>
                            </div><!-- /.col -->
                            <div class=\"col-sm-6\">
                                <ol class=\"breadcrumb float-sm-right\">
                                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                    <li class=\"breadcrumb-item active\">Dashboard v2</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class=\"content\">
                    <div class=\"container-fluid\">
                        <!-- Info boxes -->
                        <div class=\"row\">
                            <div class=\"col-12 col-sm-6 col-md-3\">
                                <div class=\"info-box\">
                                    <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-cog\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">CPU Traffic</span>
                                        <span class=\"info-box-number\">
                  10
                  <small>%</small>
                </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class=\"col-12 col-sm-6 col-md-3\">
                                <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-danger elevation-1\"><i
                                                class=\"fas fa-thumbs-up\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Likes</span>
                                        <span class=\"info-box-number\">41,410</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <!-- fix for small devices only -->
                            <div class=\"clearfix hidden-md-up\"></div>

                            <div class=\"col-12 col-sm-6 col-md-3\">
                                <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-success elevation-1\"><i
                                                class=\"fas fa-shopping-cart\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Sales</span>
                                        <span class=\"info-box-number\">760</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class=\"col-12 col-sm-6 col-md-3\">
                                <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-warning elevation-1\"><i
                                                class=\"fas fa-users\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">New Members</span>
                                        <span class=\"info-box-number\">2,000</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h5 class=\"card-title\">Monthly Recap Report</h5>

                                        <div class=\"card-tools\">
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <div class=\"btn-group\">
                                                <button type=\"button\" class=\"btn btn-tool dropdown-toggle\"
                                                        data-toggle=\"dropdown\">
                                                    <i class=\"fas fa-wrench\"></i>
                                                </button>
                                                <div class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                                                    <a href=\"#\" class=\"dropdown-item\">Action</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Another action</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Something else here</a>
                                                    <a class=\"dropdown-divider\"></a>
                                                    <a href=\"#\" class=\"dropdown-item\">Separated link</a>
                                                </div>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-8\">
                                                <p class=\"text-center\">
                                                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                                </p>

                                                <div class=\"chart\">
                                                    <!-- Sales Chart Canvas -->
                                                    <canvas id=\"salesChart\" height=\"180\"
                                                            style=\"height: 180px;\"></canvas>
                                                </div>
                                                <!-- /.chart-responsive -->
                                            </div>
                                            <!-- /.col -->
                                            <div class=\"col-md-4\">
                                                <p class=\"text-center\">
                                                    <strong>Goal Completion</strong>
                                                </p>

                                                <div class=\"progress-group\">
                                                    Add Products to Cart
                                                    <span class=\"float-right\"><b>160</b>/200</span>
                                                    <div class=\"progress progress-sm\">
                                                        <div class=\"progress-bar bg-primary\" style=\"width: 80%\"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->

                                                <div class=\"progress-group\">
                                                    Complete Purchase
                                                    <span class=\"float-right\"><b>310</b>/400</span>
                                                    <div class=\"progress progress-sm\">
                                                        <div class=\"progress-bar bg-danger\" style=\"width: 75%\"></div>
                                                    </div>
                                                </div>

                                                <!-- /.progress-group -->
                                                <div class=\"progress-group\">
                                                    <span class=\"progress-text\">Visit Premium Page</span>
                                                    <span class=\"float-right\"><b>480</b>/800</span>
                                                    <div class=\"progress progress-sm\">
                                                        <div class=\"progress-bar bg-success\" style=\"width: 60%\"></div>
                                                    </div>
                                                </div>

                                                <!-- /.progress-group -->
                                                <div class=\"progress-group\">
                                                    Send Inquiries
                                                    <span class=\"float-right\"><b>250</b>/500</span>
                                                    <div class=\"progress progress-sm\">
                                                        <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                                    </div>
                                                </div>
                                                <!-- /.progress-group -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- ./card-body -->
                                    <div class=\"card-footer\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-3 col-6\">
                                                <div class=\"description-block border-right\">
                                                    <span class=\"description-percentage text-success\"><i
                                                                class=\"fas fa-caret-up\"></i> 17%</span>
                                                    <h5 class=\"description-header\">\$35,210.43</h5>
                                                    <span class=\"description-text\">TOTAL REVENUE</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class=\"col-sm-3 col-6\">
                                                <div class=\"description-block border-right\">
                                                    <span class=\"description-percentage text-warning\"><i
                                                                class=\"fas fa-caret-left\"></i> 0%</span>
                                                    <h5 class=\"description-header\">\$10,390.90</h5>
                                                    <span class=\"description-text\">TOTAL COST</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class=\"col-sm-3 col-6\">
                                                <div class=\"description-block border-right\">
                                                    <span class=\"description-percentage text-success\"><i
                                                                class=\"fas fa-caret-up\"></i> 20%</span>
                                                    <h5 class=\"description-header\">\$24,813.53</h5>
                                                    <span class=\"description-text\">TOTAL PROFIT</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <!-- /.col -->
                                            <div class=\"col-sm-3 col-6\">
                                                <div class=\"description-block\">
                                                    <span class=\"description-percentage text-danger\"><i
                                                                class=\"fas fa-caret-down\"></i> 18%</span>
                                                    <h5 class=\"description-header\">1200</h5>
                                                    <span class=\"description-text\">GOAL COMPLETIONS</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Main row -->
                        <div class=\"row\">
                            <!-- Left col -->
                            <div class=\"col-md-8\">
                                <!-- MAP & BOX PANE -->
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">US-Visitors Report</h3>

                                        <div class=\"card-tools\">
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body p-0\">
                                        <div class=\"d-md-flex\">
                                            <div class=\"p-1 flex-fill\" style=\"overflow: hidden\">
                                                <!-- Map will be created here -->
                                                <div id=\"world-map-markers\" style=\"height: 325px; overflow: hidden\">
                                                    <div class=\"map\"></div>
                                                </div>
                                            </div>
                                            <div class=\"card-pane-right bg-success pt-2 pb-2 pl-4 pr-4\">
                                                <div class=\"description-block mb-4\">
                                                    <div class=\"sparkbar pad\" data-color=\"#fff\">90,70,90,70,75,80,70
                                                    </div>
                                                    <h5 class=\"description-header\">8390</h5>
                                                    <span class=\"description-text\">Visits</span>
                                                </div>
                                                <!-- /.description-block -->
                                                <div class=\"description-block mb-4\">
                                                    <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63
                                                    </div>
                                                    <h5 class=\"description-header\">30%</h5>
                                                    <span class=\"description-text\">Referrals</span>
                                                </div>
                                                <!-- /.description-block -->
                                                <div class=\"description-block\">
                                                    <div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63
                                                    </div>
                                                    <h5 class=\"description-header\">70%</h5>
                                                    <span class=\"description-text\">Organic</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div><!-- /.card-pane-right -->
                                        </div><!-- /.d-md-flex -->
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <!-- DIRECT CHAT -->
                                        <div class=\"card direct-chat direct-chat-warning\">
                                            <div class=\"card-header\">
                                                <h3 class=\"card-title\">Direct Chat</h3>

                                                <div class=\"card-tools\">
                                                    <span data-toggle=\"tooltip\" title=\"3 New Messages\"
                                                          class=\"badge badge-warning\">3</span>
                                                    <button type=\"button\" class=\"btn btn-tool\"
                                                            data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-tool\" data-toggle=\"tooltip\"
                                                            title=\"Contacts\"
                                                            data-widget=\"chat-pane-toggle\">
                                                        <i class=\"fas fa-comments\"></i></button>
                                                    <button type=\"button\" class=\"btn btn-tool\"
                                                            data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class=\"card-body\">
                                                <!-- Conversations are loaded here -->
                                                <div class=\"direct-chat-messages\">
                                                    <!-- Message. Default to the left -->
                                                    <div class=\"direct-chat-msg\">
                                                        <div class=\"direct-chat-infos clearfix\">
                                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class=\"direct-chat-img\"
                                                             src=\"{{ asset('dist/img/user1-128x128.jpg') }}\"
                                                             alt=\"message user image\">
                                                        <!-- /.direct-chat-img -->
                                                        <div class=\"direct-chat-text\">
                                                            Is this template really for free? That's unbelievable!
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                    <!-- Message to the right -->
                                                    <div class=\"direct-chat-msg right\">
                                                        <div class=\"direct-chat-infos clearfix\">
                                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class=\"direct-chat-img\"
                                                             src=\"{{ asset('dist/img/user3-128x128.jpg') }}\"
                                                             alt=\"message user image\">
                                                        <!-- /.direct-chat-img -->
                                                        <div class=\"direct-chat-text\">
                                                            You better believe it!
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                    <!-- Message. Default to the left -->
                                                    <div class=\"direct-chat-msg\">
                                                        <div class=\"direct-chat-infos clearfix\">
                                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class=\"direct-chat-img\"
                                                             src=\"{{ asset('dist/img/user1-128x128.jpg') }}\"
                                                             alt=\"message user image\">
                                                        <!-- /.direct-chat-img -->
                                                        <div class=\"direct-chat-text\">
                                                            Working with AdminLTE on a great new app! Wanna join?
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                    <!-- Message to the right -->
                                                    <div class=\"direct-chat-msg right\">
                                                        <div class=\"direct-chat-infos clearfix\">
                                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                                                        </div>
                                                        <!-- /.direct-chat-infos -->
                                                        <img class=\"direct-chat-img\"
                                                             src=\"{{ asset('dist/img/user3-128x128.jpg') }}\"
                                                             alt=\"message user image\">
                                                        <!-- /.direct-chat-img -->
                                                        <div class=\"direct-chat-text\">
                                                            I would love to.
                                                        </div>
                                                        <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                </div>
                                                <!--/.direct-chat-messages-->

                                                <!-- Contacts are loaded here -->
                                                <div class=\"direct-chat-contacts\">
                                                    <ul class=\"contacts-list\">
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"{{ asset('dist/img/user1-128x128.jpg') }}\"
                                                                     alt=\"user\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Count Dracula
                                <small class=\"contacts-list-date float-right\">2/28/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">How have you been? I was...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"{{ asset('dist/img/user7-128x128.jpg') }}\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Sarah Doe
                                <small class=\"contacts-list-date float-right\">2/23/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">I will be waiting for...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"{{ asset('dist/img/user3-128x128.jpg') }}\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Nadia Jolie
                                <small class=\"contacts-list-date float-right\">2/20/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">I'll call you back at...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"{{ asset('dist/img/user5-128x128.jpg') }}\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Nora S. Vans
                                <small class=\"contacts-list-date float-right\">2/10/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">Where is your new...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"{{ asset('dist/img/user6-128x128.jpg') }}\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                John K.
                                <small class=\"contacts-list-date float-right\">1/27/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">Can I take a look at...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                        <li>
                                                            <a href=\"#\">
                                                                <img class=\"contacts-list-img\"
                                                                     src=\"{{ asset('dist/img/user8-128x128.jpg') }}\">

                                                                <div class=\"contacts-list-info\">
                              <span class=\"contacts-list-name\">
                                Kenneth M.
                                <small class=\"contacts-list-date float-right\">1/4/2015</small>
                              </span>
                                                                    <span class=\"contacts-list-msg\">Never mind I found...</span>
                                                                </div>
                                                                <!-- /.contacts-list-info -->
                                                            </a>
                                                        </li>
                                                        <!-- End Contact Item -->
                                                    </ul>
                                                    <!-- /.contacts-list -->
                                                </div>
                                                <!-- /.direct-chat-pane -->
                                            </div>
                                            <!-- /.card-body -->
                                            <div class=\"card-footer\">
                                                <form action=\"#\" method=\"post\">
                                                    <div class=\"input-group\">
                                                        <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\"
                                                               class=\"form-control\">
                                                        <span class=\"input-group-append\">
                          <button type=\"button\" class=\"btn btn-warning\">Send</button>
                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.card-footer-->
                                        </div>
                                        <!--/.direct-chat -->
                                    </div>
                                    <!-- /.col -->

                                    <div class=\"col-md-6\">
                                        <!-- USERS LIST -->
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h3 class=\"card-title\">Latest Members</h3>

                                                <div class=\"card-tools\">
                                                    <span class=\"badge badge-danger\">8 New Members</span>
                                                    <button type=\"button\" class=\"btn btn-tool\"
                                                            data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-tool\"
                                                            data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class=\"card-body p-0\">
                                                <ul class=\"users-list clearfix\">
                                                    <li>
                                                        <img src=\"{{ asset('dist/img/user1-128x128.jpg') }}\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
                                                        <span class=\"users-list-date\">Today</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"{{ asset('dist/img/user1-128x128.jpg') }}\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Norman</a>
                                                        <span class=\"users-list-date\">Yesterday</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"{{ asset('dist/img/user1-128x128.jpg') }}\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Jane</a>
                                                        <span class=\"users-list-date\">12 Jan</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"{{ asset('dist/img/user1-128x128.jpg') }}\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">John</a>
                                                        <span class=\"users-list-date\">12 Jan</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"{{ asset('dist/img/user1-128x128.jpg') }}\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Alexander</a>
                                                        <span class=\"users-list-date\">13 Jan</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"{{ asset('dist/img/user1-128x128.jpg') }}\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Sarah</a>
                                                        <span class=\"users-list-date\">14 Jan</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"{{ asset('dist/img/user1-128x128.jpg') }}\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Nora</a>
                                                        <span class=\"users-list-date\">15 Jan</span>
                                                    </li>
                                                    <li>
                                                        <img src=\"{{ asset('dist/img/user1-128x128.jpg') }}\"
                                                             alt=\"User Image\">
                                                        <a class=\"users-list-name\" href=\"#\">Nadia</a>
                                                        <span class=\"users-list-date\">15 Jan</span>
                                                    </li>
                                                </ul>
                                                <!-- /.users-list -->
                                            </div>
                                            <!-- /.card-body -->
                                            <div class=\"card-footer text-center\">
                                                <a href=\"javascript:\">View All Users</a>
                                            </div>
                                            <!-- /.card-footer -->
                                        </div>
                                        <!--/.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- TABLE: LATEST ORDERS -->
                                <div class=\"card\">
                                    <div class=\"card-header border-transparent\">
                                        <h3 class=\"card-title\">Latest Orders</h3>

                                        <div class=\"card-tools\">
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table m-0\">
                                                <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Item</th>
                                                    <th>Status</th>
                                                    <th>Popularity</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><a href=\"#\">OR9842</a></td>
                                                    <td>Call of Duty IV</td>
                                                    <td><span class=\"badge badge-success\">Shipped</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">
                                                            90,80,90,-70,61,-83,63
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR1848</a></td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class=\"badge badge-warning\">Pending</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">
                                                            90,80,-90,70,61,-83,68
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR7429</a></td>
                                                    <td>iPhone 6 Plus</td>
                                                    <td><span class=\"badge badge-danger\">Delivered</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">
                                                            90,-80,90,70,-61,83,63
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR7429</a></td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class=\"badge badge-info\">Processing</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#00c0ef\" data-height=\"20\">
                                                            90,80,-90,70,-61,83,63
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR1848</a></td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class=\"badge badge-warning\">Pending</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">
                                                            90,80,-90,70,61,-83,68
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR7429</a></td>
                                                    <td>iPhone 6 Plus</td>
                                                    <td><span class=\"badge badge-danger\">Delivered</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">
                                                            90,-80,90,70,-61,83,63
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=\"#\">OR9842</a></td>
                                                    <td>Call of Duty IV</td>
                                                    <td><span class=\"badge badge-success\">Shipped</span></td>
                                                    <td>
                                                        <div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">
                                                            90,80,90,-70,61,-83,63
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class=\"card-footer clearfix\">
                                        <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-info float-left\">Place New
                                            Order</a>
                                        <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-secondary float-right\">View
                                            All Orders</a>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->

                            <div class=\"col-md-4\">
                                <!-- Info Boxes Style 2 -->
                                <div class=\"info-box mb-3 bg-warning\">
                                    <span class=\"info-box-icon\"><i class=\"fas fa-tag\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Inventory</span>
                                        <span class=\"info-box-number\">5,200</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <div class=\"info-box mb-3 bg-success\">
                                    <span class=\"info-box-icon\"><i class=\"far fa-heart\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Mentions</span>
                                        <span class=\"info-box-number\">92,050</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <div class=\"info-box mb-3 bg-danger\">
                                    <span class=\"info-box-icon\"><i class=\"fas fa-cloud-download-alt\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Downloads</span>
                                        <span class=\"info-box-number\">114,381</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <div class=\"info-box mb-3 bg-info\">
                                    <span class=\"info-box-icon\"><i class=\"far fa-comment\"></i></span>

                                    <div class=\"info-box-content\">
                                        <span class=\"info-box-text\">Direct Messages</span>
                                        <span class=\"info-box-number\">163,921</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->

                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">Browser Usage</h3>

                                        <div class=\"card-tools\">
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"><i
                                                        class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i
                                                        class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-8\">
                                                <div class=\"chart-responsive\">
                                                    <canvas id=\"pieChart\" height=\"150\"></canvas>
                                                </div>
                                                <!-- ./chart-responsive -->
                                            </div>
                                            <!-- /.col -->
                                            <div class=\"col-md-4\">
                                                <ul class=\"chart-legend clearfix\">
                                                    <li><i class=\"far fa-circle text-danger\"></i> Chrome</li>
                                                    <li><i class=\"far fa-circle text-success\"></i> IE</li>
                                                    <li><i class=\"far fa-circle text-warning\"></i> FireFox</li>
                                                    <li><i class=\"far fa-circle text-info\"></i> Safari</li>
                                                    <li><i class=\"far fa-circle text-primary\"></i> Opera</li>
                                                    <li><i class=\"far fa-circle text-secondary\"></i> Navigator</li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class=\"card-footer bg-white p-0\">
                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    United States of America
                                                    <span class=\"float-right text-danger\">
                        <i class=\"fas fa-arrow-down text-sm\"></i>
                        12%</span>
                                                </a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    India
                                                    <span class=\"float-right text-success\">
                        <i class=\"fas fa-arrow-up text-sm\"></i> 4%
                      </span>
                                                </a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    China
                                                    <span class=\"float-right text-warning\">
                        <i class=\"fas fa-arrow-left text-sm\"></i> 0%
                      </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.footer -->
                                </div>
                                <!-- /.card -->

                                <!-- PRODUCT LIST -->
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h3 class=\"card-title\">Recently Added Products</h3>

                                        <div class=\"card-tools\">
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class=\"card-body p-0\">
                                        <ul class=\"products-list product-list-in-card pl-2 pr-2\">
                                            <li class=\"item\">
                                                <div class=\"product-img\">
                                                    <img src=\"{{ asset('dist/img/default-150x150.png') }}\"
                                                         alt=\"Product Image\"
                                                         class=\"img-size-50\">
                                                </div>
                                                <div class=\"product-info\">
                                                    <a href=\"javascript:void(0)\" class=\"product-title\">Samsung TV
                                                        <span class=\"badge badge-warning float-right\">\$1800</span></a>
                                                    <span class=\"product-description\">
                        Samsung 32\" 1080p 60Hz LED Smart HDTV.
                      </span>
                                                </div>
                                            </li>
                                            <!-- /.item -->
                                            <li class=\"item\">
                                                <div class=\"product-img\">
                                                    <img src=\"{{ asset('dist/img/default-150x150.png') }}\"
                                                         alt=\"Product Image\"
                                                         class=\"img-size-50\">
                                                </div>
                                                <div class=\"product-info\">
                                                    <a href=\"javascript:void(0)\" class=\"product-title\">Bicycle
                                                        <span class=\"badge badge-info float-right\">\$700</span></a>
                                                    <span class=\"product-description\">
                        26\" Mongoose Dolomite Men's 7-speed, Navy Blue.
                      </span>
                                                </div>
                                            </li>
                                            <!-- /.item -->
                                            <li class=\"item\">
                                                <div class=\"product-img\">
                                                    <img src=\"{{ asset('dist/img/default-150x150.png') }}\"
                                                         alt=\"Product Image\"
                                                         class=\"img-size-50\">
                                                </div>
                                                <div class=\"product-info\">
                                                    <a href=\"javascript:void(0)\" class=\"product-title\">
                                                        Xbox One <span class=\"badge badge-danger float-right\">
                        \$350
                      </span>
                                                    </a>
                                                    <span class=\"product-description\">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                      </span>
                                                </div>
                                            </li>
                                            <!-- /.item -->
                                            <li class=\"item\">
                                                <div class=\"product-img\">
                                                    <img src=\"{{ asset('dist/img/default-150x150.png') }}\"
                                                         alt=\"Product Image\"
                                                         class=\"img-size-50\">
                                                </div>
                                                <div class=\"product-info\">
                                                    <a href=\"javascript:void(0)\" class=\"product-title\">PlayStation 4
                                                        <span class=\"badge badge-success float-right\">\$399</span></a>
                                                    <span class=\"product-description\">
                        PlayStation 4 500GB Console (PS4)
                      </span>
                                                </div>
                                            </li>
                                            <!-- /.item -->
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class=\"card-footer text-center\">
                                        <a href=\"javascript:void(0)\" class=\"uppercase\">View All Products</a>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div><!--/. container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        {% endblock %}
        <!-- Control Sidebar -->
        <aside class=\"control-sidebar control-sidebar-dark\">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class=\"main-footer\">
            <strong>Copyright &copy; 2021 </strong> Todos los Derechos Reservados.
        </footer>
    </div>
    <!-- ./wrapper -->
    </body>
{% endblock %}


</html>






", "base.html.twig", "C:\\wamp64\\www\\magoyartesanos\\templates\\base.html.twig");
    }
}
