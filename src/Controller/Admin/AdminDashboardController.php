<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminDashboardController extends AbstractController{
    #[Route('/admin/admin/dashboard', name: 'app_admin_admin_dashboard')]
    public function index(): Response
    {
        return $this->render('admin/admin_dashboard/index.html.twig', [
            'controller_name' => 'Admin/AdminDashboardController',
        ]);
    }
}