@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold" style="color: #19357B;">
                <i class="fas fa-tachometer-alt me-2"></i>Admin Dashboard
            </h2>
            <span class="badge bg-primary rounded-pill px-4 py-2">
                Welcome, {{ Auth::user()->name }}
            </span>
        </div>

        <!-- Stats Cards Row -->
        <div class="row g-4 mb-5">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100" style="border-radius: 20px; background: #ffffff; border-left: 5px solid #19357B;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3" style="width: 50px; height: 50px; background: rgba(25, 53, 123, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-users fa-2x" style="color: #19357B;"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-0" style="color: #19357B;">Total Users</h5>
                                <p class="display-6 fw-bold mb-0">{{ \App\Models\User::count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100" style="border-radius: 20px; background: #ffffff; border-left: 5px solid #19357B;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3" style="width: 50px; height: 50px; background: rgba(25, 53, 123, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-calendar-check fa-2x" style="color: #19357B;"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-0" style="color: #19357B;">Total Bookings</h5>
                                <p class="display-6 fw-bold mb-0">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100" style="border-radius: 20px; background: #ffffff; border-left: 5px solid #19357B;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3" style="width: 50px; height: 50px; background: rgba(25, 53, 123, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-dollar-sign fa-2x" style="color: #19357B;"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-0" style="color: #19357B;">Revenue</h5>
                                <p class="display-6 fw-bold mb-0">$0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100" style="border-radius: 20px; background: #ffffff; border-left: 5px solid #19357B;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3" style="width: 50px; height: 50px; background: rgba(25, 53, 123, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-chart-line fa-2x" style="color: #19357B;"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-0" style="color: #19357B;">Growth</h5>
                                <p class="display-6 fw-bold mb-0">+12%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity / Placeholder -->
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm" style="border-radius: 20px;">
                    <div class="card-header bg-white border-0 pb-0">
                        <h5 class="fw-bold" style="color: #19357B;">
                            <i class="fas fa-clock me-2"></i>Recent Activity
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item border-0 px-0 d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="fas fa-user-plus me-2" style="color: #19357B;"></i>
                                    <span>New user registered: <strong>John Doe</strong></span>
                                </div>
                                <small class="text-muted">5 mins ago</small>
                            </div>
                            <div class="list-group-item border-0 px-0 d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="fas fa-shopping-cart me-2" style="color: #19357B;"></i>
                                    <span>New booking: <strong>#12345</strong></span>
                                </div>
                                <small class="text-muted">2 hours ago</small>
                            </div>
                            <div class="list-group-item border-0 px-0 d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="fas fa-envelope me-2" style="color: #19357B;"></i>
                                    <span>Contact form submission from <strong>Jane Smith</strong></span>
                                </div>
                                <small class="text-muted">Yesterday</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm" style="border-radius: 20px;">
                    <div class="card-header bg-white border-0 pb-0">
                        <h5 class="fw-bold" style="color: #19357B;">
                            <i class="fas fa-info-circle me-2"></i>Quick Actions
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-outline-primary rounded-pill py-2">
                                <i class="fas fa-user me-2"></i>Manage Users
                            </a>
                            <a href="#" class="btn btn-outline-primary rounded-pill py-2">
                                <i class="fas fa-calendar me-2"></i>View Bookings
                            </a>
                            <a href="#" class="btn btn-outline-primary rounded-pill py-2">
                                <i class="fas fa-cog me-2"></i>Settings
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection