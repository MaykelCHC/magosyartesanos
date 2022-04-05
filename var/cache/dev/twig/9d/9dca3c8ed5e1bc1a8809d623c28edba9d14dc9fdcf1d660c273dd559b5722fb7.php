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

/* ranking_usuarios/index.html.twig */
class __TwigTemplate_5eccb3771ece932b284a9b0cab86662aeba1698d4cf7971b1b0e163a95afb034 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pagescript' => [$this, 'block_pagescript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ranking_usuarios/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ranking_usuarios/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ranking_usuarios/index.html.twig", 1);
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

        echo "Ranking de Usuarios";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_pagescript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagescript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagescript"));

        // line 6
        echo "    <script>
        function cargarbuscar() {
            var act_docente = document.getElementById('custId').value;
            / Creamos variable que almacenara el ID a borrar
            var inputfocused = \"\";

            // Le añadimos función de borrar al botón
            document.getElementById(\"clearbutton\").onclick = limpiaCampo;

            // En este caso concreto seleccionamos todos los input text y password
            // para una selección más precisa se puede usa una clase
            // para una selección más general, se puede usar solo 'input'
            var elements = document.querySelectorAll(\"input[type='text']\");

            // Por cada input field le añadimos una funcion 'onFocus'
            for (var i = 0; i < 1; i++) {
                elements[i].addEventListener(\"focus\", function () {
                    // Guardamos la ID del elemento al que hacemos 'focus'
                    inputfocused = this;
                });
            }

            function limpiaCampo() {
                //Utilizamos el elemento al que hacemos focus para borrar el campo.
                inputfocused.value = \"\";
            }

            \$.ajax({
                data: {'usuarios': act_docente},
                dataType: 'json',
                type: 'POST',
                url: '../ranking_buscar'
            }).done(function (data) {

            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 46
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\" style=\"height: 100%\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Ranking de Usuarios</h3>

                        <div class=\"card-tools\">
                            <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                <input type=\"text\" name=\"table_search\" id=\"custId\" class=\"form-control float-right\"
                                       placeholder=\"Buscar\">

                                <div class=\"input-group-append\">
                                    <button type=\"button\" id=\"clearbutton\" onclick=\"cargarbuscar()\"
                                            class=\"btn btn-default\"><i
                                                class=\"fas fa-search\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                        <table class=\"table table-head-fixed text-nowrap\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                            </tr>
                            </thead>

                            <tbody>
                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 80, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 81
            echo "                                <tr>
                                    <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                                    <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nombre", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                                    <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "apellidos", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 87
            echo "                                <tr>
                                    <td colspan=\"3\">No se encontraron registros</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ranking_usuarios/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 91,  206 => 87,  198 => 84,  194 => 83,  190 => 82,  187 => 81,  182 => 80,  146 => 46,  136 => 45,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ranking de Usuarios{% endblock %}

{% block pagescript %}
    <script>
        function cargarbuscar() {
            var act_docente = document.getElementById('custId').value;
            / Creamos variable que almacenara el ID a borrar
            var inputfocused = \"\";

            // Le añadimos función de borrar al botón
            document.getElementById(\"clearbutton\").onclick = limpiaCampo;

            // En este caso concreto seleccionamos todos los input text y password
            // para una selección más precisa se puede usa una clase
            // para una selección más general, se puede usar solo 'input'
            var elements = document.querySelectorAll(\"input[type='text']\");

            // Por cada input field le añadimos una funcion 'onFocus'
            for (var i = 0; i < 1; i++) {
                elements[i].addEventListener(\"focus\", function () {
                    // Guardamos la ID del elemento al que hacemos 'focus'
                    inputfocused = this;
                });
            }

            function limpiaCampo() {
                //Utilizamos el elemento al que hacemos focus para borrar el campo.
                inputfocused.value = \"\";
            }

            \$.ajax({
                data: {'usuarios': act_docente},
                dataType: 'json',
                type: 'POST',
                url: '../ranking_buscar'
            }).done(function (data) {

            });
        }
    </script>
{% endblock %}

{% block page %}
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <div class=\"row\">
            <div class=\"col-12\" style=\"height: 100%\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Ranking de Usuarios</h3>

                        <div class=\"card-tools\">
                            <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                <input type=\"text\" name=\"table_search\" id=\"custId\" class=\"form-control float-right\"
                                       placeholder=\"Buscar\">

                                <div class=\"input-group-append\">
                                    <button type=\"button\" id=\"clearbutton\" onclick=\"cargarbuscar()\"
                                            class=\"btn btn-default\"><i
                                                class=\"fas fa-search\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body table-responsive p-0\" style=\"height: 300px;\">
                        <table class=\"table table-head-fixed text-nowrap\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                            </tr>
                            </thead>

                            <tbody>
                            {% for user in users %}
                                <tr>
                                    <td>{{ user.id }}</td>
                                    <td>{{ user.nombre }}</td>
                                    <td>{{ user.apellidos }}</td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"3\">No se encontraron registros</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
{% endblock %}", "ranking_usuarios/index.html.twig", "C:\\wamp64\\www\\magoyartesanos\\templates\\ranking_usuarios\\index.html.twig");
    }
}
