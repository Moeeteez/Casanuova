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

/* index.html.twig */
class __TwigTemplate_ca36daa72e0c797524180ee8a41904d7 extends Template
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
            'PageTitle' => [$this, 'block_PageTitle'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css\" rel=\"stylesheet\" />
        <link href=\"../css/styles.css\" rel=\"stylesheet\" />
        <script src =\"node_modules/@fortawesome/fontawesome-free/js/all.js\"></script>
        <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
    </head>
    <body class=\"sb-nav-fixed\">
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=\"index.html.twig\">CasaNuova</a>
            <!-- Sidebar Toggle-->
            <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
            <!-- Navbar Search-->
            <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
                <div class=\"input-group\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
                    <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item\" href=\"#!\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#!\">Activity Log</a></li>
                        <li><hr class=\"dropdown-divider\" /></li>
                        <li><a class=\"dropdown-item\" href=\"#!\">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            <div class=\"sb-sidenav-menu-heading\">Accueil</div>
                            <a class=\"nav-link\" href=\"index.html.twig\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                                Tbaleau de Bord
                            </a>
                            <div class=\"sb-sidenav-menu-heading\">paramétres</div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                                Gestionneurs
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"layout-static.html\">Gestion des annonces</a>
                                    <a class=\"nav-link\" href=\"layout-static.html\">Gestion des reservations</a>
                                    <a class=\"nav-link\" href=\"layout-static.html\">Gestion des services</a>
                                    <a class=\"nav-link\" href=\"layout-static.html\">Gestion des assurances</a>
                                    <a class=\"nav-link\" href=\"layout-static.html\">Gestion des reclamations</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                                Pages
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                        Authentication
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"login.html\">Login</a>
                                            <a class=\"nav-link\" href=\"register.html\">Register</a>
                                            <a class=\"nav-link\" href=\"password.html\">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                                        Error
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"401.html\">401 Page</a>
                                            <a class=\"nav-link\" href=\"404.html\">404 Page</a>
                                            <a class=\"nav-link\" href=\"500.html\">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class=\"sb-sidenav-menu-heading\">Addons</div>
                            <a class=\"nav-link\" href=\"charts.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                                Charts
                            </a>
                            <a class=\"nav-link\" href=\"tables.html.twig\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Deconnexion</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id=\"layoutSidenav_content\">
                <main>
                    <div class=\"container-fluid px-4\">
                        <h1 class=\"mt-4\">
                            ";
        // line 120
        $this->displayBlock('PageTitle', $context, $blocks);
        // line 123
        echo "                            ";
        $this->displayBlock('body', $context, $blocks);
        // line 262
        echo "
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"../js/scripts.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"../assets/demo/chart-area-demo.js\"></script>
        <script src=\"../assets/demo/chart-bar-demo.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest\" crossorigin=\"anonymous\"></script>
        <script src=\"../js/datatables-simple-demo.js\"></script>
        <script src =\"node_modules/@fortawesome/fontawesome-free/js/all.js\"></script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "        <title>CasaNuova Accueil</title>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_PageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        // line 121
        echo "                            Dashboard
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 124
        echo "
                        </h1>
                        <ol class=\"breadcrumb mb-4\">
                            <li class=\"breadcrumb-item active\">Dashboard</li>
                        </ol>
                        <div class=\"row\">
                            <div class=\"col-xl-3 col-md-6\">
                                <div class=\"card bg-primary text-white mb-4\">
                                    <div class=\"card-body\">Primary Card</div>
                                    <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                        <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                        <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-md-6\">
                                <div class=\"card bg-warning text-white mb-4\">
                                    <div class=\"card-body\">Warning Card</div>
                                    <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                        <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                        <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-md-6\">
                                <div class=\"card bg-success text-white mb-4\">
                                    <div class=\"card-body\">Success Card</div>
                                    <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                        <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                        <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-md-6\">
                                <div class=\"card bg-danger text-white mb-4\">
                                    <div class=\"card-body\">Danger Card</div>
                                    <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                        <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                        <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xl-6\">
                                <div class=\"card mb-4\">
                                    <div class=\"card-header\">
                                        <i class=\"fas fa-chart-area me-1\"></i>
                                        Area Chart Example
                                    </div>
                                    <div class=\"card-body\"><canvas id=\"myAreaChart\" width=\"100%\" height=\"40\"></canvas></div>
                                </div>
                            </div>
                            <div class=\"col-xl-6\">
                                <div class=\"card mb-4\">
                                    <div class=\"card-header\">
                                        <i class=\"fas fa-chart-bar me-1\"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class=\"card-body\"><canvas id=\"myBarChart\" width=\"100%\" height=\"40\"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card mb-4\">
                            <div class=\"card-header\">
                                <i class=\"fas fa-table me-1\"></i>
                                Table de gestions des clients
                            </div>

                            <div class=\"card-body\">
                                <table id=\"datatablesSimple\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NomPrenom</th>
                                            <th>Email</th>
                                            <th>MDP</th>
                                            <th>Tel</th>
                                            <th>NomU</th>
                                            <th>Region</th>
                                            <th>Etat</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>NomPrenom</th>
                                            <th>Email</th>
                                            <th>MDP</th>
                                            <th>Tel</th>
                                            <th>NomU</th>
                                            <th>Region</th>
                                            <th>Etat</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <button onclick=window.location.href=\"";
        // line 222
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.add");
        echo "\" type=\"button\" class=\"btn btn-outline-primary\">Ajouter utilisateur</button>
                                    ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) || array_key_exists("Users", $context) ? $context["Users"] : (function () { throw new RuntimeError('Variable "Users" does not exist.', 223, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["User"]) {
            // line 224
            echo "                                        <tr>
                                            <td>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["User"], "id", [], "any", false, false, false, 225), "html", null, true);
            echo "</td>
                                            <td>";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["User"], "nomPrenom", [], "any", false, false, false, 226), "html", null, true);
            echo "</td>
                                            <td>";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["User"], "Email", [], "any", false, false, false, 227), "html", null, true);
            echo "</td>
                                            <td>";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["User"], "mDP", [], "any", false, false, false, 228), "html", null, true);
            echo "</td>
                                            <td>";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["User"], "Tel", [], "any", false, false, false, 229), "html", null, true);
            echo "</td>
                                            <td>";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["User"], "nomU", [], "any", false, false, false, 230), "html", null, true);
            echo "</td>
                                            <td>";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["User"], "region", [], "any", false, false, false, 231), "html", null, true);
            echo "</td>
                                            <td>";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["User"], "etat", [], "any", false, false, false, 232), "html", null, true);
            echo "</td>
                                            <th>
                                                <a href=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.update", ["id" => twig_get_attribute($this->env, $this->source, $context["User"], "id", [], "any", false, false, false, 234)]), "html", null, true);
            echo "\" class=\"card-link\">
                                                    <i class=\"fa-solid fa-pen-to-square\"></i></a>
                                                    <a href=\"";
            // line 236
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["User"], "id", [], "any", false, false, false, 236)]), "html", null, true);
            echo "\" class=\"card-link\">
                                                        <i class=\"fa-solid fa-xmark\"></i></a>
                                            </th>
                                        </tr>
                                    </tbody>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['User'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class=\"py-4 bg-light mt-auto\">
                    <div class=\"container-fluid px-4\">
                        <div class=\"d-flex align-items-center justify-content-between small\">
                            <div class=\"text-muted\">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href=\"#\">Privacy Policy</a>
                                &middot;
                                <a href=\"#\">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  407 => 242,  395 => 236,  390 => 234,  385 => 232,  381 => 231,  377 => 230,  373 => 229,  369 => 228,  365 => 227,  361 => 226,  357 => 225,  354 => 224,  350 => 223,  346 => 222,  246 => 124,  236 => 123,  225 => 121,  215 => 120,  204 => 10,  194 => 9,  173 => 262,  170 => 123,  168 => 120,  58 => 12,  56 => 9,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        {% block title %}
        <title>CasaNuova Accueil</title>
        {% endblock %}
        <link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css\" rel=\"stylesheet\" />
        <link href=\"../css/styles.css\" rel=\"stylesheet\" />
        <script src =\"node_modules/@fortawesome/fontawesome-free/js/all.js\"></script>
        <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
    </head>
    <body class=\"sb-nav-fixed\">
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=\"index.html.twig\">CasaNuova</a>
            <!-- Sidebar Toggle-->
            <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
            <!-- Navbar Search-->
            <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
                <div class=\"input-group\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
                    <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item\" href=\"#!\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#!\">Activity Log</a></li>
                        <li><hr class=\"dropdown-divider\" /></li>
                        <li><a class=\"dropdown-item\" href=\"#!\">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            <div class=\"sb-sidenav-menu-heading\">Accueil</div>
                            <a class=\"nav-link\" href=\"index.html.twig\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                                Tbaleau de Bord
                            </a>
                            <div class=\"sb-sidenav-menu-heading\">paramétres</div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                                Gestionneurs
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"layout-static.html\">Gestion des annonces</a>
                                    <a class=\"nav-link\" href=\"layout-static.html\">Gestion des reservations</a>
                                    <a class=\"nav-link\" href=\"layout-static.html\">Gestion des services</a>
                                    <a class=\"nav-link\" href=\"layout-static.html\">Gestion des assurances</a>
                                    <a class=\"nav-link\" href=\"layout-static.html\">Gestion des reclamations</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                                Pages
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                        Authentication
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"login.html\">Login</a>
                                            <a class=\"nav-link\" href=\"register.html\">Register</a>
                                            <a class=\"nav-link\" href=\"password.html\">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                                        Error
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"401.html\">401 Page</a>
                                            <a class=\"nav-link\" href=\"404.html\">404 Page</a>
                                            <a class=\"nav-link\" href=\"500.html\">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class=\"sb-sidenav-menu-heading\">Addons</div>
                            <a class=\"nav-link\" href=\"charts.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                                Charts
                            </a>
                            <a class=\"nav-link\" href=\"tables.html.twig\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Deconnexion</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id=\"layoutSidenav_content\">
                <main>
                    <div class=\"container-fluid px-4\">
                        <h1 class=\"mt-4\">
                            {% block PageTitle %}
                            Dashboard
                            {% endblock %}
                            {% block body %}

                        </h1>
                        <ol class=\"breadcrumb mb-4\">
                            <li class=\"breadcrumb-item active\">Dashboard</li>
                        </ol>
                        <div class=\"row\">
                            <div class=\"col-xl-3 col-md-6\">
                                <div class=\"card bg-primary text-white mb-4\">
                                    <div class=\"card-body\">Primary Card</div>
                                    <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                        <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                        <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-md-6\">
                                <div class=\"card bg-warning text-white mb-4\">
                                    <div class=\"card-body\">Warning Card</div>
                                    <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                        <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                        <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-md-6\">
                                <div class=\"card bg-success text-white mb-4\">
                                    <div class=\"card-body\">Success Card</div>
                                    <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                        <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                        <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-md-6\">
                                <div class=\"card bg-danger text-white mb-4\">
                                    <div class=\"card-body\">Danger Card</div>
                                    <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                        <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                        <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xl-6\">
                                <div class=\"card mb-4\">
                                    <div class=\"card-header\">
                                        <i class=\"fas fa-chart-area me-1\"></i>
                                        Area Chart Example
                                    </div>
                                    <div class=\"card-body\"><canvas id=\"myAreaChart\" width=\"100%\" height=\"40\"></canvas></div>
                                </div>
                            </div>
                            <div class=\"col-xl-6\">
                                <div class=\"card mb-4\">
                                    <div class=\"card-header\">
                                        <i class=\"fas fa-chart-bar me-1\"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class=\"card-body\"><canvas id=\"myBarChart\" width=\"100%\" height=\"40\"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card mb-4\">
                            <div class=\"card-header\">
                                <i class=\"fas fa-table me-1\"></i>
                                Table de gestions des clients
                            </div>

                            <div class=\"card-body\">
                                <table id=\"datatablesSimple\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NomPrenom</th>
                                            <th>Email</th>
                                            <th>MDP</th>
                                            <th>Tel</th>
                                            <th>NomU</th>
                                            <th>Region</th>
                                            <th>Etat</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>NomPrenom</th>
                                            <th>Email</th>
                                            <th>MDP</th>
                                            <th>Tel</th>
                                            <th>NomU</th>
                                            <th>Region</th>
                                            <th>Etat</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <button onclick=window.location.href=\"{{ path('user.add') }}\" type=\"button\" class=\"btn btn-outline-primary\">Ajouter utilisateur</button>
                                    {% for User in Users %}
                                        <tr>
                                            <td>{{ User.id}}</td>
                                            <td>{{ User.nomPrenom }}</td>
                                            <td>{{ User.Email }}</td>
                                            <td>{{ User.mDP }}</td>
                                            <td>{{ User.Tel }}</td>
                                            <td>{{ User.nomU }}</td>
                                            <td>{{ User.region }}</td>
                                            <td>{{ User.etat }}</td>
                                            <th>
                                                <a href=\"{{ path('user.update', {id: User.id}) }}\" class=\"card-link\">
                                                    <i class=\"fa-solid fa-pen-to-square\"></i></a>
                                                    <a href=\"{{ path('user.delete', {id: User.id}) }}\" class=\"card-link\">
                                                        <i class=\"fa-solid fa-xmark\"></i></a>
                                            </th>
                                        </tr>
                                    </tbody>
                                    {% endfor %}
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class=\"py-4 bg-light mt-auto\">
                    <div class=\"container-fluid px-4\">
                        <div class=\"d-flex align-items-center justify-content-between small\">
                            <div class=\"text-muted\">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href=\"#\">Privacy Policy</a>
                                &middot;
                                <a href=\"#\">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        {% endblock %}

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"../js/scripts.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"../assets/demo/chart-area-demo.js\"></script>
        <script src=\"../assets/demo/chart-bar-demo.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest\" crossorigin=\"anonymous\"></script>
        <script src=\"../js/datatables-simple-demo.js\"></script>
        <script src =\"node_modules/@fortawesome/fontawesome-free/js/all.js\"></script>
    </body>
</html>
", "index.html.twig", "C:\\Users\\Moetez\\Desktop\\Casanuova\\templates\\index.html.twig");
    }
}
