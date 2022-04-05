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

/* resumen/index.html.twig */
class __TwigTemplate_a24782df8fc1dd91d17c6057d74b6971ff85086ae713c4ccc12a4d8c6eec0de5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page' => [$this, 'block_page'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resumen/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resumen/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "resumen/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Resumen";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 6
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Resumen</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\">Inicio</li>
                            <li class=\"breadcrumb-item active\">Resumen</li>
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
                            <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-users\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Total Usuarios</span>
                                <span class=\"info-box-number\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["totalu"]) || array_key_exists("totalu", $context) ? $context["totalu"] : (function () { throw new RuntimeError('Variable "totalu" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-danger elevation-1\"><i
                                                class=\"fas fa-list\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Total Productos</span>
                                <span class=\"info-box-number\">";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["totalp"]) || array_key_exists("totalp", $context) ? $context["totalp"] : (function () { throw new RuntimeError('Variable "totalp" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "</span>
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
                                <span class=\"info-box-text\">Total de Ventas</span>
                                <span class=\"info-box-number\">";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["totalv"]) || array_key_exists("totalv", $context) ? $context["totalv"] : (function () { throw new RuntimeError('Variable "totalv" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-warning elevation-1\"><i
                                                class=\"fas fa-server\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Total de Servicios</span>
                                <span class=\"info-box-number\">";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <!-- USERS LIST -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Nuevos Usuarios</h3>

                                <div class=\"card-tools\">
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
                                    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 113, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 114
            echo "                                        <li>
                                            <img src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/usuarioanonimo.png"), "html", null, true);
            echo "\"
                                                 alt=\"User Image\" width=\"80\" height=\"80\">
                                            <a class=\"users-list-name\" href=\"#\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nombre", [], "any", false, false, false, 117), "html", null, true);
            echo "</a>
                                            <span class=\"users-list-date\">";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["fecha"]) || array_key_exists("fecha", $context) ? $context["fecha"] : (function () { throw new RuntimeError('Variable "fecha" does not exist.', 118, $this->source); })()), "html", null, true);
            echo "</span>
                                        </li>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 121
            echo "                                        <li>
                                            <span>No se encontraron registros</span>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                </ul>
                                <!-- /.users-list -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer text-center\">
                                <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Ver Todos los Usuarios</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!-- /.col -->

                    <!-- TABLE: LATEST ORDERS -->
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"card-header border-transparent\">
                                <h3 class=\"card-title\">&Uacute;ltimas Ventas</h3>

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
                                            <th>ID Orden</th>
                                            <th>Producto</th>
                                            <th>Estado</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ventastotal"]) || array_key_exists("ventastotal", $context) ? $context["ventastotal"] : (function () { throw new RuntimeError('Variable "ventastotal" does not exist.', 165, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ventas"]) {
            // line 166
            echo "                                            <tr>
                                                <td><a href=\"#\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ventas"], "id", [], "any", false, false, false, 167), "html", null, true);
            echo "</a></td>
                                                <td>Call of Duty IV</td>
                                                <td><span class=\"badge badge-success\">Shipped</span></td>
                                            </tr>
                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 172
            echo "                                            <tr>
                                                <td colspan=\"7\">No se encontraron registros</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ventas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ventasptotal"]) || array_key_exists("ventasptotal", $context) ? $context["ventasptotal"] : (function () { throw new RuntimeError('Variable "ventasptotal" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ventas"]) {
            // line 177
            echo "                                            <tr>
                                                <td><a href=\"#\">";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ventas"], "id", [], "any", false, false, false, 178), "html", null, true);
            echo "</a></td>
                                                <td>";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ventas"], "nombre", [], "any", false, false, false, 179), "html", null, true);
            echo "</td>
                                                <td><span class=\"badge badge-success\">Shipped</span></td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ventas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>

                            <!-- /.card-footer -->
                        </div>
                    </div>
                    <!-- /.card -->

                    <div class=\"col-md-12\">
                        <!-- PRODUCT LIST -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Productos Adicionados Recientemente</h3>

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
                                    ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ultimosproductos"]) || array_key_exists("ultimosproductos", $context) ? $context["ultimosproductos"] : (function () { throw new RuntimeError('Variable "ultimosproductos" does not exist.', 212, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ventas"]) {
            // line 213
            echo "                                        <li class=\"item\">
                                            <div class=\"product-img\">
                                                <img src=\"";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ventas"], "imagen", [], "any", false, false, false, 215), "html", null, true);
            echo "\"
                                                     alt=\"Product Image\"
                                                     class=\"img-size-50\">
                                            </div>
                                            <div class=\"product-info\">
                                                <a href=\"#\" class=\"product-title\">";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ventas"], "nombre", [], "any", false, false, false, 220), "html", null, true);
            echo "
                                                    <span class=\"badge badge-warning float-right\">";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ventas"], "beneficiosxventa", [], "any", false, false, false, 221), "html", null, true);
            echo "</span></a>

                                            </div>
                                        </li>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 226
            echo "                                        <li>
                                            <span>No se encontraron registros</span>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ventas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer text-center\">
                                <a href=\"";
        // line 234
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\" class=\"uppercase\">Ver Todos los
                                    Productos</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
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
        return "resumen/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 234,  408 => 230,  399 => 226,  389 => 221,  385 => 220,  377 => 215,  373 => 213,  368 => 212,  337 => 183,  327 => 179,  323 => 178,  320 => 177,  315 => 176,  306 => 172,  296 => 167,  293 => 166,  288 => 165,  250 => 130,  243 => 125,  234 => 121,  226 => 118,  222 => 117,  217 => 115,  214 => 114,  209 => 113,  176 => 83,  159 => 69,  138 => 51,  121 => 37,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Resumen{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Resumen</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\">Inicio</li>
                            <li class=\"breadcrumb-item active\">Resumen</li>
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
                            <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-users\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Total Usuarios</span>
                                <span class=\"info-box-number\">{{ totalu }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-danger elevation-1\"><i
                                                class=\"fas fa-list\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Total Productos</span>
                                <span class=\"info-box-number\">{{ totalp }}</span>
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
                                <span class=\"info-box-text\">Total de Ventas</span>
                                <span class=\"info-box-number\">{{ totalv }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class=\"col-12 col-sm-6 col-md-3\">
                        <div class=\"info-box mb-3\">
                                    <span class=\"info-box-icon bg-warning elevation-1\"><i
                                                class=\"fas fa-server\"></i></span>

                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">Total de Servicios</span>
                                <span class=\"info-box-number\">{{ totals }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <!-- USERS LIST -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Nuevos Usuarios</h3>

                                <div class=\"card-tools\">
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
                                    {% for user in users %}
                                        <li>
                                            <img src=\"{{ asset('dist/img/usuarioanonimo.png') }}\"
                                                 alt=\"User Image\" width=\"80\" height=\"80\">
                                            <a class=\"users-list-name\" href=\"#\">{{ user.nombre }}</a>
                                            <span class=\"users-list-date\">{{ fecha }}</span>
                                        </li>
                                    {% else %}
                                        <li>
                                            <span>No se encontraron registros</span>
                                        </li>
                                    {% endfor %}
                                </ul>
                                <!-- /.users-list -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer text-center\">
                                <a href=\"{{ path('app_user_index') }}\">Ver Todos los Usuarios</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!-- /.col -->

                    <!-- TABLE: LATEST ORDERS -->
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"card-header border-transparent\">
                                <h3 class=\"card-title\">&Uacute;ltimas Ventas</h3>

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
                                            <th>ID Orden</th>
                                            <th>Producto</th>
                                            <th>Estado</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for ventas in ventastotal %}
                                            <tr>
                                                <td><a href=\"#\">{{ ventas.id }}</a></td>
                                                <td>Call of Duty IV</td>
                                                <td><span class=\"badge badge-success\">Shipped</span></td>
                                            </tr>
                                        {% else %}
                                            <tr>
                                                <td colspan=\"7\">No se encontraron registros</td>
                                            </tr>
                                        {% endfor %}
                                        {% for ventas in ventasptotal %}
                                            <tr>
                                                <td><a href=\"#\">{{ ventas.id }}</a></td>
                                                <td>{{ ventas.nombre }}</td>
                                                <td><span class=\"badge badge-success\">Shipped</span></td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>

                            <!-- /.card-footer -->
                        </div>
                    </div>
                    <!-- /.card -->

                    <div class=\"col-md-12\">
                        <!-- PRODUCT LIST -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Productos Adicionados Recientemente</h3>

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
                                    {% for ventas in ultimosproductos %}
                                        <li class=\"item\">
                                            <div class=\"product-img\">
                                                <img src=\"{{ ventas.imagen }}\"
                                                     alt=\"Product Image\"
                                                     class=\"img-size-50\">
                                            </div>
                                            <div class=\"product-info\">
                                                <a href=\"#\" class=\"product-title\">{{ ventas.nombre }}
                                                    <span class=\"badge badge-warning float-right\">{{ ventas.beneficiosxventa }}</span></a>

                                            </div>
                                        </li>
                                    {% else %}
                                        <li>
                                            <span>No se encontraron registros</span>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer text-center\">
                                <a href=\"{{ path('app_producto_index') }}\" class=\"uppercase\">Ver Todos los
                                    Productos</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
{% endblock %}", "resumen/index.html.twig", "C:\\wamp64\\www\\magoyartesanos\\templates\\resumen\\index.html.twig");
    }
}
