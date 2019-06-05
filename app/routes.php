<?php

////////////////////////////////////////////////
//////////////// Main Pages/////////////////////
////////////////////////////////////////////////


// Home
$app
    ->get(
        '/',
        function($request, $response)
        {
            $query = $this->db->query('SELECT * FROM projects');
            $projects = $query->fetchAll();

            // View data
            $viewData = [];
            $viewData['projects'] = $projects;
            $viewData['title'] = "All Projects";

            return $this->view->render($response, 'pages/home.twig', $viewData);
        }
    )
    ->setName('home')
;


// Development
$app
    ->get(
        '/development',
        function($request, $response)
        {
            $query = $this->db->query('SELECT * FROM projects WHERE category = "dev" OR category = "dev/design" ');
            $projects = $query->fetchAll();

            // View data
            $viewData = [];
            $viewData['projects'] = $projects;
            $viewData['title'] = "Développement";

            return $this->view->render($response, 'pages/development.twig', $viewData);
        }
    )
    ->setName('development')
;


// Design
$app
    ->get(
        '/design',
        function($request, $response)
        {
            $query = $this->db->query('SELECT * FROM projects WHERE category = "design" OR category = "dev/design" ');
            $projects = $query->fetchAll();

            // View data
            $viewData = [];
            $viewData['projects'] = $projects;
            $viewData['title'] = "Design";

            return $this->view->render($response, 'pages/design.twig', $viewData);
        }
    )
    ->setName('design')
;


// Motion
$app
    ->get(
        '/motion',
        function($request, $response)
        {
            // View data
            $viewData = [];
            $viewData['title'] = "Motion";

            return $this->view->render($response, 'pages/motion.twig', $viewData);
        }
    )
    ->setName('motion')
;


// About Me
$app
    ->get(
        '/about_me',
        function($request, $response)
        {
            $query = $this->db->query('SELECT * FROM about');
            $about = $query->fetch();

            // View data
            $viewData = [];
            $viewData['about'] = $about;
            $viewData['title'] = "about_me";

            return $this->view->render($response, 'pages/about_me.twig', $viewData);
        }
    )
    ->setName('about_me')
;



////////////////////////////////////////////////
///////////// Differents Projects //////////////
////////////////////////////////////////////////


// project
$app
    ->get(
        '/projects/{slug:[a-z_-]+}',
        function($request, $response, $arguments)
        {
            // Fetch project
            $prepare = $this->db->prepare(
                'SELECT * FROM projects WHERE slug = :slug LIMIT 1'
            );
            $prepare->bindValue('slug', $arguments['slug']);
            $prepare->execute();
            $projects = $prepare->fetchAll();


            if(!$projects)
            {
                throw new \Slim\Exception\NotFoundException($request, $response);
            }


            // View data
            $viewData = [];
            $viewData['projects'] = $projects;


            return $this->view->render($response, 'pages/project.twig', $viewData);
        }
    )
    ->setName('project')
;