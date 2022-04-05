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

/* servicios/_form.html.twig */
class __TwigTemplate_d057655523ede675c34ab78a39ebea158d8c24422aca75b2934dec88de1db3fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "servicios/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "servicios/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newservicio"]]);
        echo "
<form role=\"form\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_servicios_new");
        echo "\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"text-danger\">
                        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'errors');
        echo "
                    </div>
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nombre", [], "any", false, false, false, 12), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <!-- <label for=\"customFile\">Custom File</label> -->
                    <div class=\"custom-file\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "imagen", [], "any", false, false, false, 21), 'widget');
        echo "
                        <label class=\"custom-file-label\" for=\"producto_imagen\">Adjuntar Imagen del Servicio</label>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 31), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-5\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "tipomoneda", [], "any", false, false, false, 40), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                <label>I.V.A.</label>
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "iva", [], "any", false, false, false, 52), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                <input type=\"text\" name=\"nuevo\" class=\"form-control\" placeholder=\"Ingresar I.V.A.\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "concepto", [], "any", false, false, false, 71), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "descripcion", [], "any", false, false, false, 80), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <!-- <label for=\"customFile\">Custom File</label> -->
                    <div class=\"custom-file\">
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "adjuntardocumentos", [], "any", false, false, false, 89), 'widget');
        echo "
                        <label class=\"custom-file-label\" for=\"producto_imagen\">Adjuntar</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"> Cancelar</a>
        <a class=\"btn btn-success\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"> Imagen</a>
        <a class=\"btn btn-info\" href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"> Documentos</a>
    </div>
    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "_token", [], "any", false, false, false, 102), 'row');
        echo "
</form>
";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "servicios/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 104,  186 => 102,  181 => 100,  177 => 99,  173 => 98,  161 => 89,  149 => 80,  137 => 71,  115 => 52,  100 => 40,  88 => 31,  75 => 21,  63 => 12,  56 => 8,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newservicio'}}) }}
<form role=\"form\" action=\"{{ path('app_servicios_new') }}\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    <div class=\"text-danger\">
                        {{ form_errors(form) }}
                    </div>
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.nombre) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <!-- <label for=\"customFile\">Custom File</label> -->
                    <div class=\"custom-file\">
                        {{ form_widget(form.imagen) }}
                        <label class=\"custom-file-label\" for=\"producto_imagen\">Adjuntar Imagen del Servicio</label>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                {{ form_widget(form.beneficioxventa) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-5\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                {{ form_widget(form.tipomoneda) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                <label>I.V.A.</label>
                                {{ form_widget(form.iva) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                <input type=\"text\" name=\"nuevo\" class=\"form-control\" placeholder=\"Ingresar I.V.A.\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.concepto) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            {{ form_widget(form.descripcion) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"form-group\">
                    <!-- <label for=\"customFile\">Custom File</label> -->
                    <div class=\"custom-file\">
                        {{ form_widget(form.adjuntardocumentos) }}
                        <label class=\"custom-file-label\" for=\"producto_imagen\">Adjuntar</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" href=\"{{ path('app_login') }}\"> Cancelar</a>
        <a class=\"btn btn-success\" href=\"{{ path('app_login') }}\"> Imagen</a>
        <a class=\"btn btn-info\" href=\"{{ path('app_login') }}\"> Documentos</a>
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}", "servicios/_form.html.twig", "C:\\wamp64\\www\\magoyartesanos\\templates\\servicios\\_form.html.twig");
    }
}
